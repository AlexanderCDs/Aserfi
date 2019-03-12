<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BeneficiosController extends Controller
{
    public function index()
    {
        return view('Dashboard.Beneficios.Index');
    }
}
