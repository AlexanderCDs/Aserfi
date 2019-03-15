<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerfilPermisos extends Model
{
	protected $table = 'perfilpermisos';

    protected $fillable = [
        'id', 'perfil_id', 'permiso_id', 'usuarioalta', 'usuariomodificacion', 'activo'
    ];
}
