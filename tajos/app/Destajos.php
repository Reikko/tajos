<?php

namespace Destajos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Destajos extends Model
{
    protected $fillable = [
        'prototipo',
        'partida',
        'concepto',
        'descripcion',
        'unidad',
        'destajo',
    ];

    public static function Destajos($id)
    {
        return DB::table('destajos')->where('prototipo', $id)->get();
    }

    public static function DestajosList($id,$arr)
    {
        return DB::table('destajos')->where('prototipo', $id)
            ->whereNotIn('id', $arr)
            ->lists('descripcion','id');
    }
}
