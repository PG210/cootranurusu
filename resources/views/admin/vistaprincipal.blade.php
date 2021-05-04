@extends ('layouts.app')
@section('content')
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                 <!--colocar informacion-->
                       <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Información</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Gestionar usuarios</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                        </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                         <!--cargar archivo--> 
                         <br>               
                            <form action="{{route('registrar')}}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                    <label for="inputZip" class="form-label">Archivo</label>
                                    <br>
                                    <input name="uploadedfile" id="uploadedfile" type="file" required />
                                </div>
                                <div class="mb-3">
                                    <label for="inputPassword4" class="form-label">Nombre Documento</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                             </div>
                             <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                           </form>
                        <!--end cargar archivo-->
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">hola mundo 2</div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">hola mundo 3</div>
                        </div>
                 <!--end informacion-->
                </div>
           </div>
        </div>
    </div>
@stop