@extends('instancias.instancia')
@section('content')
<br>
<div class="container">
    <div class="accordion" style=background-color:#B3F2FE; id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Misión
        </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
        
            <strong>Ofrecer a los habitantes de la región un sistema líder en el transporte urbanos de pasajeros y servicios complementarios, orientando nuestros esfuerzos hacia servicios integrales, consecución de un parque automotor moderno, adecuación de instalaciones, como el logro de una aperción logística eficiente, una organización fundamentada en practicas gerenciales efectivas; con personal calificado, motivado por el sentido de pertenencia hacia la empresa desarrollando al máximo su productividad y completamente orientado a lograr que “COOTRANUR LTDA.” Cooperativa de Transportadores Urbanos de Pasto Ltda. Sea la compañía preferida por nuestros Usuarios.</strong>  
        </div>
        <div class="text-center">
            <img src="{{url('img/c1.jpg')}}" class="img-fluid" alt="cargando imagen...." width="600px" high="400px">
       </div>
       <br>
        
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Visión
        </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            Somos una cooperativa orientada a mejorar la calidad de vida de los habitantes de San Juan de Pasto brindando un servicio con eficiencia, seguridad, responsabilidad, bajo la modalidad de servicio publico de transporte terrestre automotor colectivo de pasajeros en la Capital de Nariño y en su área de influencia, respaldada con amplia tradición reflejada en un buen nombre en el mercado y en el sector empresarial, contamos con moderno parque automotor, una infraestructura técnica y administrativa de calidad y un talento humano comprometido y dispuesto a brindar sus mejores esfuerzos para la prestación de nuestros servicios en un marco de excelencia y de contribución a la sociedad nariñense.
        </div>
        <div class="text-center">
        <img src="{{url('img/c2.jpg')}}" class="img-fluid" width="600px" high="400px" alt="cargando imagen....">
        </div>
        <br>
        </div>
        
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Ubicación
        </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body">

        <div class="card">
            <h5 class="card-header text-center">ENCUENTRANOS EN LA CIUDAD DE PASTO</h5>
            <div class="card-body">
                <h6 class="card-title text-center">COOTRANUR LTDA</h6>
                <div class="text-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.2267751098422!2d-77.28173067083762!3d1.2245624407428954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e2ed5ea162aa7db%3A0x6e493d4a00939e1e!2sCootranur%20Ltda%20-%20Oficina%20Av.%20Los%20Estudiantes!5e0!3m2!1ses-419!2sco!4v1617157158936!5m2!1ses-419!2sco" width="600px" height="400px" style="border:0;" allowfullscreen="" loading="lazy" class="container-sm" ></iframe>
               </div>
            </div>
            </div>
         </div>
        </div>
    </div>
    </div>
    <style>
    </style>
    </div>
@stop