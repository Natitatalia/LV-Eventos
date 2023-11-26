<?php

namespace App\Observers;

use App\Models\Orden;
use App\Models\Factura;

class OrdenObservador
{
    /**
     * Handle the Orden "created" event.
     */
    public function created(Orden $orden): void
    {
        Factura::create([
            "Precio" => 30500,
            "Orden_id" => $orden->id
        ]);
    }

    /**
     * Handle the Orden "updated" event.
     */
    public function updated(Orden $orden): void
    {
        //
    }

    /**
     * Handle the Orden "deleted" event.
     */
    public function deleted(Orden $orden): void
    {
        //
    }

    /**
     * Handle the Orden "restored" event.
     */
    public function restored(Orden $orden): void
    {
        //
    }

    /**
     * Handle the Orden "force deleted" event.
     */
    public function forceDeleted(Orden $orden): void
    {
        //
    }
}
