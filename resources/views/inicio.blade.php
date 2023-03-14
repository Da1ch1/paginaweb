@extends('layouts.inicio')
@section('title','Sie')
@section('carusel')
             <!--carusel-->
     
             <div class="section">
             <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('material/images/CONTABILIDAD.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('material/images/CURSOS.jpg')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('material/images/TALLERES.jpg')}}" class="d-block w-100" alt="...">
                  </div>
                </div>
              <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </button>
              </div>
            </div>
           <!-- carusel -->
@endsection