<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Orden;

class CrearOrdenComando extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:CrearOrden {Producto_nombre} {Usuario_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crear Una Orden';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $Producto_nombre = $this->argument("Producto_nombre");
        $Usuario_id = $this->argument("Usuario_id");
        $orden = new Orden;
        $orden->Producto_nombre =$Producto_nombre;
        $orden->Usuario_id=$Usuario_id;
        $orden->save();       
        return Command::SUCCESS;
    }
}
