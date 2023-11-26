<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Factura extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function orden():BelongsTo
    {
        return $this->BelongsTo(Orden::Class,"Orden_id","id");
    }
}
