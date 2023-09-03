<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Payment;
use App\Http\Requests\StorePaymentRequest;
use KingFlamez\Rave\Facades\Rave as Flutterwave;

class FlutterwaveController extends Controller
{
    /**
     * Initialize Rave payment process
     * @return void
     */
    public function initialize(StorePaymentRequest $request)
    {
        $reference = Flutterwave::generateReference();

        $payment = Payment::query()->create([
            'ticket_type' => $request->get('ticket_type'),
            'transaction_reference' => $reference,
            'customer_name' => $request->get('customer_name'),
            'customer_email' => $request->get('customer_email'),
            'phone_number' => $request->get('phone_number'),
            'amount' => $this->getTicketPrice($request->get('ticket_type')),
            'currency' => 'UGX',
        ]);

        $data = [
            'payment_options' => 'mobilemoneyuganda,card',
            'amount' => $payment->amount,
            'email' => $payment->customer_email,
            'tx_ref' => $payment->transaction_reference,
            'currency' => "UGX",
            'redirect_url' => route('callback'),
            'customer' => [
                'email' => $payment->customer_email,
                "phone_number" => $payment->phone_number,
                "name" => $payment->customer_name,
            ],

            "customizations" => [
                "title" => 'UN SDG Summit 2023',
                "description" => "20th October"
            ]
        ];

        $payment = Flutterwave::initializePayment($data);


        if ($payment['status'] !== 'success') {
            // notify something went wrong
            return;
        }

        return redirect($payment['data']['link']);
    }

    public function callback()
    {

        $status = request()->status;

        //if payment is successful
        if ($status === 'successful') {

            $transactionID = Flutterwave::getTransactionIDFromCallback();
            $data = Flutterwave::verifyTransaction($transactionID);

            $payment = Payment::query()
                ->where('transaction_reference', $data['data']['tx_ref'])
                ->where('amount', $data['data']['amount'])
                ->where('currency', $data['data']['currency'])
                ->where('status', '!=', Payment::STATUS_SUCCESSFUL)
                ->first();

            $payment?->update([
                'status' => Payment::STATUS_SUCCESSFUL,
                'transaction_fee' => $data['data']['app_fee']
            ]);

            return view('site.pages.tickets.callback', [
                'status' => 'successful'
            ]);
        }

        if ($status === 'cancelled') {
            $payment = Payment::query()
                ->where('transaction_reference', request()->get('tx_ref'))
                ->where('status', '!=', request()->get('status'))
                ->first();

            if (!$payment) {
                // return something when wrong page
                return view('site.pages.tickets.callback');
            }

            $payment->update([
                'status' => Payment::STATUS_CANCELLED
            ]);

            // Transaction cancelled page
            return view('site.pages.tickets.callback', [
                'status' => $payment->status
            ]);
        }
    }

    private function getTicketPrice(string $type)
    {
        if (config('ticket.personal.name') === $type) {
            return config('ticket.personal.price');
        }

        if(config('ticket.family.name') === $type) {
            return config('ticket.family.price');
        }

        if (config('ticket.group.name') === $type) {
            return config('ticket.group.price');
        }

        throw new Exception('No ticket type available');
    }
}
