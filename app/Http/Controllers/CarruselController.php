<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarruselController extends Controller
{
    public function index()
    {
        return view('Dashboard.Carrusel.Index');
    }

}