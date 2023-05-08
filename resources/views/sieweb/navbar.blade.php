        
       <div class="navigation-wrap bg-light start-header start-style">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                        
                            <a  href="{{url('/') }}" ><img src="{{ asset('material/images/Logosie-azul-png.png') }}" width="90"  alt=""></a>	
                            
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            
                            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="{{url('/') }}">Inicio</a>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Servicios</a>
                                        <div class="dropdown-menu">
                                            
                                            <a class="dropdown-item" href="{{url('/Contabilidad')}}">Contabilidad</a>
                                            <a class="dropdown-item" href="{{url('/Soporte')}}">Soporte</a>
                                            <a class="dropdown-item" href="{{url('/Programacion')}}">Programación</a>
                                            <a class="dropdown-item" href="{{url('/Diseño y Marketing')}}">Diseño y Marketing</a>
                                            <a class="dropdown-item" href="{{url('/Capacitacion')}}">Capacitación</a>
                                            <a class="dropdown-item" href="{{url('/Talleres')}}">Talleres</a>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link"  href="{{url('/Contpaqi')}}" role="button" aria-haspopup="true" aria-expanded="false">CONTPAQi</a>
                                       
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link"  href="{{url('/Aspel')}}" role="button" aria-haspopup="true" aria-expanded="false">ASPEL</a>
                                     
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="{{url('/Blogs')}}">Blog</a>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="#">Conócenos</a>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="{{url('/Catalogos')}}">Catálogos</a>
                                    </li>
                                      
                                </ul>
                             
                             
                                   <div class="nav-item-boton pl-4 pl-md-0 ml-0 ml-md-4 float-right">
                                      <button onclick="cambiarTema()" class="btn rounded-fill"><i id="dl-icon" class="bi bi-moon-stars-fill"></i></button>  <!-- <div id="switch">
                                            <div id="circle"></div>
                                        </div>-->
                                    </div>
                            </div>
                            
                        </nav>		
                    </div>
                </div>
            </div>
        </div> 
                  
    <script src="{{ asset('material') }}/js/nav.js"></script>
