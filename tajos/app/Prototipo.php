<?php

namespace Destajos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Prototipo extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    public static function PrototipoList()
    {
        return DB::table('prototipos')
            ->lists('nombre','id');
    }
}
