<?php

use Illuminate\Database\Seeder;
use Destajos\Prototipo;
use Destajos\Lote;
use Destajos\Empleado;
use Destajos\Asignacion;

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
        $empleado->nombre = 'Cristobal';
        $empleado->ap_pat = 'Zavala';
        $empleado->ap_mat = 'Cano';
        $empleado->save();

        $asigna = new Asignacion;
        $asigna->id_prototipo = 1;
        $asigna->id_lote = 6;
        $asigna->save();

        $asigna = new Asignacion;
        $asigna->id_prototipo = 1;
        $asigna->id_lote = 9;
        $asigna->save();

        $asigna = new Asignacion;
        $asigna->id_prototipo = 1;
        $asigna->id_lote = 12;
        $asigna->save();
        //--------------------------------------------------

        //-------Prototipo 2 -------------------------------
        $asigna = new Asignacion;
        $asigna->id_prototipo = 2;
        $asigna->id_lote = 7;
        $asigna->save();

        $asigna = new Asignacion;
        $asigna->id_prototipo = 2;
        $asigna->id_lote = 10;
        $asigna->save();

        $asigna = new Asignacion;
        $asigna->id_prototipo = 2;
        $asigna->id_lote = 13;
        $asigna->save();
        //---------------------------------------------------

        //-------Prototipo 4---------------------------------
        $asigna = new Asignacion;
        $asigna->id_prototipo = 4;
        $asigna->id_lote = 8;
        $asigna->save();

        $asigna = new Asignacion;
        $asigna->id_prototipo = 4;
        $asigna->id_lote = 11;
        $asigna->save();

        $asigna = new Asignacion;
        $asigna->id_prototipo = 4;
        $asigna->id_lote = 14;
        $asigna->save();


    }
}
