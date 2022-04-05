<?php
//Route::get('/',function (){
//    return 'ticket';
//});

use Ticket\Http\Controller\TicketController;

Route::get('/',[TicketController::class,'index']);
