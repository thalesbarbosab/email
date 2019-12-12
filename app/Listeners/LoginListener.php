<?php

namespace App\Listeners;

use App\Mail\NovoAcesso;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;



use function Psy\info;

class LoginListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(Login $event)
    {
        //Log::debug("Login no sistema de $event->user");


        //Tratamento de envio de email

        // dispara o email no ato de login junto ao usuario
        //Mail::to($event->user)->send(new NovoAcesso($event->user));

        //Redis - coloca o evento em fila e dispara quando possivel
        Mail::to($event->user)->queue(new NovoAcesso($event->user));

        //Redis - coloca o evento em fila para ser enviado depois de um tempo determinado por parametro (1 minutos)
        //$quando = now()->addMinutes(1);
        //Mail::to($event->user)->later($quando, new NovoAcesso($event->user));


        //Log::debug("Email enviado para $event->user ");
    }
}
