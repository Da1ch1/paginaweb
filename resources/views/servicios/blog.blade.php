@extends('layouts.blog')
@section('title','Blogs')


@section('blogs')
<div class="">
  <div class="absolute-flex">
          <div class="mt-4">
             
           <!-- Channel Banner -->
                  <div class="channel-bannerblog">
                        <div class="textblog">
                            <div class="content">
                                <h1 class="title">Blogs
                                  <div class="aurora">
                                    <div class="aurora__item"></div>
                                    <div class="aurora__item"></div>
                                    <div class="aurora__item"></div>
                                    <div class="aurora__item"></div>
                                  </div>
                                </h1>
                                
                              </div>

                        </div>
                        <p class="subtitle">Aquí algunos blogs que pueden ser de tu interes.</p>
                  </div>
              			
          </div>
    </div>
 </div> 
@endsection

@section('info')

<div class="mt-5">
        <div class="absolute">
            <div class="mt-10">
                <div class="container">
                           
                                <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
                                <div class="row no-gutters bg-light position-relative">
                                <section class="hero-section">
                                <div class="card-grid">
                                    <a class="card" href="{{url('/Happytalismo')}}">
                                    <div class="card__background" style="background-image: url('../material/images/Blog_14.jpeg')"></div>
                                    <div class="card__content">
                                        <p class="card__category">leer el blog</p>
                                        <h3 class="card__heading">Conoce el Happytalismo</h3>
                                    </div>
                                    </a>
                                    <a class="card" href="{{url('/CFDI')}}">
                                    <div class="card__background" style="background-image: url('../material/images/Blog_13.jpeg')"></div>
                                    <div class="card__content">
                                        <p class="card__category">leer el blog</p>
                                        <h3 class="card__heading1">Uso del CFDI 4.0- Emisor y Receptor</h3>
                                    </div>
                                    </a>
                                    <a class="card" href="{{url('/Buzon')}}">
                                    <div class="card__background" style="background-image: url('../material/images/Blog_12.png')"></div>
                                    <div class="card__content">
                                        <p class="card__category">leer el blog</p>
                                        <h3 class="card__heading">Buzón Tributario (SAT)</h3>
                                    </div>
                                    </li>
                                    <a class="card" href="{{url('/Carta')}}">
                                    <div class="card__background" style="background-image: url('../material/images/Blog_11.png')"></div>
                                    <div class="card__content">
                                        <p class="card__category">leer el blog</p>
                                        <h3 class="card__heading">Información Carta Porte</h3>
                                    </div>
                                    </a>
                                <div>
                                </section>   </div>     
                 </div>	
            </div>
        </div>
</div>

           		
 
@endsection

@section('info2')

<div class="mt-5">
    <div class="absolute">
        <div class="mt-10">
            <div class="container">
                       
                            <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
                            <div class="row no-gutters bg-light position-relative">
                            <section class="hero-section">
                                <div class="card-grid">
                                <a class="card" href="#">
                                    <div class="card__background" style="background-image: url('../material/images/Blog_10_new.jpeg')"></div>
                                    <div class="card__content">
                                    <p class="card__category">leer el blog</p>
                                    <h3 class="card__heading1">Regimen Simplificado de Confianza (RESICO)</h3>
                                    </div>
                                </a>
                                <a class="card" href="#">
                                    <div class="card__background" style="background-image: url('../material/images/Blog_9_new.jpeg')"></div>
                                    <div class="card__content">
                                    <p class="card__category">leer el blog</p>
                                    <h3 class="card__heading1">Acciones para cuidar el medio ambiente</h3>
                                    </div>
                                </a>
                                <a class="card" href="#">
                                    <div class="card__background" style="background-image: url('../material/images/Blog_8_new.jpeg')"></div>
                                    <div class="card__content">
                                    <p class="card__category">leer el blog</p>
                                    <h3 class="card__heading">Preguntas frecuentes de retenciones IVA</h3>
                                    </div>
                                </li>
                                <a class="card" href="#">
                                    <div class="card__background" style="background-image: url('../material/images/Blog_7_new.jpeg')"></div>
                                    <div class="card__content">
                                    <p class="card__category">leer el blog</p>
                                    <h3 class="card__heading">Como hacer una factura en CONTPAQi</h3>
                                    </div>
                                </a>
                                <div>
                            </section></div>
             </div>	
        </div>
    </div>
</div>

@endsection

@section('info3')
<div class="mt-5">
    <div class="absolute">
        <div class="mt-10">
            <div class="container">
                            <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
                            <div class="row no-gutters bg-light position-relative">
                            <section class="hero-section">
                                <div class="card-grid">
                                <a class="card" href="#">
                                    <div class="card__background" style="background-image: url('../material/images/Blog_6_new.jpeg')"></div>
                                    <div class="card__content">
                                    <p class="card__category">leer el blog</p>
                                    <h3 class="card__heading1">Análisis y Diseño de puestos</h3>
                                    </div>
                                </a>
                                <a class="card" href="#">
                                    <div class="card__background" style="background-image: url('../material/images/Blog_5_new.jpeg')"></div>
                                    <div class="card__content">
                                    <p class="card__category">leer el blog</p>
                                    <h3 class="card__heading1">Solicitud de citas del SAT</h3>
                                    </div>
                                </a>
                                <a class="card" href="#">
                                    <div class="card__background" style="background-image: url('../material/images/Blog_4_new.jpeg')"></div>
                                    <div class="card__content">
                                    <p class="card__category">leer el blog</p>
                                    <h3 class="card__heading">¿Qué es el balance general?</h3>
                                    </div>
                                </li>
                                <a class="card" href="#">
                                    <div class="card__background" style="background-image: url('../material/images/Blog_3_new.jpeg')"></div>
                                    <div class="card__content">
                                    <p class="card__category">leer el blog</p>
                                    <h3 class="card__heading">La importancia de actualizar Windows</h3>
                                    </div>
                                </a>
                                <div>
                            </section>   </div>
             </div>	
        </div>
    </div>
</div>

@endsection

   
@section('info4')
<div class="mt-5">
    <div class="absolute">
        <div class="mt-10">
            <div class="container">         
                            <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
                            <div class="row no-gutters bg-light position-relative">
                            <section class="hero-section">
                                <div class="card-grid">
                                <a class="card" href="#">
                                    <div class="card__background" style="background-image: url('../material/images/Blog_2_new.jpeg')"></div>
                                    <div class="card__content">
                                    <p class="card__category">leer el blog</p>
                                    <h3 class="card__heading1">Conoce el régimen de incorporación fiscal</h3>
                                    </div>
                                </a>
                                <a class="card" href="#">
                                    <div class="card__background" style="background-image: url('../material/images/Blog_1_new.jpeg')"></div>
                                    <div class="card__content">
                                    <p class="card__category">leer el blog</p>
                                    <h3 class="card__heading1">CFDI emitidos y recibidos</h3>
                                    </div>
                                </a>
                                <div>
                            </section>
                        </div>
             </div>	
        </div>
    </div>
</div>

@endsection