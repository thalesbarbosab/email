<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Listeners\MeuEventoListener;
use Illuminate\Auth\Events\MeuEvento;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */

    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        'App\Events\Illuminate\Auth\Events\MeuEvento' => [
            'App\Listeners\MeuEventoListener',
        ],
        'Illuminate\Auth\Events\Login' => [
            'App\Listeners\LoginListener',
        ],
        'Illuminate\Auth\Events\Logout' => [
            'App\Listeners\LogoutListener',
        ],
        /*
        MeuEvento::class => [
            MeuEventoListener::class
        ]
        */
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
