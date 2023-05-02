@extends('layouts.servicio')
@section('title','Talleres')


@section('servicio')
<div class="">
  <div class="absolute-flex">
          <div class="mt-4">
             
           <!-- Channel Banner -->
                  <div class="channel-bannertaller">
                        <div class="texttaller">
                          <h2>Talleres</h2>
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
                <img src="{{asset('material/images/talleres.jpeg')}}" class="w-100" alt="...">
              </div>
              <div class="col-md-5 position-static p-4 pl-md-0">
                <h5 class="mt-0">Talleres</h5>
                <p>Es un espacio de trabajo en grupo, en el que se realizara un proceso de enseñanza-aprendizaje para que los participantes vivan el conocimiento a través de nuestras técnicas y dinámicas especializadas para trabajar en el desarrollo personal y profesional, mejorar el trabajo en equipo y su comunicación asertiva. Los resultados que obtendrás reflejados en tu empresa son: incremento del rendimiento y eficacia de los colaboradores, empatía, motivación y compromiso organizacional.</p>
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
                                <h5 class="t1 text-center">Cursos:</h5>
                                <li class="list-group-item">• Reingeniería personal.</li>
                                <li class="list-group-item">• Trabajo en equipo.</li>
                                <li class="list-group-item">• Comunicación asertiva.</li>
                              </ul>
                            </div>			
                    </div>
            </div>
        </div>
@endsection