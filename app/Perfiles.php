<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfiles extends Model
{
    protected $fillable = [
        'id', 'perfil', 'clave', 'modulo_id', 'usuarioalta', 'usuariomodificacion', 'activo'
    ];
}
