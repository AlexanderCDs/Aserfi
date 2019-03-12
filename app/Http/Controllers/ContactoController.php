<?php

namespace App\Http\Controllers;

use App\Configuraciones;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ContactoController extends Controller
{
    public function index()
    {
        return view('Dashboard.Contacto.Index');
    }
}
