@extends ('layouts.app')
@section('content')
   
   <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <br>
                    <div class="alert alert-dark" role="alert">
                        <h4 class="text-center">ACTUALIZACION Y PERMAMENCIA REGIMEN ESPECIAL</h4>
                    </div>

                        <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                INFORMACIÓN FINANCIERA
                            </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                            
                            <div class="row">
                         @foreach($ar as $p)
                            
                                <div class="col-sm-6 my-3">
                                <div class="card" style="background-color:rgb(147,197,253)">
                                    <div class="card-body" >
                                    <h5 class="card-title" >{{$p->nombre}}</h5>
                                    <p class="card-text" ></p>
                                        <a href="{{route('descargas', $p->archivo)}}" 
                                        class="btn btn-primary"  download="Archivo-Cootranur">
                                            Descargar Archivo
                                        </a>
                                    </div>
                                  </div>
                                </div>
                            @endforeach
                             </div> 
                               
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@stop

