<?php

namespace Ticket\Http\Controller;

use App\Http\Controllers\Controller;

class TicketStoreController extends Controller
{
    public function index()
    {
        return view('Ticket::index');
    }
}
