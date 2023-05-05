@extends('layouts.aspel')
@section('title','Sistemas ASPEL')


@section('aspel')
 


<div class="">
  <div class="absolute-flex">
          <div class="mt-4">
              
           <!-- Channel Banner -->
                  <div class="channel-banneraspel">
                        <div class="textaspel">
                          <h2>Sistemas ASPEL</h2>
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
          <div class="container ">
            <div class="row no-gutters bg-light position-relative">
              <div class="col-md-5 mb-md-0 p-md-4">
                <img src="{{asset('material/images/fondo-aspel.jpg')}}" class="w-100" alt="...">
              </div>
              <div class="col-md-5 p-4 pl-md-0">
                <h5 class="mt-0">¿Qué es ASPEL?</h5>
                <p>Aspel es una compañía 100% mexicana con 39 años de experiencia, líder en el mercado de Software administrativo, brindando servicio a más de 1 millón de empresas en México y Latinoamérica.
                    Como resultado de su innovación en soluciones tecnológicas, automatiza los procesos contables, administrativos, de facturación, punto de venta y nómina de las micro, pequeñas y medianas empresas, favoreciendo la correcta toma de decisiones para su crecimiento e impulsando su transformación digital. Sus sistemas facilitan el cumplimiento de las obligaciones fiscales electrónicas incluyendo facturación, contabilidad y nómina.</p>
              </div>
            </div>
              </div>			
          </div>
    </div>
</div>

@endsection

@section('aspelcards')
<div class="">
    <div class="absolute">
            <div class="mt-10">
                    <div class="container contable">
                        <main class="maincard" id="main">
                            <h1 class="titulo-card">Servicios ASPEL</h1>
                            <div class="tarjetasaspel">
                            <div class="cardaspel" ><img class="imagen" src="{{asset('material/images/AspelSAE.jpeg')}}" />
                              <div class="text">
                                <a href="#"><h2 data-splitting="" class="loremtitulo">aspel SAE</h2></a>
                                <a href="https://www.youtube.com/watch?v=7fea0FXKUaQ&ab_channel=CORPORATIVOSIEGUADALAJARA"><p data-splitting="" class="lorem">Es el Sistema Administrativo Empresarial que apoya a todos aquellos empresarios y Pymes que requieren optimizar la gestión de su negocio.</p></a>
                              </div>
                            </div>
                            <div class="cardaspel" ><img class="imagen" src="{{asset('material/images/AspelCOI.jpeg')}}" alt="A City skyline at sunset"/>
                              <div class="text">
                                <a href="#"><h2 data-splitting="" class="loremtitulo">aspel COI</h2></a>
                                <a href="https://www.youtube.com/watch?v=It1479JFZIU&ab_channel=CORPORATIVOSIEGUADALAJARA"><p data-splitting="" class="lorem"> Almacena y comparte tu información contable y fiscal de manera segura desde la nube.</p></a>
                              </div>
                            </div>
                            <div class="cardaspel" ><img class="imagen" src="{{asset('material/images/AspelNOI.jpeg')}}" />
                              <div class="text">
                                <a href="#"><h2 data-splitting="" class="loremtitulo">aspel NOI</h2></a>
                                <a href="https://www.youtube.com/watch?v=elZ0EesuDsQ&ab_channel=CORPORATIVOSIEGUADALAJARA"><p data-splitting="" class="lorem">Software de nómina integral que te ayuda administrar la nómina y capital humano. Automatiza el control de la nómina.</p></a>
                              </div>
                            </div>
                            <div class="cardaspel" ><img class="imagen" src="{{asset('material/images/AspelFACTURE.jpeg')}}" alt="A City skyline at sunset"/>
                              <div class="text">
                                <a href="#"><h2 data-splitting="" class="loremtitulo">aspel FACTURE</h2></a>
                                <a href="https://www.youtube.com/watch?v=SP1drc2XsxA&ab_channel=CORPORATIVOSIEGUADALAJARA"><p data-splitting="" class="lorem">Sistema de Facturación inteligente online, la herramienta que te ayudará a generar facturas, notas de crédito y recibos de honorarios.</p></a>
                              </div>
                            </div>
                            <div class="cardaspel" ><img class="imagen" src="{{asset('material/images/AspelCAJA.jpeg')}}" alt="A City skyline at sunset"/>
                              <div class="text">
                                <a href="#"><h2 data-splitting="" class="loremtitulo">aspel CAJA</h2></a>
                                <a href="https://www.youtube.com/watch?v=roCQLBwqaVo&ab_channel=CORPORATIVOSIEGUADALAJARA"><p data-splitting="" class="lorem">Sistema Punto de Venta que facilita realizar cobros en los negocios y automatizar el manejo de operaciones comerciales.</p></a>
                              </div>
                            </div>
                            <div class="cardaspel" ><img class="imagen" src="{{asset('material/images/AspelBANCO.jpeg')}}" alt="A City skyline at sunset"/>
                                <div class="text">
                                    <a href="#"><h2 data-splitting="" class="loremtitulo">aspel BANCO</h2></a>
                                  <a href="https://www.youtube.com/watch?v=q83ZIPSTJ6k&ab_channel=CORPORATIVOSIEGUADALAJARA"><p data-splitting="" class="lorem">Es el Sistema de Control Bancario que permite controlar de manera sencilla sus operaciones con varios bancos.</p></a>
                                </div>
                              </div>
                              <div class="cardaspel" ><img class="imagen" src="{{asset('material/images/AspelPROD.jpeg')}}" alt="A City skyline at sunset"/>
                                <div class="text">
                                    <a href="#"><h2 data-splitting="" class="loremtitulo">aspel PROD</h2></a>
                                  <a href="https://www.youtube.com/watch?v=TwoXDYzhbuo&ab_channel=CORPORATIVOSIEGUADALAJARA"><p data-splitting="" class="lorem">Automatiza la manufactura y todas las operaciones relacionadas, como la gestión de inventarios y el cálculo de materia prima.</p></a>
                                </div>
                              </div>
                              <div class="cardaspel" ><img class="imagen" src="{{asset('material/images/AspelADM.jpeg')}}" alt="A City skyline at sunset"/>
                                <div class="text">
                                    <a href="#"><h2 data-splitting="" class="loremtitulo">aspel ADM</h2></a>
                                  <a href="https://www.youtube.com/watch?v=LqTHZp2mIic&ab_channel=CORPORATIVOSIEGUADALAJARA"><p data-splitting="" class="lorem">Gestiona las principales operaciones de compra-venta y factura desde cualquier lugar y en todo momento de manera fácil, eficiente y segura.</p></a>
                                </div>
                              </div>
                          </div>
                          </main>
                    </div>			
            </div>
    </div>
</div>
@endsection