<?php

namespace Destajos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Lote extends Model
{
    protected $fillable=[
        'nombre'
    ];

    public static function LoteList()
    {
        return DB::table('lotes')
            ->lists('nombre','id');
    }
}
