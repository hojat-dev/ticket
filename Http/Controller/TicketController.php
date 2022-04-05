<?php

namespace Ticket\Http\Controller;

use App\Http\Controllers\Controller;

class TicketController extends Controller
{
    public function index()
    {
        return view('Ticket::index');
    }
}
