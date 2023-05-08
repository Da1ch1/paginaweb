@extends('layouts.blog')
@section('title','HAPPYTALISMO')


@section('blogs')
<div class="">
  <div class="absolute-flex">
          <div class="mt-4">
             
           <!-- Channel Banner -->
                  <div class="channel-bannerblog">
                        <div class="textblog">
                            <div class="content">
                                <h1 class="title">HAPPYTALISMO
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
                        
                        <h3 class="subtitle">Happytalismo</h3>
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
                                    <h4><strong>Más compromiso, más clientes satisfechos</strong></h4>
                                    <p class="text-muted">
                                        Las empresas con empleados comprometidos tienen un 56% mayor satisfacción del cliente, 38% más productividad, 
                                        son 27% más rentables y tienen un 44% menos accidentes, de acuerdo con un estudio realizado por la empresa de análisis Gallup.
                                    </p>
                                    
                                </div>
                            <div class="imgblog col-md-6 gx-5 mb-4">
                                <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                                <img src="{{asset('material/images/Blog_14_1.jpg')}}" class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                                </div>
                            </div>
                
                            
                            </div>
                        </section>
                        <br>
                        <!-- Separador -->
                        <div class="container">
                            <hr class="hr hr-blurry">
                           </div>  
                           <!-- Separador -->
                           <br>

                           <section>
                            <div class="row">
                              <div class="imgblog col-md-6 gx-5 mb-4">
                                <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                                  <img src="{{asset('material/images/Blog_14_2.jpg')}}" class="img-fluid" />
                                  <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                  </a>
                                </div>
                              </div>
                  
                              <div class="textosblog col-md-6 gx-5 mb-4">
                                <h4><strong>En equipo, hacia adelante</strong></h4>
                                <p class="text-muted">
                                    Desarrollas los talentos del equipo, motivas la cultura de la organización y promovemos la confianza con nuestros colaboradores, y lo mismo queremos para nuestros socios. Con estas acciones,
                                     queremos que más miembros amen lo que hacen y se sientan cómodos con su labor al ser parte de la operación de la compañía.
                                </p>
                                
                              </div>
                            </div>
                          </section>
                           
                          <br>
                        <!-- Separador -->
                        <div class="container">
                            <hr class="hr hr-blurry">
                           </div>  
                           <!-- Separador -->
                           <br>

                          <section>
                            <div class="row ">
                                <div class="textosblog col-md-6 gx-5 mb-4">
                                    <h4><strong>¡Entre todos hasta la cima!</strong></h4>
                                    <p class="text-muted">
                                        Nuestro éxito se basa en un equipo unido que suma sus dones y talentos para trabajar,
                                         con dedicación y actitud positiva, a fin de llevar más lejos tu negocio y el de tu base instalada.
                                    </p>
                                    
                                </div>
                            <div class="imgblog col-md-6 gx-5 mb-4">
                                <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                                <img src="{{asset('material/images/Blog_14_3.jpg')}}" class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                                </div>
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
                        
                        <p class="subtitle">¡Por un México donde el happytalismo este un paso adelante!</p>
                    </div>
             </div>	
        </div>
    </div>
</div>

            
@endsection