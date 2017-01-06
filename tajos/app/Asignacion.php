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

    public static function Lotes($id)
    {
        return DB::table('asignacions')->where('id_prototipo', $id)->get();
    }
}
