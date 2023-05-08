@extends('layouts.catalogos')
@section('title','Catálogo')


@section('catalogos')
<div class="">
  <div class="absolute-flex">
          <div class="mt-4">
             
           <!-- Channel Banner -->
                  <div class="channel-bannercatalogos">
                        <div class="textcatalogos">
                          <h2 class="text-center">Catálogo</h2>
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
          <div class="container pdfbot">
            <div class="row no-gutters bg-light position-relative">
                <div class="col-md-4 mb-md-0 p-md-4">
                  </div>
              <div class="catalogo col-md-4  p-3 pl-8">
                <h5 class="mt-2 text-center">Catálogo</h5>
                <p class="mt-2 text-center">Pulsa sobre una esfera para cargar uno de nuestros cátalogos</p>
              </div>
              <div class="container-fluid">
                <button class="button " id="com" >Computo</button>
                <button class="button smoke " id="dis">Diseño</button>
                <button class="button drive white" id="mar">Marketing</button>
                <button class="button " id="ofi">Oficina</button>
                <button class="button smoke dark " id="pro">Producto</button>
                <button class="button drive white " id="seg">Seguridad</button>
            </div>
            
            </div>
              </div>			
          </div>
    </div>
</div>

@endsection

@section('pdf')

<div class="mt-5">
    <div class="absolute">
        <div class="mt-10">
            <div class="container ">
              <div class="row no-gutters bg-light position-relative">
                
                <div class="embed-responsive embed-responsive-1by1">
               
                    <iframe src="{{asset('material/pdf/Catalogo-Computo2023.pdf#toolbar=0')}}" frameborder="0" class="embed-responsive-item" id="chngpdf" ></iframe>
                  </div>
                
              </div>
                </div>			
            </div>
      </div>
  </div>
  <script>
    let comBtn = document.getElementById('com');
    let disBtn = document.getElementById('dis');
    let marBtn = document.getElementById('mar');
    let ofiBtn = document.getElementById('ofi');
    let proBtn = document.getElementById('pro');
    let segBtn = document.getElementById('seg');
    let pro2Btn = document.getElementById('pro2');
    let change = document.getElementById('chngpdf');

    comBtn.onclick = function() {
        change.src = "{{asset('material/pdf/Catalogo-Computo2023.pdf#toolbar=0')}}"
    }

    disBtn.onclick = function() {
        change.src = "{{asset('material/pdf/Catalogo-Diseno2023.pdf#toolbar=0')}}"
    }

    marBtn.onclick = function() {
        change.src = "{{asset('material/pdf/Catalogo-Marketing2023.pdf#toolbar=0')}}"
    }

    ofiBtn.onclick = function() {
        change.src = "{{asset('material/pdf/Catalogo-Oficina2023.pdf#toolbar=0')}}"
    }

    proBtn.onclick = function() {
        change.src = "{{asset('material/pdf/Catalogo-Producto2023.pdf#toolbar=0')}}"
    }

    segBtn.onclick = function() {
        change.src = "{{asset('material/pdf/Catalogo-Seguridad20230.pdf#toolbar=0')}}"
    }

    pro2Btn.onclick = function() {
        change.src = "{{asset('material/pdf/Catalogo-Computo2023.pdf')}}"
    }
</script>
@endsection

    

   
