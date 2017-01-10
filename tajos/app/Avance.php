<?php

namespace Destajos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Avance extends Model
{
    protected $fillable=[
            'id_lote',
            'id_empleado',
            'f_ini',
            'f_fin',
    ];

    public static function LotesArr($id)                            //Devuelve el arreglo de lotes para buscarlos
    {
        return DB::table('avances')->where('id_lote', $id)
            ->lists('id');
    }

    public static function Avances($id)                            //Devuelve las filas que tengan el id
    {
        return DB::table('tabla_destajos')->where('id_avance', $id)
            ->join('destajos', 'tabla_destajos.id_destajo', '=', 'destajos.id')
            ->select('tabla_destajos.*', 'destajos.concepto', 'destajos.descripcion','destajos.destajo')
            ->get();
    }

}
