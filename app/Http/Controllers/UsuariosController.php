<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Dashboard.Usuarios.Index');
    }

    public function gridUsuarios(Request $request)
    {
        $filtro = $this->filtro($request);
        if($filtro != null){
            $usuario = User::selectRaw('users.id, CONCAT( users.name, " ", users.primerApellido, " ", IFNULL(users.segundoApellido, ""))  as nombre, perfiles.perfil, users.activo, users.email')->whereRaw($filtro)->leftJoin('perfiles', 'users.perfil_id', '=', 'perfiles.id')->get();
            
        }else{
            $usuario = User::selectRaw('users.id, CONCAT( users.name, " ", users.primerApellido, " ", IFNULL(users.segundoApellido, "")) as nombre, perfiles.perfil, users.activo, users.email')->whereRaw("users.activo = 1 and users.id != 1 ")->leftJoin('perfiles', 'users.perfil_id', '=', 'perfiles.id')->get();
        }
        return Response()->json($usuario);
    }

    public function filtro($request){
        $filtro = null;
        if(strtoupper(trim($request->cUsuario)) != ""){
            $value = strtoupper(trim($request->cUsuario));
            $value = "'%" . $value . "%'";
            $nameC = 'CONCAT( users.name, " ", users.primerApellido, " ", IFNULL(users.segundoApellido, ""))';
            $filtro = "users.activo = 1 and users.id != 1 and UPPER(". $nameC .") like " . $value;
        }
        return $filtro;
    }

    public function saveUsuario(Request $request)
    {
        //$persona = Personas::find($request->iIDPersona);
        $usuario = null;
        $isNew = $request->iIDUsuario == 0;
        if($isNew){
            $usuario = User::create([
                'perfil_id' => $request->iIDPerfil, 
                'name' => $request->cNombre, 
                'primerApellido' => $request->cPrimerApellido, 
                'segundoApellido' => $request->cSegundoApellido,
                'email' => $request->cCorreoElectronico, 
                'password' => bcrypt($request->cPassword),
                'usuarioalta' => "Auth::user()->name" , 
                'usuariomodificacion' => "Auth::user()->name", 
                'activo' => 1]);
        }else{
            $usuario = User::find($request->iIDUsuario);
            $usuario->perfil_id = $request->iIDPerfil;
            $usuario->name = $request->cNombre;
            $usuario->primerApellido = $request->cPrimerApellido;
            $usuario->segundoApellido = $request->cSegundoApellido;
            $usuario->email = $request->cCorreoElectronico; 
            $usuario->password = bcrypt($request->cPassword);
            $usuario->usuariomodificacion = "Auth::user()->name";
            $usuario->save();
        }
        return Response()->json($usuario);
    }

    public function getUsuario(Request $request)
    {
        $usuario = User::find($request->id);
        $usuario->password = "";
        return Response()->json($usuario);
    }
    
    public function toggleRegistro(Request $request)
    {
        $item = User::find($request->id);
        $item->activo = $item->activo == 1 ? 0 : 1;
        $item->save();
        return Response()->json(["success" => ($item != null ? true : false)]);
    }
}
