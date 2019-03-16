<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use App\Perfiles;
use App\Permisos;
use App\Modulos;
use App\PerfilPermisos;

class MenuMiddleware
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
            $menu = $this->getTreeGijgo(Auth::user()->perfil_id);
            $request->attributes->add(['menu' => $menu]);
            return $next($request);
        }else{
            return redirect('/Aserfi-cp');
        }
    }


    public function getTreeGijgo($iIDPerfil)
    {
        $modulos = Modulos::selectRaw('id, nombre as text, menu, ruta, icono')->whereRaw("activo is true and menu = 0" )->orderBy('posicion', 'asc')->get();
        foreach ($modulos as $modulo) {
            if($this->havePermiso($modulo->id, $iIDPerfil)){
                $modulo->checkedFieldName = false;
                $modulo->types = "padre";
                if($modulo->menu == 1){
                    $modulo->children = $this->getHijoGijgo($modulo->id, $iIDPerfil);
                }
                $modulo->id = $this->cont++;
            }
        }
        //$modulos = "Harley";
        //return response()->json(['message' => $modulos], 200);
        return $modulos;
    }

    public function getHijoGijgo($iIDModulo, $iIDPerfil)
    {
        $modulos = Modulos::selectRaw('id, nombre as text, menu, ruta, icono')->whereRaw("modulopadre_id = ? and activo is true", $iIDModulo)->orderBy('posicion', 'asc')->get();
        foreach ($modulos as $modulo) {
            if($this->havePermiso($modulo->id, $iIDPerfil)){
                $modulo->checkedFieldName = false;
                $modulo->types = "hijo";
                if($modulo->menu == 1){
                    $modulo->children = $this->getHijoGijgo($modulo->id, $iIDPerfil);
                }
                $modulo->id = $this->cont++;
            }
        }
        return $modulos;
    }

    public function havePermiso($iIDModulo, $iIDPerfil)
    {
        $modulo = Modulos::find($iIDModulo);   
        $ACCESO = "%ACCESO_" . strtoupper($modulo->titulo)."%";
        //$ = Permisos::where("modulo_id", "= ", $modulo->id)->where("clave", "like", $ACCESO)->where("activo", "is", true)->first();
        $permiso = PerfilPermisos::where("perfilpermisos.perfil_id", "=", $iIDPerfil)
            ->where("permisos.modulo_id", "=", $iIDModulo)
            ->where("permisos.clave", "like", $ACCESO)
            ->where("perfilpermisos.activo", "=", true)
            ->leftJoin("permisos", "perfilpermisos.permiso_id", "=", "permisos.id")
            ->leftJoin("modulos", "permisos.modulo_id", "=", "modulos.id")
            ->first();
        if($permiso){
            return true;
        }else{
            return true;
        }
    }
}
