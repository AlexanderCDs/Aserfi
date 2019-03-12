<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuienesSomosController extends Controller
{
    public function index()
    {
        return view('Dashboard.QuienesSomos.Index');
    }
}
