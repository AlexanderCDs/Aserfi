<?php

namespace App\Http\Controllers;

use App\Configuraciones;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ConfiguracionController extends Controller
{
    public function getInformacion(Request $request){
    	$value = $request->valor;//"CONTACTO";
    	$informacion = Configuraciones::whereRaw("clave like '".$value."'")->get();
    	return Response()->json($informacion);
    }
}
