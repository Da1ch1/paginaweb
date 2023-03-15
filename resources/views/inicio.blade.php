@extends('layouts.inicio')
@section('title','Sie')
@section('carusel')
             <!--carusel-->
     
             <div class="section">
             <div id="carouselExampleControls" class="carousel carousel-dark slide carousel-fade" data-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
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

@section('formulario')
      <div class="section">
        <div class="for container">
          
        <form>
          <!-- Name input -->
          <div class="form-outline mb-2">
           <!-- <label class="form-label" for="form4Example1">Nombre</label>-->
           <br>
            <input type="text" id="form4Example1" class="form-control" placeholder="Nombre"/>
          </div>
        
          <!-- Email input -->
          <div class="form-outline mb-2">
            <!--<label class="form-label" for="form4Example2">Email</label>-->
            <br>
            <input type="email" id="form4Example2" class="form-control" placeholder="Email"/>
          </div>
        
          <!-- Message input -->
          <div class="form-outline mb-2">
           <!-- <label class="form-label" for="form4Example3">Número</label>-->
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
@endsection