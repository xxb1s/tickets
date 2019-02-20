<?php

namespace App\Http\Controllers\Ticket;

use App\Http\Controllers\Controller;
use App\Models\Solicitud;
use App\User;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $tickets = Solicitud::with('system', 'userCreate', 'userResponse')->get();

        foreach ($tickets as $ticket) {
            $ticket->id_encrypt = encrypt($ticket->id_solicitud);
        }

        return view('tickets.show')->with([
            'tickets' => $tickets,
            'users' => User::all()
        ]);
    }
}
