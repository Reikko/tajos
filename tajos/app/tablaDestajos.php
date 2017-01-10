<?php

namespace Destajos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class tablaDestajos extends Model
{
    protected $fillable = [
        'id_avance',
        'id_destajo',
        'porcentaje',
    ];

    public static function Filas($id)
    {
        return DB::table('tabla_destajos')->where('id_avance', $id)
            ->join('destajos', 'tabla_destajos.id_destajo', '=', 'destajos.id')
            ->select('tabla_destajos.*', 'destajos.concepto', 'destajos.descripcion')
            ->get();
    }

    public static function FilasArr($id)
    {
        return DB::table('tabla_destajos')->where('id_avance', $id)
            ->join('destajos', 'tabla_destajos.id_destajo', '=', 'destajos.id')
            ->select('tabla_destajos.*', 'destajos.concepto', 'destajos.descripcion')
            ->lists('id_destajo');
    }

    public static function FilasDeLotes($arr)
    {
        return DB::table('tabla_destajos')->whereIn('id_avance', $arr)
            ->join('destajos', 'tabla_destajos.id_destajo', '=', 'destajos.id')
            ->groupBy('id_destajo')
            ->select('tabla_destajos.*', 'destajos.concepto', 'destajos.descripcion','destajos.destajo',DB::raw('SUM(porcentaje) as avance'))
            ->get();
    }

    public static function MayorUnoArr($arr)
    {
         $res = DB::table('tabla_destajos')
            ->whereIn('id_avance', $arr)
            ->join('destajos', 'tabla_destajos.id_destajo', '=', 'destajos.id')
            ->select('destajos.id')
            ->groupBy('id_destajo')
            ->havingRaw('SUM(porcentaje) >= 1');
            return $res->lists('id');
    }
}
