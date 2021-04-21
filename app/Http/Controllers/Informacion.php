<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Informacion extends Controller
{
    public function mision(){
        return view('informacion.vistamision');
    }
}
