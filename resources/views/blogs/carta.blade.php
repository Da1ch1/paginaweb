@extends('layouts.blog')
@section('title','Carta Porte')


@section('blogs')
<div class="">
  <div class="absolute-flex">
          <div class="mt-4">
             
           <!-- Channel Banner -->
                  <div class="channel-bannerblog">
                        <div class="textblog">
                            <div class="content">
                                <h1 class="title">CARTA PORTE
                                  <div class="aurora">
                                    <div class="aurora__item"></div>
                                    <div class="aurora__item"></div>
                                    <div class="aurora__item"></div>
                                    <div class="aurora__item"></div>
                                  </div>
                                </h1>
                                
                              </div>

                        </div>
                        <p class="subtitle"></p>
                  </div>
              			
          </div>
    </div>
 </div> 
@endsection


@section('inicio')

<div class="mt-5">
    <div class="absolute">
        <div class="mt-10">
            <div class="container">
                    <div class="content">
                        
                        <h3 class="subtitle">¿Qué información se integra en el complemento Carta Porte?</h3>
                    </div>
             </div>	
        </div>
    </div>
</div>

            
@endsection


@section('info')
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->

<div class="mt-5">
        <div class="absolute">
            <div class="mt-10">
                <div class="container">
                    
                    <div class="row no-gutters bg-light position-relative">
                            <!--Section: Content-->
                        <section>
                            <div class="row ">
                                <div class="textosblog col-md-6 gx-5 mb-4">
                                    
                                    <p class="text-muted">
                                        Toda la relacionada a los bienes o mercancías, ubicaciones de origen, puntos intermedios y destinos, así como lo referente al medio por el que se transportan;
                                         ya sea por vía terrestre, aérea, marítima o fluvial; y en su caso, incorporar la información para el traslado de hidrocarburos y petrolíferos.
                                    </p>
                                    
                                </div>
                            <div class="imgblog col-md-6 gx-5 mb-4">
                                <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                                <img src="{{asset('material/images/Timeline_CartaPorte.svg')}}" class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                                </div>
                            </div>
                
                            <div class="textosblog  gx-5 mb-4">
                                    <h4><strong>Recuerda que:</strong></h4>
                                <p class="text-muted">
                                    Cuando traslades mercancías, debes generar previamente el CFDI con el complemento Carta Porte, así podrás acreditar su legal estancia y/o tenencia de las mismas durante el traslado, acompañándolas con el archivo digital o la representación impresa.
<br>
<br>
                                    La información que debes registrar en el complemento Carta Porte dependerá de los sujetos que intervengan en la operación, el medio de transporte y el tipo de CFDI (Ingreso o Traslado).
                                </p>
                                
                            </div>
                            </div>
                        </section>
                       
                    </div>
                        
                 </div>	
            </div>
        </div>
</div>

           		
 
@endsection

@section('final')

<div class="mt-5">
    <div class="absolute">
        <div class="mt-10">
            <div class="container">
                    <div class="content">
                        
                        <p class="subtitle"></p>
                    </div>
             </div>	
        </div>
    </div>
</div>

            
@endsection