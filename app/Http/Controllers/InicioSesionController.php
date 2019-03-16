<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class InicioSesionController extends Controller
{
    public function index()
    {
        return view('Dashboard.Index');
    }

    public function iniciarSesion(Request $request)
    {
        //
        if (Auth::attempt([
            'email' => $request->cCorreoElectronico, 
            'password' => $request->cPassword])){
            //return redirect()->action('DashboardController@index');
            return Response()->json(['success' => true]);
        }else{
            //return redirect()->action('InicioSesionController@index');
            //return "No";
            return Response()->json(['success' => bcrypt($request->cPassword)]);
        }
    }

    public function cerrarSesion(){
        Auth::logout();
        return redirect()->action('InicioSesionController@index');
    }
}
