<?php

namespace App\Http\Controllers;

use App\Configuraciones;
use App\Perfiles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\User;

class ConfiguracionController extends Controller
{
    public function getInformacion(Request $request){
    	$value = $request->valor;//"CONTACTO";
    	$informacion = Configuraciones::whereRaw("clave like '".$value."'")->get();
    	return Response()->json($informacion); 
    } 

    public function getInformacionASC(Request $request){
        $value = $request->valor;//"CONTACTO";
        $informacion = Configuraciones::whereRaw("clave like '".$value."'")->orderBy('id', 'asc')->get();
        return Response()->json($informacion);
    } 

    public function saveInformacion(Request $request){
    	switch ($request->seccion) {
    	case "TEXTO":
    		$data = json_decode($request->data);
    		foreach($data as $item)
    		{
    			$newObj = Configuraciones::find($item->id);
    			$newObj->valor = $item->value;
                $newObj->usuariomodificacion = Auth::user()->name;
    			$newObj->save();
    		}
        	return Response()->json(["success" => true]);
        	break;
		}

    }

    public function saveInformacionWithImg(Request $request){
        for($i = 0; $i < 12; $i++){
            if($i != 3 && $i != 7 && $i != 11){
                $data = json_decode($request[$i]);
                $newObj = Configuraciones::find($data->id);
                $newObj->valor = $data->value;
                $newObj->usuariomodificacion = Auth::user()->name;
                $newObj->save();
            }
        }
        return Response()->json(["success" => true]);
    }

    public function saveInformacionWithImg2(Request $request){
        for($i = 0; $i < 7; $i++){
            if($i != 3 && $i != 6){
                $data = json_decode($request[$i]);
                $newObj = Configuraciones::find($data->id);
                $newObj->valor = $data->value;
                $newObj->usuariomodificacion = Auth::user()->name;
                $newObj->save();
            }
        }
        return Response()->json(["success" => true]);
    }


    public function saveImg(Request $request){
        // ruta de las imagenes guardadas
        $ruta = public_path().'/img/slider/';

        // recogida del form
        $extension = $request->file('file')->getClientOriginalExtension();

        $filename = uniqid() . '_' . time() . '.' . $extension;
        $request->file('file')->move($ruta, $filename);

        $newObj = Configuraciones::find($request->id);
        $newObj->valor = $filename;
        $newObj->usuariomodificacion = Auth::user()->name;
        $newObj->save();

        return Response()->json(["success" => true]);
    }

    public function saveImg2(Request $request){
        // ruta de las imagenes guardadas
        $ruta = public_path().'/img/fundadores/';

        // recogida del form
        $extension = $request->file('file')->getClientOriginalExtension();

        $filename = uniqid() . '_' . time() . '.' . $extension;
        $request->file('file')->move($ruta, $filename);

        $newObj = Configuraciones::find($request->id);
        $newObj->valor = $filename;
        $newObj->usuariomodificacion = Auth::user()->name;
        $newObj->save();

        return Response()->json(["success" => true]);
    }

    public function saveImg3(Request $request){
        // ruta de las imagenes guardadas
        $ruta = public_path().'/img/beneficios/';

        // recogida del form
        $extension = $request->file('file')->getClientOriginalExtension();

        $filename = uniqid() . '_' . time() . '.' . $extension;
        $request->file('file')->move($ruta, $filename);

        $newObj = Configuraciones::find($request->id);
        $newObj->valor = $filename;
        $newObj->usuariomodificacion = Auth::user()->name;
        $newObj->save();

        return Response()->json(["success" => true]);
    }

    public function getSelectPerfiles(Request $request)
    {
        try {
            $perfiles = Perfiles::selectRaw('id as value, perfil as text')->whereRaw('activo is true and id != 1')->get();
            return Response()->json($perfiles);
        } catch (Exception $e) {
            return Response()->json($e->getMessage());
        }
        
    }

    
}
