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
    public function vistaprin(){
           $info = ModeloArchivo::all();
            return view('admin.vistaprincipal', compact('info'));
        
    } 
    public function borrar($id){
            $p=ModeloArchivo::findOrfail($id);
            $p->delete();
            /*$ms='<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>&nbsp;Archivo PDF Eliminado con Exito!&nbsp;</strong>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-laughing d-inline" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M12.331 9.5a1 1 0 0 1 0 1A4.998 4.998 0 0 1 8 13a4.998 4.998 0 0 1-4.33-2.5A1 1 0 0 1 4.535 9h6.93a1 1 0 0 1 .866.5zM7 6.5c0 .828-.448 0-1 0s-1 .828-1 0S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 0-1 0s-1 .828-1 0S9.448 5 10 5s1 .672 1 1.5z"/>
            </svg>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            echo $ms;
            //$delay='/admin';
            //header('Refresh:6; locate=.php');
            //echo 'window.location.href="admin"';
            */

            return redirect()->route("prin"); 
           
            
                       
       
    }
}
