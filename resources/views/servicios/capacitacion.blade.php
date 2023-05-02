@extends('layouts.servicio')
@section('title','Capacitación')


@section('servicio')
<div class="">
  <div class="absolute-flex">
          <div class="mt-4">
             
           <!-- Channel Banner -->
                  <div class="channel-bannercapacitacion">
                        <div class="textcapacitacion">
                          <h2>Capacitación</h2>
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
                <img src="{{asset('material/images/capacitacion.jpeg')}}" class="w-100" alt="...">
              </div>
              <div class="col-md-5 position-static p-4 pl-md-0">
                <h5 class="mt-0">Capacitación</h5>
                <p>Es un proceso para instruir y enseñar a tus colaboradores dotándolos de los conocimientos y habilidades para realizar sus actividades de una manera ordenada y eficiente. Con los cursos de capacitación que tenemos ofertados te garantizamos optimizar tiempos y procesos para incrementar tu productividad.</p>
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
                            <div class="c container">
                                <h5 class="t1 text-center">Cursos:</h5>
                                <div class="t0">
                                  <h5 class="t1 text-center">Office:</h5>
                                  <span class="" ><img src="{{asset('material/images/excel.jpg')}}" width="98px" alt=""></span>
                                <span class=""><img src="{{asset('material/images/word.jpg')}}" width="98px" alt=""></span>
                                <span class=""><img src="{{asset('material/images/powerpoint.jpg')}}" width="98px" alt=""></span>
                                <span class=""><img src="{{asset('material/images/acces.png')}}" width="98px" alt=""></span>
                                  </div>
                                  <div class="t4">
                                    <h5 class="t2 text-right">Sistemas CONTPAQi:</h5>
                                    <span class=""></span>
                                <span class=""><img src="{{asset('material/images/factura.jpg')}}" width="98px" alt=""></span>
                                <span class=""><img src="{{asset('material/images/nominas.jpg')}}" width="98px" alt=""></span>
                                <span class=""><img src="{{asset('material/images/contabiliza.png')}}" width="58px" alt=""></span>
                                <span class=""><img src="{{asset('material/images/inventario.png')}}" width="78px" alt=""></span>
                                    </div>
                                
                                </div>
                            </div>			
                    </div>
            </div>
        </div>
@endsection
