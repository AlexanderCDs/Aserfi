<?php

namespace App\Http\Controllers;

use App\Configuraciones;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class PageController extends Controller
{
    public function index()
    {
        return view('Page.Index');
    }
    public function sendMail(Request $request){
        $name = 'Prueba';

        Mail::to('arturochi2@hotmail.com')->send(new SendMailable($name));
        
        return 'Email was sent';
    }
}
