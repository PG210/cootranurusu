@extends ('layouts.app')
@section('content')
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!--nuevo-->
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Archivo</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Gestion Usuarios</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
                    </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <!--cargar archivo--> 
                                    
                     <!--end cargar archivo-->
                              <!--formulario-->
                        <form class="row g-3" action="{{route('registrar')}}" method="POST"  enctype="multipart/form-data">
                        @csrf
                            <div class="col-md-4">
                                <label  for="uploadedfile" class="form-label">Cargar Archivo</label>
                                <input name="uploadedfile" id="uploadedfile" type="file"  class="form-control" required />
                            </div>
                            <div class="col-md-4">
                                    <label for="nombre" class="form-label">Nombre Documento</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Guardar</button>
                            </div>
                            </form>
                        <!--end-form-->
                    
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                       <!--table-->
                       <br>
                          <div class="table-responsive-sm">
                          <table class="table">
                                <thead class="bg-blue-300">
                                    <tr>
                                    <th scope="col">Número</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Archivo</th>
                                    <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($info as $p)
                                    <tr class="bg-purple-200">
                                    <th scope="row">{{$p->id}}</th>
                                    <td>{{$p->nombre}}</td>
                                    <td>{{$p->archivo}}</td>
                                    <td>
                                    <!--boton-->
                                    <a href="{{route('eliminar',$p->id)}}" type="button" class="btn btn-outline-danger fw-bold">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash d-inline" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                        </svg>
                                        
                                        Eliminar
                                    </a>
                                    <!--end boton-->
                                    </td>
                                    </tr>
                                @endforeach
                                   </tbody>
                                </table>
                                </div>
                          <!--end table-->
                    
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
                    </div>

                <!--end nuevo-->

                </div>
           </div>
        </div>
    </div>
@stop