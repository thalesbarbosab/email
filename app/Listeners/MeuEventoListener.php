<?php

namespace App\Listeners;

use App\Events\Illuminate\Auth\Events\MeuEvento;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

use function Psy\info;

class MeuEventoListener
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
     * @param  MeuEvento  $event
     * @return void
     */
    public function handle(MeuEvento $event)
    {
        //info('Entrou no evento');
        //info($event->text);

        //Log::debug($event->text);
        //Log::debug($event->user->email);
    }
}
