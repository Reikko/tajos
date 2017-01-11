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

    public static function Destajos($id)                            //Devuelve las filas que tengan el id
    {
        return DB::table('tabla_destajos')->where('id_avance', $id)
            ->join('destajos', 'tabla_destajos.id_destajo', '=', 'destajos.id')
            ->select('tabla_destajos.*', 'destajos.concepto', 'destajos.descripcion','destajos.destajo')
            ->get();
    }

    public static function Avances()                            //Devuelve los datos completos de los avances
    {
        return DB::table('avances')
            ->join('lotes', 'avances.id_lote', '=', 'lotes.id')
            ->join('empleados', 'avances.id_empleado', '=', 'empleados.id')
            ->select('avances.*', 'lotes.nombre as Lnombre', 'empleados.nombre','empleados.ap_pat','empleados.ap_mat')
            ->get();
    }

    public static function Avance($id)                            //Devuelve los datos completos de los avances
    {
        return DB::table('avances')
            ->where('avances.id',$id)
            ->join('lotes', 'avances.id_lote', '=', 'lotes.id')
            ->join('empleados', 'avances.id_empleado', '=', 'empleados.id')
            ->select('avances.*', 'lotes.nombre as Lnombre', 'empleados.nombre','empleados.ap_pat','empleados.ap_mat')
            ->get();

    }




}
