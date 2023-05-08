@extends('layouts.servicio')
@section('title','Programación')


@section('servicio')
<div class="">
  <div class="absolute-flex">
          <div class="mt-4">
             
           <!-- Channel Banner -->
                  <div class="channel-bannerprogramacion">
                        <div class="textprogramacion">
                          <h2>Programación</h2>
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
                <video autoplay loop playsinline style="border-radius: 10px" src="{{asset('material/videos/Programacion.mp4')}}" class="w-100" alt="..."></video>
              </div>
              <div class="col-md-5 position-static p-4 pl-md-0">
                <h5 class="mt-0">Programación</h5>
                <p>Recolectamos tus ideas y necesidades en un sistema que cumpla con lo requerimientos y resultado que necesita para llevar el control de un proceso, área o la administración completa de tu empresa. Hoy en día es necesario contar con un sistema donde puedas apoyarte en tus actividades empresariales para que puedas lograr tus objetivos.</p>
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
                                <h5 class="t1 text-center">Servicios de programación:</h5>
                                <li class="list-group-item">• Gestión de recursos.</li>
                                <li class="list-group-item">• Puntos de venta.</li>
                                <li class="list-group-item">• Notificaciones en tiempos reales.</li>
                                <li class="list-group-item">• Programación Web.</li>
                                <li class="list-group-item">• Tienda online.</li>
                                <li class="list-group-item">• Bot de ayuda.</li>
                              </ul>
                            </div>			
                    </div>
            </div>
        </div>
@endsection

