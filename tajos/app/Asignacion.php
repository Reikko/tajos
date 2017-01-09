<?php

namespace Destajos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Asignacion extends Model
{
    protected $fillable=[
        'id_prototipo',
        'id_lote'
    ];

    public static function Prototipo($id)
    {
        return DB::table('asignacions')->where('id_lote', $id)->first();
    }

    public static function Lotes($id)                                       //Mustra todos los lotes relacionados con el id del prototipo
    {
        //return DB::table('asignacions')->where('id_prototipo', $id)->get();

        return DB::table('asignacions')
            ->where('id_prototipo',$id)
            ->join('lotes','asignacions.id_lote','=','lotes.id')
            ->select('asignacions.*','lotes.nombre')
            ->get();
    }

    public static function LotesList($id)                                       //Mustra todos los lotes relacionados con el id del prototipo
    {
        //return DB::table('asignacions')->where('id_prototipo', $id)->get();

        return DB::table('asignacions')
            ->where('id_prototipo',$id)
            ->join('lotes','asignacions.id_lote','=','lotes.id')
            ->select('lotes.*','asignacions.id_prototipo')
            ->lists('nombre','id');
    }

    public static function PrototiposList()
    {
        return DB::table('asignacions')
            ->join('prototipos','asignacions.id_prototipo','=','prototipos.id')
            ->select('prototipos.*','asignacions.id_prototipo')
            ->groupBy('id_prototipo')
            ->lists('nombre','id');
    }
}
