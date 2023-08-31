<?php

namespace App\Http\Controllers;

class TicketController extends Controller
{
    public function personal()
    {
        return view('site.pages.tickets.personal');
    }

    public function family()
    {
        return view('site.pages.tickets.family');
    }

    public function group()
    {
        return view('site.pages.tickets.group');
    }
}
