<?php

use Illuminate\Database\Seeder;
use Destajos\Prototipo;
use Destajos\Lote;
use Destajos\Empleado;
class DatosPrincipales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1;$i<6;$i++)
        {
            $prototipo = new Prototipo;
            $prototipo->nombre = 'Prototipo ' . $i;
            $prototipo->descripcion = '';
            $prototipo->save();
        }


        for ($i = 1;$i<15;$i++)
        {
            $lote = new Lote;
            $lote->nombre = 'Lote ' . $i;
            $lote->save();
        }

        $empleado = new Empleado;
        $empleado->nombre = 'Jesus';
        $empleado->ap_pat = '';
        $empleado->ap_mat = '';
        $empleado->save();
    }
}
