<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdenControlador;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get("/Orden/Crear",[OrdenControlador::class,"OrdenCrear"])->name("Orden.Crear");
route::get("/Orden/CrearComando",[OrdenControlador::class,"OrdenCrearPorComando"])->name("Orden.CrearComando");
route::get("/Factura/Mostrar",[OrdenControlador::class,"FacturaMostrar"])->name("Factura.Mostrar");
