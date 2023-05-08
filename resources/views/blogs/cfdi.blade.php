@extends('layouts.blog')
@section('title','CFDI 4.0')


@section('blogs')
<div class="">
  <div class="absolute-flex">
          <div class="mt-4">
             
           <!-- Channel Banner -->
                  <div class="channel-bannerblog">
                        <div class="textblog">
                            <div class="content">
                                <h1 class="title">CFDI 4.0
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
                        
                        <h3 class="subtitle">Uso de CFDI 4.0</h3>
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
<br>
<!-- Separador -->
<div class="container">
    <hr class="hr hr-blurry">
   </div>  
   <!-- Separador -->
   <br>
<div class="mt-5">
        <div class="absolute">
            <div class="mt-10">
                <div class="container">
                    
                    <div class="row no-gutters bg-light position-relative">
                            <!--Section: Content-->
                        
                       

                           <section>
                            <div class="row">
                              <div class=" col-md-6 gx-5 mb-4">
                                <div class="cfdi bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                                  <img src="{{asset('material/images/Blog_13CDFI4.0.jpg')}}" class="img-fluid" />
                                  <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                  </a>
                                </div>
                              </div>
                  
                              <div class="textosblog col-md-6 gx-5 mb-4">
                                <h4><strong></strong></h4>
                                <p><strong>La nueva versión de facturación electrónica es uno de los más importantes cambios fiscales en 2022 aplicados por el SAT,
                                     por lo que a partir del 1 de enero del 2023 la emisión del CFDI 4.0 se hace obligatoria.</strong></p>
              
                                <p class="text-muted">
                                    A partir de la versión 4.0 del CFDI tanto los datos del Emisor como del Receptor se vuelven requeridos según el estándar del Anexo 20.
                                     Estos datos deben de coincidir 100% con la información plasmada en la constancia de situación fiscal o cédula de identificación oficial.
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
                        
                        
                        
                            <a href="https://www.sat.gob.mx/consultas/43074/actualizacion-factura-electronica---reforma-fiscal-2022-"><p class="subtitle">Más información</p></a>
                        
                    </div>
             </div>	
        </div>
    </div>
</div>

            
@endsection