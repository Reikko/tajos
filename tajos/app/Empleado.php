<?php

namespace Destajos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Empleado extends Model
{
    protected $fillable=[
        'nombre',
        'ap_pat',
        'ap_mat'
    ];

    public static function EmpleadoList()
    {
        return DB::table('empleados')
            ->lists('nombre','id');
    }
}
