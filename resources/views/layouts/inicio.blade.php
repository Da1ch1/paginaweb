<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

          


            <!-- Font Awesome -->
            <link
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
            <!-- Google Fonts -->
            <link
              href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"rel="stylesheet"/>
              <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
              <!-- Fonts -->
              <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
              <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">       
              <link href="{{ asset('material') }}/demo/navbar.css" rel="stylesheet">
              <link href="{{ asset('material') }}/demo/terminos.css" rel="stylesheet">
              <link href="{{ asset('material') }}/demo/inicio.css" rel="stylesheet">
              <link href="{{ asset('material') }}/demo/nav.scss" rel="stylesheet">
              <link rel="stylesheet" href="{{asset('material')}}//demo/botonfloat.css">
              <link rel="stylesheet" href="{{asset('material/demo/secciones.css')}}">
              <link rel="stylesheet" href="{{asset('material/demo/carusel.css')}}">
              <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    </head>
    <body  class="hero-anime " data-bs-theme="light">	
         <!--navbar -->
                @extends('sieweb.navbar')
          <!--navbar -->
<!--------------------------------------------------------------------------------------------->
          <!-- Video inicio-->
          <div class="">
            <div class="absolute-flex">
                <div class="mt-4">
                  @yield('video')		
                    </div>
              </div>
          </div>
          <!-- Video inicio-->
          
          <!-- Separador -->
          <div class="container">
          <hr class="hr hr-blurry">
         </div>  
         <!-- Separador -->
         
         <!-- Carusel -->
          <div class="">
            <div class="absolute-flex">
                <div class="mt-4">
                    <div class="container">
                      @yield('carusel')
                        </div>			
                    </div>
              </div>
          </div>
         <!-- Carusel -->
              <br>
                   @extends('sieweb.botnfloat')
             
             
                   <!-- Separador -->
                      <div class="container">
                        <h2 class="line-title">Servicios</h2>
                      </div>
                    <!-- Separador -->

                    <br>
                    <br>
                   

              <!-- Servicios-->
                  <div class="">
                   <div class="absolute-flex">
                       <div class="mt-4">
                           <div class="container ">
                             @yield('secciones')
                               </div>			
                           </div>
                     </div>
                 </div>
              <!-- Servicios -->

                  <br>
                  <br>
                  
                  

                    <!-- Separador -->
                      <div class="container">
                        <h2 class="line-title">Inscribete</h2>
                      </div>
                    <!-- Separador -->
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
            <!--Formulario-->
                <div class="">
                  <div class="absolute">
                      <div class="mt-9">
                          <div class="container ">
                            @yield('formulario')
                              </div>			
                          </div>
                    </div>
                </div>
             <!--formulario-->
             <br>
             <br>
             <br>
             <br>
<!------------------------------------------------------------------------------------------------------------->
                @extends('sieweb.footer')
            <!-- Jquery needed--> 
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <script src="js/scripts.js"></script>
            <script src="{{asset('material/js/secciones.js')}}"></script>
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
             <!-- Bootstrap 4 -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
            <!-- Bootstrap 5-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
