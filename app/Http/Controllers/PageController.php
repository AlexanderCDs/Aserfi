<?php

namespace App\Http\Controllers;

use App\Configuraciones;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return view('Page.Index');
    }
}
