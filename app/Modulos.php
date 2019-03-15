<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modulos extends Model
{
    //
    protected $fillable = [
        'id', 'nombre', 'ruta', 'icono', 'titulo', 'menu', 'modulopadre_id', 'posicion', 'usuarioalta', 'usuariomodificacion', 'activo'
    ];
}
