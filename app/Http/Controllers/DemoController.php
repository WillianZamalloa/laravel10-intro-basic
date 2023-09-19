<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function saludar(){
        return 'Saludos desde <h1>DemoController.php</h1>';
    }

    public function saludos($nombre){
        return 'DemoController te saluda,'.$nombre;
    }

    public function vista($nombre){
        // return view('vista')->with('nombre', $nombre);
        return view('vista', ['nombre' => $nombre]);
    }
}
