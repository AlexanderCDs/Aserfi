<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permisos extends Model
{
    protected $fillable = [
        'id', 'permiso', 'clave', 'modulo_id', 'usuarioalta', 'usuariomodificacion', 'activo'
    ];
}
