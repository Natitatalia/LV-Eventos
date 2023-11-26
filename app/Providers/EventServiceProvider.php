<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

use App\Events\CrearOrdenEvento;
use App\Listeners\CrearFacturaEscuchador;

use App\Models\Orden;
use App\Observers\OrdenObservador;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        CrearOrdenEvento::class => [
            CrearFacturaEscuchador::class,
        ]
    ];

    protected $observers = [
        /*
        Orden::class => [
            OrdenObservador::class
        ]*/
    ];
    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        Orden::observe(OrdenObservador::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
