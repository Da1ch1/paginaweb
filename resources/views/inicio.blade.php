@extends('layouts.inicio')
@section('title','Sie')





  <!--VIDEO-->
@section('video')

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
          <div class="carousel-caption d-none d-md-block">
           <!-- <h2>Corporativo SIE</h2>
            <p>Guadalajara</p>
            <p><br></p>
            <p><br></p>-->
            
        </div>
      <video muted autoplay loop playsinline class="d-block w-100"> <source src="{{asset('material/videos/pre2.mp4')}}" type="video/mp4"></video>
          <div class="encabezado-video">
            <p>Distribuidores de CONTPAQi & ASPEL, asesorías en contabilidad & físcal</p>
            <p>somos tu equipo</p>
          </div>
    </div>
    
  </div>
</div>
@endsection
<!--Video-->


@section('carusel')
             <!--carusel-->
             <article class="post">
              <div>
                
                  
                    <div id="carouselExampleIndicators" class="carousel carousel-dark slide carousel-fade" data-ride="carousel">
                       <div class="carousel-indicators">
                         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                       </div>
                       <div class="carousel-inner">
                         <div class="carousel-item active">
                           <img src="{{asset('material/images/0 portada.jpg')}}" class="d-block w-100" alt="...">
                         </div>
                         <div class="carousel-item">
                           <img src="{{ asset('material/images/CONTABILIDAD.jpg') }}" class="d-block w-100" alt="...">
                         </div>
                         <div class="carousel-item">
                           <img src="{{asset('material/images/CURSOS.jpg')}}" class="d-block w-100" alt="...">
                         </div>
                         <div class="carousel-item">
                           <img src="{{asset('material/images/TALLERES.jpg')}}" class="d-block w-100" alt="...">
                         </div>
                       </div>
                     <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                         <span class="sr-only">Previous</span>
                       </button>
                       <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                         <span class="sr-only">Next</span>
                       </button>
                     </div>
                   
                
              </div>
              <div class="post__container">
                <span class="post__category">SOLUCIÓN INTEGRAL EMPRESARIAL</span>
            
                <div class="post__content">
                  <header>
                    <time class="post__time">01 Dic 2013</time>
                    <h1 class="post__header"><span>SIE</span> <span></span></h1>
                  </header>
            
                  <p class="post__text">En Corporativo SIE Guadalajara somos tu equipo para ayudarte a crecer tu negocio, seremos tu respaldo y aliado para desarrollar estrategías y procesos que te ayudarán a lograr tus objetivos empresariales.

                   <br> Nuestras áreas son: &nbsp;
                    
                    Distribuidores de CONTPAQi y ASPEL, asesorías en contabilidad y físcal, elaboración de nóminas, soporte técnico, marketing y diseño, programación y cursos en desarrollo humano empresarial.</p>
                </div>
                <div class="post__link">
                  <a href="#">Más de nosotros</a>
                </div>
              </div>
            </article>
             
           <!-- carusel -->
@endsection


      <!--formulario-->
@section('formulario')
     

      <div class="row no-gutters   position-relative">
        <div class="col-md-6 mb-md-0 p-md-4">
          <div class="section">
            <img src="{{ asset('material/images/Logosie-azul-png.png') }}"   alt="">
            <div class="for container">
            <form>
              <!-- Name input -->
              <div class="form-outline mb-2">
               <br>
                <input type="text" id="form4Example1" class="form-control" placeholder="Nombre"/>
              </div>
            
              <!-- Email input -->
              <div class="form-outline mb-2">
                <br>
                <input type="email" id="form4Example2" class="form-control" placeholder="Email"/>
              </div>
            
              <!-- Message input -->
              <div class="form-outline mb-2">
               <br>
                <input type="text" class="form-control" id="form4Example3" rows="2" placeholder="Número">
              </div>
            
              <!-- Checkbox -->
              <div class="form-check d-flex justify-content-center mb-2">
                <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4" checked />
                <br>
                <label class="form-check-label" for="form4Example4">
                  <br>
                  Confirmar y enviarme una copia
                </label>
              </div>
                <br>
              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-2">Enviar</button>
            </form>
             
           </div>
          </div>
        </div>
        <div class="col-md-5 bg-light p-4 pl-md-6">
          <h5 class="mt-0">Inscríbete a nuestro newsletter</h5>
          <p>Podrás ver los blogs y promociones recientes que ofrece Corporativo SIE.</p>
          <a  class="stretched-link"></a>
        </div>
      </div>
@endsection



<!--secciones--> 
@section('secciones')

<!--<div class="options">
  <div class="option active" style="background-image:url('../material/images/pacosoporte.jpeg');">
     <div class="shadow"></div>
     <div class="label">
        <div class="info">
            <div class="main">Soporte</div>
           <a href="#"><div class="sub">Más información</div></a>
        </div>
     </div>
  </div>
  <div class="option" style="background-image:url('../material/images/Diseñomarketing.jpeg');">
    <div class="shadow"></div>
    <div class="label">
       <div class="info">
          <div class="main">Diseño y Marketing</div>
          <a href="#"><div class="sub">Más información</div></a>
       </div>
    </div>
 </div>
 <div class="option" style="background-image:url('../material/images/programacion.jpeg');">
  <div class="shadow"></div>
  <div class="label">
     <div class="info">
        <div class="main">Programación</div>
        <a href="#"><div class="sub">Más información</div></a>
     </div>
  </div>
</div>
  <div class="option" style="background-image:url('../material/images/Contabilidad.jpeg');">
     <div class="shadow"></div>
     <div class="label">
        
        <div class="info">
           <div class="main">Contabilidad</div>
           <a href="{{url('/Contabilidad')}}"><div class="sub">Más información</div></a>
        </div>
     </div>
  </div>
  <div class="option" style="background-image:url('../material/images/capacitacion.jpeg');">
     <div class="shadow"></div>
     <div class="label">
        
        <div class="info">
           <div class="main">Capacitación</div>
           <a href="#"><div class="sub">Más información</div></a>
        </div>
     </div>
  </div>
  <div class="option" style="background-image:url('../material/images/talleres.jpeg'); background-repeat: no-repeat;background-size: cover;">
    <div class="shadow"></div>
    <div class="label">
       
       <div class="info">
          <div class="main">Talleres</div>
          <a href="#"><div class="sub">Más información</div></a>
       </div>
    </div>
  </div>
  <div class="option" style="background-image:url('../material/images/capacitacion.jpeg');">
    <div class="shadow"></div>
    <div class="label">
       
       <div class="info">
        <div class="main">Capacitación</div>
        <a href="#"><div class="sub">Más información</div></a>
       </div>
    </div>
  </div>
</div>-->


<main id="app">
  <section class="carousel1">
    <ul class="carousellist">
        <li class="carouselitem" tabindex="0" data-active="data-active">
        <div class="carousel__box">
          <div class="carousel__image"><img src="{{asset('material/images/pacosoporte.jpeg')}}" width="480" height="720"/></div>
          <div class="carousel__contents">
            <h2 class="user__name">Soporte</h2>
            <a href="#"><h3 class="user__title">Más información</h3></a>
          </div>
        </div>
      </li>
      <li class="carouselitem" tabindex="0">
        <div class="carousel__box">
          <div class="carousel__image"><img src="{{asset('material/images/Diseñomarketing.jpeg')}}" width="480" height="720"/></div>
          <div class="carousel__contents">
            <h2 class="user__name">Diseño y Marketing</h2>
            <a href="#"><h3 class="user__title">Más información</h3></a>
          </div>
        </div>
      </li>
      <li class="carouselitem" tabindex="0">
        <div class="carousel__box">
          <div class="carousel__image"><img src="{{asset('material/images/programacion.jpeg')}}" width="480" height="720"/></div>
          <div class="carousel__contents">
            <h2 class="user__name">Programación</h2>
            <a href="#"><h3 class="user__title">Más información</h3></a>
          </div>
        </div>
      </li>
      <li class="carouselitem" tabindex="0">
        <div class="carousel__box">
          <div class="carousel__image"><img src="{{asset('material/images/Contabilidad.jpeg')}}" width="480" height="720"/></div>
          <div class="carousel__contents">
            <h2 class="user__name">Contabilidad</h2>
            <a href="{{url('/Contabilidad')}}"><h3 class="user__title">Más información</h3></a>
          </div>
        </div>
      </li>
      <li class="carouselitem" tabindex="0">
        <div class="carousel__box">
          <div class="carousel__image"><img src="{{asset('material/images/capacitacion.jpeg')}}" width="480" height="720"/></div>
          <div class="carousel__contents">
            <h2 class="user__name">Capacitación</h2>
            <a href="#"><h3 class="user__title">Más información</h3></a>
          </div>
        </div>
      </li>
      <li class="carouselitem" tabindex="0">
        <div class="carousel__box">
          <div class="carousel__image"><img src="{{asset('material/images/talleres.jpeg')}}" width="480" height="720"/></div>
          <div class="carousel__contents">
            <h2 class="user__name">Talleres</h2>
            <a href="#"><h3 class="user__title">Más información</h3></a>
          </div>
        </div>
      </li>
      <li class="carouselitem" tabindex="0">
        <div class="carousel__box">
          <div class="carousel__image"><img src="{{asset('material/images/Contpaqi.jpg')}}" width="480" height="720"/></div>
          <div class="carousel__contents">
            <h2 class="user__name">Contpaqi</h2>
            <a href="#"><h3 class="user__title">Más información</h3></a>
          </div>
        </div>
      </li>
      <li class="carouselitem" tabindex="0">
        <div class="carousel__box">
          <div class="carousel__image"><img src="{{asset('material/images/Aspel.jpg')}}" width="480" height="720"/></div>
          <div class="carousel__contents">
            <h2 class="user__name">Aspel</h2>
            <a href="#"><h3 class="user__title">Más información</h3></a>
          </div>
        </div>
      </li>
    </ul>
    <div class="carousel__nav">
      <button class="prev">
        
      </button>
      <button class="next">
        
      </button>
    </div>
  </section>
</main>




@endsection 
<!--secciones-->


