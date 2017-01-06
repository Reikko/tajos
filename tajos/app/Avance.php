<?php

namespace Destajos;

use Illuminate\Database\Eloquent\Model;

class Avance extends Model
{
    protected $fillable=[
            'id_asigna',
            'id_empleado',
            'f_ini',
            'f_fin',
    ];

}
