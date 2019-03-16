<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use App\Perfiles;
use App\Permisos;
use App\Modulos;
use App\PerfilPermisos;

class PermisoMiddleware
{
    public $cont = 0;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::guest()) {
            $permiso = $this->havePermiso($request->path(), Auth::user()->perfil_id);
            if($permiso){
                $request->attributes->add(['permiso' => $permiso]);
                return $next($request);
            }else{
               return redirect('/Carrusel'); 
            }
        }else{
            return redirect('/Aserfi-cp');
        }
    }

    public function havePermiso($cModulo, $iIDPerfil)
    {
        $modulo = Modulos::where("activo", "=", 1)->where("ruta", "like", $cModulo)->first();
        $ACCESO = "%ACCESO_" . strtoupper($modulo->ruta)."%";
        //$ = Permisos::where("modulo_id", "= ", $modulo->id)->where("clave", "like", $ACCESO)->where("activo", "is", true)->first();
        $permiso = PerfilPermisos::where("perfilpermisos.perfil_id", "=", $iIDPerfil)
            ->where("permisos.modulo_id", "=", $modulo->id)
            ->where("permisos.clave", "like", $ACCESO)
            ->where("perfilpermisos.activo", "=", true)
            ->leftJoin("permisos", "perfilpermisos.permiso_id", "=", "permisos.id")
            ->leftJoin("modulos", "permisos.modulo_id", "=", "modulos.id")
            ->first();
        if($permiso){
            return true;
        }else{
            return false;
        }
    }
}
