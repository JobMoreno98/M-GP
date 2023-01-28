<!--Plantila con NavBar, Footer, Css y Js-->
@extends('layouts.template')
@section('content')
<!--Plantila con NavBar, Footer, Css y Js-->


<link rel="stylesheet" href="{{ asset('css/plan-estudios.css') }}">
<link rel="stylesheet" href="{{ asset('css/plan-estudios-media.css') }}">


<main>
  <!-- Titulo -->
  <section class="titulo">
    <div class="unnafected">
      <h1 class="text-uppercase font-weight-bold">Plan de estudios</h1>
    </div>
  </section>
  
  <!-- Plan de estudios -->
  <section class="introduccion">
    <!-- Texto -->
    <div class="intro">
    <p class="text-justify">La Maestría en Global Politics and Transpacific Studies, basa la estructura de su Plan
      de Estudios a las necesidades de adecuar los futuros conocimientos y habilidades de sus estudiantes en las
      demandas de la sociedad actual y de los mercados laborales. Para ello se establecen cuatro áreas de
      Formación: el Área de Formación Básica Común Obligatoria que incluye las materias vinculadas con los
      aspectos teóricos globales y de relaciones internacionales y de metodología; por su parte, el Área de
      Formación Básica Particular Obligatoria se conforma con las materias relacionadas con los Estudios
      Transpacíficos.
    </p>
    <p class="text-justify">El Área de Formación Especializante se dividirá en tres áreas regionales: América del
      Norte, Japón y China.
      Las tres destacan por contar con las mayores interacciones y dinámicas políticas, económicas y comerciales
      de la región transpacífica y que a su vez son fundamentales no solo para México, sino para los países del
      Pacífico Latinoamericano. (Esto porque no sólo se está pensando en estudiantes mexicanos, sino de otros
      países). Finalmente, el Área de Formación Optativa Abierta engloba los cursos sobre el aprendizaje de
      lenguas extranjeras de la región de Asia-Pacífico e incluye un curso sobre los países de la Alianza del
      Pacífico; este último se incorporó a fin de dar a los estudiantes cuyos temas de investigación se vinculen a
      cualquiera de estos países un panorama más amplio a partir del conocimiento de su Historia, Cultura y
      Sociedad.
    </p>
    <p class="text-justify"> Los estudiantes que opten por la Especialización en China tendrán la opción de cursar
      las materias
      especializantes de tercer semestre en la Universidad de Xi’an Jiaotong-Liverpool (XJTLU) en
      Suzhou, Jiangsu, China.
    </p>

      <!-- Botón -->
      <button class="button1">
          <a href="https://www.xjtlu.edu.cn/en/" target="_blank">
            <!-- <span ></span> -->
              <p class="sbt" style="font-size: 15px; color: white;">Xi’an Jiaotong-Liverpool (XJTLU)en Suzhou, Jiangsu, China.</p>
            <div class="liquid1"></div>
          </a>
        </button>
    </div>
    <!-- Imagen -->
    <div class="side"></div>
  </section>
  
  <!-- Plan de estudios -->
  <h2 class="font-weight-bold">Áreas del Plan de Estudio</h2>
  <section class="planes">
    <!-- Item 1 -->
    <div class="item item-1" data-toggle="modal" data-target="#example-modal">
      <div class="unnafected">
        <h3 
          class="font-weight-light text-uppercase"
        >
          Área de Formación Básica Común Obligatoria
        </h3>
      </div>
    </div>

    <!-- Item 2 -->
    <div class="item item-2">
      <div class="unnafected">
        <h3 
          class="font-weight-light text-uppercase"
        >
          Área de Formación Básica Particular
        </h3>
      </div>
    </div>

    <!-- Item 3 -->
    <div class="item item-3">
      <div class="unnafected">
        <h3 
          class="font-weight-light text-uppercase"
        >
          Área de Formación Especializante
        </h3>
      </div>
    </div>

    <!-- Item 4 -->
    <div class="item item-4">
      <div class="unnafected">
        <h3 
          class="font-weight-light text-uppercase"
        >
          Área de Formación Optativa Abierta
        </h3>
      </div>
    </div>

    <!-- Item 5 -->
    <div class="item item-5">
      <div class="unnafected">
        <h3 
          class="font-weight-light text-uppercase"
        >
          Mapa Curricular
        </h3>
      </div>
    </div>
  </section>

  <!-- Fotos del CUCSH Belenes -->
  <section class="fotos">
    <div class="foto foto-1"></div>
    <div class="foto foto-2"></div>
    <div class="foto foto-3"></div>
    <div class="foto foto-4"></div>
  </section>

  <!-- Modals -->
  <!-- Formación básica común -->
  <!-- <div class="modal" id="modal">
    <div class="mod-dialog">
    <div class="header-row">
        <h2 class="font-weight-bold text-center">Área de Formación Básica</h2>
        <button></button>
      </div>
      <table>
        <thead>
          <tr>
            <th>UNIDAD DE APRENDIZAJE</th>
            <th>TIPO</th>
            <th>HORAS B.C.A.</th>
            <th>HORAS A.M.I.</th>
            <th>HORAS TOTALES</th>
            <th>CRÉDITOS</th>
            <th>PREREQUISITOS</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>Theories of International Relations and Global Politics</th>
            <td>C</td>
            <td>64</td>
            <td>64</td>
            <td>128</td>
            <td>8</td>
            <td>-</td>
          </tr>
          <tr>
            <th>Global Political Economy</th>
            <td>C</td>
            <td>64</td>
            <td>64</td>
            <td>96</td>
            <td>6</td>
            <td>-</td>
          </tr>
          <tr>
            <th>Global Governance</th>
            <td>C</td>
            <td>64</td>
            <td>64</td>
            <td>96</td>
            <td>6</td>
            <td>Theories of International Relations and Global Politics</td>
          </tr>
          <tr>
            <th>Global Politics and Society</th>
            <td>C</td>
            <td>64</td>
            <td>32</td>
            <td>96</td>
            <td>6</td>
            <td>-</td>
          </tr>
          <tr>
            <th>Research Design and Method I</th>
            <td>C</td>
            <td>64</td>
            <td>32</td>
            <td>128</td>
            <td>8</td>
            <td>-</td>
          </tr>
          <tr>
            <th>Research Design and Method II</th>
            <td>S</td>
            <td>32</td>
            <td>64</td>
            <td>96</td>
            <td>6</td>
            <td>Research Design and Method I</td>
          </tr>
          <tr>
            <th>Research Design and Method III</th>
            <td>T</td>
            <td>32</td>
            <td>64</td>
            <td>96</td>
            <td>6</td>
            <td>Research Design and Method II</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div> -->
  
  <!-- Formación básica particular -->
  <!-- <div class="modal" id="modal">
    <div class="mod-dialog"></div>
  </div> -->
  
  <!-- Formación especializante -->
  <!-- <div class="modal" id="modal">
    <div class="mod-dialog"></div>
  </div> -->
  
  <!-- Formación optativa abierta -->
  <!-- <div class="modal" id="modal">
    <div class="mod-dialog"></div>
  </div> -->
  
  <!-- Mapa curricular -->
  <!-- <div class="modal" id="modal">
    <div class="mod-dialog">
    </div>
  </div> -->

  <div class="modal" id="example-modal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-h2">
            Titulo del modal
          </h2>
          <button 
            class="modal-close" 
            data-dismiss="modal" 
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Beatae assumenda necessitatibus quibusdam pariatur qui debitis cum quasi, 
            quam aspernatur ratione nihil. Porro qui labore molestiae, 
            maiores laborum dicta eligendi quis.
          </p>
        </div>
      </div>
    </div>
  </div>
</main>
  
@endsection