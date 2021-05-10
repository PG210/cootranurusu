<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModeloArchivo;
Use Session;
Use Redirect;

class Archivo extends Controller
{
    

    public function carga(Request $request){
               
                $category = new ModeloArchivo();
                $category->nombre = $request->input('nombre');
                    if($request->hasFile('uploadedfile')){
                                
                        $file = $request->file('uploadedfile');//guarda la variable id en un file
                        $val = "cootranur_titulo".time().".".$file->guessExtension();//renombra el archivo subido
                        $ruta = public_path("pdf/".$val);//ruta para guardar el archivo pdf/ es la carpeta
                        
                        if($file->guessExtension()=="pdf"){

                        copy($file, $ruta);//ccopia el archivo de una ruta cualquiera a donde este
                        $category->archivo = $val;//ingresa el nombre de la ruta a la base de datos
                        $category->save();//guarda los datos
                          //mensaje de alerta con imagen svg 
                           
                           //header('Refresh: 10; URL=Archivo.php');
                           Session::flash('message','Archivo PDF cargado con exito!');// envia mensaje
                           return redirect()->route('prin');
                        }
                        else{
                           /* echo'<script type="text/javascript"> sirve para poner un alert de javascript
                            alert("El tipo de archivo a subir debe ser PDF");
                            </script>';*/
                          
                           $result='<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error al subir archivo!&nbsp;</strong>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-dizzy d-inline" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M9.146 5.146a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 1 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 0-.708zm-5 0a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 1 1 .708.708l-.647.646.647.646a.5.5 0 1 1-.708.708L5.5 7.207l-.646.647a.5.5 0 1 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 0-.708zM10 11a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
                            </svg>
                            &nbsp;El tipo de archivo a subir debe ser en formato PDF
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
                           // $result='<div class="alert alert-success">Atención</div>';
                           
                           //echo $result;
                            return redirect()->route('prin');
                           
                        }
                }

         }

        public function descarga($file_name){//sirve para descargar un archivo 
                $file_path = public_path('pdf/'.$file_name);
                return response()->download($file_path);
        }

    
}
