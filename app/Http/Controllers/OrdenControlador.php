<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Orden;
use App\Models\Factura;
use App\Events\CrearOrdenEvento;
use Illuminate\Support\Facades\Artisan;

class OrdenControlador extends Controller
{
    public function OrdenCrear(){
        $orden = new Orden;
        $orden->Producto_nombre ="Pijama";
        $orden->Usuario_id=1;
        $orden->save();       
        CrearOrdenEvento::dispatch($orden); // aqui se envia el evento
        //para los observadores no es necesario enviar el evento por que el observador
        //  siempre esta observando
        return "exito";
    }

    public function OrdenCrearPorComando(){        
		Artisan::call("make:CrearOrden", ["Producto_nombre"=>"locion", "Usuario_id"=>10]);
        return "exito comando";
    }

    public function FacturaMostrar(){
        $facturas = Factura::all();
        return view("Facturas.Mostrar",compact("facturas"));
    }
}
