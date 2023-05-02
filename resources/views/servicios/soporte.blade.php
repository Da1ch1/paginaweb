@extends('layouts.servicio')
@section('title','Soporte')


@section('servicio')


<div class="">
  <div class="absolute-flex">
          <div class="mt-4">
              <div >
           <!-- Channel Banner -->
                  <div class="channel-bannersoporte">
                        <div class="textsoporte">
                          <h2>Soporte</h2>
                        </div>
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
                <img src="{{asset('material/images/soporte2.png')}}" class="w-100" alt="...">
              </div>
              <div class="col-md-5 position-static p-4 pl-md-0">
                <h5 class="mt-0">Soporte</h5>
                <p>Contamos con un equipo capacitado para ayudarte a resolver errores durante los procesos en los sistemas, fallas comunes como: sistema operativo, con la RAM, equipo lento, en el disco duro, el equipo no encienda o errores al momento de encendido y apagado e infestación de virus. Podemos crear tu red de trabajo segura a través de cableado y configuración de impresoras para toda la red.</p>
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
                              <h5 class="t1 text-center">Soporte Técnico:</h5>
                              <ul class="list-group list-group-flush ">
                                <li class="list-group-item">• Mantenimientos preventivos y correctivos.</li>
                                <li class="list-group-item">• Soporte presencial y remoto en sistemas.</li>
                                <li class="list-group-item">• Pólizas de servicios para actualizar sistemas.</li>
                              </ul>
                            </div>			
                    </div>
            </div>
        </div>
@endsection