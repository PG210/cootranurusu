<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuAdmin extends Controller
{
    public function principal(){
        return view('admin.vistaprincipal');
    }
}
