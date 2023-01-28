<!--Plantila con NavBar, Footer, Css y Js-->
@extends('layouts.template')
@section('content')
<!--Plantila con NavBar, Footer, Css y Js-->


<!--Carrusel Contacto-->
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/contacto_carrusel.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <h1 class="display-3 font-weight-bold text-uppercase" style="color:#fff;">Contacto</h1>
      </div>
    </div>
  </div>
</section>

<br>
<br>
<br>

<section class="wrapper">
  <div class="container-fostrap">
    <div class="content">
      <div class="container">
        <div class="row contact-container">
          
        <a href="mailto:mtria.globalpolitics@academicos.udg.mx">
            <div class="card pointer" style="aspect-ratio: 1; width: 230px;">
              <img src="{{asset('images/gmail.svg')}}" style="height: 80%;">
              <h4 class="card-title text-center" style="color:#fd5f00;">
                Envía un correo
              </h4>
            </div>
          </a>
          
          <a data-toggle="modal" data-target="#ubicacion">
            <div class="card pointer" style="aspect-ratio: 1; width: 230px;">
              <img src="{{asset('images/maps.icon.png')}}" style="height: 80%;">
              <h4 class="card-title text-center" style="color:#fd5f00;">
                Dirección
              </h4>
            </div>
          </a>
          
          <a href="tel://3338193300">
            <div class="card pointer" style="aspect-ratio: 1; width: 230px;">
              <img src="{{asset('images/google-home.png')}}" style="height: 80%;">
              <h4 class="card-title text-center" style="color:#fd5f00;">
                Llámanos
              </h4>
            </div>
          </a>
        </div>

        <div class="row">
          <div class="col d-flex mx-auto justify-content-center">
            <h3 class="display-3 font-weight-bold" style="color: #004777;">
              M&#225;s Informes
            </h3>
          </div>
        </div>
	      <div class="row">
          <div class="col d-flex mx-auto justify-content-center" style="word-wrap: anywhere;">
            <p>
              Coordinadora: Mtra. Ligia Ibarra Gonz&#225;lez<br>
              Direcci&#243;n: Parres Arias #150, esquina perif&#233;rico. Campus Los Belenes, edificio F4, Primer Piso.<br>
              Tel&#233;fono: (33) 3819-3300 ext. 23541 y 23656<br>
              Correo electr&#243;nico: mtria.globalpolitics@academicos.udg.mx  ligia.ibarra@administrativos.udg.mx
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<div class="modal fade" id="ubicacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class=" modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content modal-lg" style="background-color:#fff;">
      <div class="modal-header" style="background-color: #004777;">
        <h5 class="modal-title text-light" id="exampleModalLongTitle"><b>Ubicacion</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #ffffff;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-justify p-2" style="color: #000;">
        <p>
          Centro Universitario De Ciencias Sociales y Humanidades (Cucsh)
          Edificio F4, Primer Piso
          Sede Los Belenes. Av. José Parres Arias #150, San José del Bajío, C. P. 45100.
          Zapopan, Jalisco, México.
        </p>
      </div>
    </div>
  </div>
</div>
<br>
<br>

<!--MAPA-->
<header class="text-center">
  <h1 class="display-3 font-weight-bold" style="color: #004777;">Ubicación</h1>
</header>

<div class="d-flex mx-auto justify-content-center">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3731.239016813848!2d-103.37976518459196!3d20.741104202910744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428af097b88abe3%3A0xbb90e158805bcd46!2sCUCSH%20Belenes%20(Centro%20Universitario%20De%20Ciencias%20Sociales%20y%20Humanidades%20Campus%20Belenes)!5e0!3m2!1ses!2smx!4v1646834888050!5m2!1ses!2smx" width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
<br>
<br>
</section>
<!--MAPA-->



@endsection