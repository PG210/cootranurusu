<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModeloArchivo;

class UsuAdmin extends Controller
{
  
    public function principal(){
        $msj='';
        $ar = ModeloArchivo::all();
            return view('dashboard', compact('ar','msj'));
        
    } 
}
