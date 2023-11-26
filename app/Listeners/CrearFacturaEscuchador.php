<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\CrearOrdenEvento;
use App\Models\Factura;

class CrearFacturaEscuchador
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(CrearOrdenEvento $event): void
    {
        Factura::create([
            "Precio" => 15500,
            "Orden_id" => $event->OrdenCreada->id
        ]);
    }
}
