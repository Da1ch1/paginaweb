@extends('layouts.servicio')
@section('title','Diseño y Marketing')


@section('servicio')
<div class="">
  <div class="absolute-flex">
          <div class="mt-4">
             
           <!-- Channel Banner -->
                  <div class="channel-bannerdiseño">
                        <div class="textdiseño">
                          <h2>Diseño</h2>
                        </div>
                  </div>
              			
          </div>
    </div>
 </div> 
@endsection

@section('info')

<div class="mt-5">
  <div class="absolute">
      <div class="mt-10">
          <div class="container ">
            <div class="row no-gutters bg-light position-relative">
              <div class="col-md-6 mb-md-0 p-md-4">
                <video autoplay loop playsinline style="border-radius: 10px" src="{{asset('material/videos/Marketing .mp4')}}" class="w-100" alt="..."></video>
              </div>
              <div class="col-md-5 position-static p-4 pl-md-0">
                <h5 class="mt-0">Diseño</h5>
                <p>Nuestro talento creativo en conjunto con tus estrategias de marketing, seremos tus aliados para la creación desde tu logotipo hasta tu imagen corporativa, y una vez que tu negocio este en marcha podemos diseñar imágenes para publicar en las diferentes redes sociales, videos promocionales de tu marca, un catálogo en línea para ventas en WhatsApp y el rediseño o creación de tu propio sitio web.</p>
                <a href="#" class=""><p>Contactanos</p></a>
              </div>
            </div>
              </div>			
          </div>
    </div>
</div>

@endsection

@section('textoinformativo')
        <div class="">
            <div class="absolute">
                    <div class="mt-10">
                            <div class="b container">
                              <ul class="list-group list-group-flush">
                                <h5 class="t1 text-center">Diseño:</h5>
                                <li class="list-group-item">• Diseño Web.</li>
                                <li class="list-group-item">• Creación de logotipos e imagen corporativa.</li>
                                <li class="list-group-item">• Imágenes y videos promocionales.</li>
                                <li class="list-group-item">• Videos homenaje.</li>
                                <li class="list-group-item">• Catálogos digitales de tus productos y/o servicios.</li>
                                <li class="list-group-item">• Diseño e impresión de tarjeta y volantes.</li>
                              </ul>
                            </div>			
                    </div>
            </div>
        </div>
@endsection
