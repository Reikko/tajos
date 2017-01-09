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

    public static function LotesArr($id)                            //Devielve el arreglo de lotes para buscarlos
    {
        return DB::table('avances')->where('id_lote', $id)
            ->lists('id');
    }

}
