<?php

namespace App\Listeners;

use App\Mail\NovoLogout;
use Illuminate\Auth\Events\Logout;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class LogoutListener
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
    public function handle(Logout $event)
    {
        //Mail::to($event->user)->send(new NovoLogout($event->user));
        //$quando = now()->addMinutes(1);
        //Mail::to($event->user)->later($quando, new NovoLogout($event->user));
        //Mail::to($event->user)->queue(new NovoLogout($event->user));
    }
}
