<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuraciones extends Model
{
    protected $fillable = [
        'id', 'clave', 'valor', 'usuarioalta', 'usuariomodificacion', 'activo'
    ];

    public function getListClave($clave)
    {
        return Configuraciones::all();
    }
}
