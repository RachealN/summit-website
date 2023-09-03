<?php

use App\Models\Payment;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('ticket_type');
            $table->string('transaction_reference');
            $table->string('customer_name');
            $table->string('customer_email');
            $table->string('phone_number');
            $table->decimal('amount', 19, 2);
            $table->string('currency')->default('UGX');
            $table->decimal('transaction_fee', 19, 2)
                ->default(0);
            $table->string('status')
                ->default(Payment::STATUS_PENDING);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
