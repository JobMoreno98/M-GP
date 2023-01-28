@extends ('layouts.template')
@section('content')



<!--Titulo-->
<header class="hero-wrap hero-wrap-2" style="background-image: url('images/requisitos_carrusel.jpg');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
			<h1 class="display-3 font-weight-bold text-uppercase"  style="color:#fff;">Requisitos</h1>
			</div>
		</div>
</header>
<!--Titulo-->


<!-- MODALES DE REQUISITOS -->
<div class="text-center mt-5 mb-3">
	<h2 class="display-4 font-weight-bold" style="color: #004777;">
		Requisitos
	</h2>
</div>

<div class="row pea-cards">
	<div 
		class="hover hover-2 text-white rounded col pea-card"
		style="background-image: url('images/peso.jpg');"
		data-toggle="modal" 
		data-target="#requisitos-1"
	>
		<div class="hover-overlay row">
			<h3 class="hover-2-title text-uppercase mb-0 font-weight-light text-white align-self-center"> 
				Duración y costos
			</h3>
		</div>
	</div>
	<div 
		class="hover hover-2 text-white rounded col pea-card"
		style="background-image: url('images/ingreso.jpg');" 
		data-toggle="modal" 
		data-target="#requisitos-2"
	>
		<div class="hover-overlay row">
			<h3 class="hover-2-title text-uppercase mb-0 font-weight-light text-white align-self-center">
				Requisitos de Admisión y Proceso de Ingreso
			</h3>
		</div>
	</div>
	<div 
		class="hover hover-2 text-white rounded col pea-card"
		style="background-image: url('images/graduation.jpg');" 
		data-toggle="modal" 
		data-target="#requisitos-3"
	>
		<div class="hover-overlay row">
			<h3 class="hover-2-title text-uppercase mb-0 font-weight-light text-white align-self-center">
				Requisitos de Titulación
			</h3>
		</div>
	</div>
</div>
<!-- MODALES DE REQUISITOS FIN-->


<!--DURACION Y COSTOS-->
<!--MODAL BODY-->
<div class="modal fade" id="requisitos-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content" style="background-color:#fff;">
			<div class="modal-header" style="background-color: #004777;">
				<h5 class="modal-title text-light" id="exampleModalLongTitle"><b>DURACIÓN Y COSTOS</b></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #ffffff;">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body p-2 text-justify" style="color: #000;">
				</p><b>Duración</b></p>


				<p><b>I.</b> La maestría consta de cuatro semestres, durante los cuales se cursará el Plan de
					Estudios.</p>
				<p><b>II.</b> A partir de la culminación del Plan de Estudios (24 meses), el o la estudiante tendrá
					un plazo
					de 12 meses
					para titularse de acuerdo con los Reglamentos de Posgrados de la Universidad de Guadalajara y de
					Conacyt (en
					caso de contar con beca).
				<p><b>III.</b> Durante el transcurso del cuarto semestre, el o la estudiante, si así lo decide,
					podrá
					realizar una
					estancia de investigación, previa autorización de la Junta Académica, en otra universidad
					nacional o fuera
					del
					país.</p>

				<p><b>Costos</b></p>
				<p><b>I.</b> El costo de la matrícula por semestre, será el que esté vigente para estudiantes
					del posgrado
					de la
					maestría, esto de acuerdo con el Centro de Ciencias Sociales y Humanidades (Cucsh).</p>
			</div>
		</div>
	</div>
</div>
<!--DURACION Y COSTOS FIN-->


<!--ADMISION-->
<!--MODAL BODY-->
<div class="modal fade" id="requisitos-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
		<div class="modal-content" style="background-color: #fff;">
			<div class="modal-header text-center" style="background-color: #004777;">
				<h5 class="modal-title text-light text-center" id="exampleModalLongTitle">
					<p class="text-center"><b class="text-center">Requisitos de Admisión y Trámites para Ingreso</b>
					</p>
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #ffffff;">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body p-2 text-justify" style="color: #000;">

				<p><b>REQUISITOS</b></p>
				<p><b>Convocatoria 2022-2024</b></p>
				<p><b>A. </b>Recepción de documentos:</p>
				<p>Fecha límite para la recepción de documentos es el <b>30 de abril del 2022.</b></p>
				<p><b>B. </b>Documentos<sup>1</sup>: </p>
				<ul style="list-style: decimal;" class="pl-4">
					<li>Copia del título de licenciatura o acta de titulación, preferentemente en las áreas de
						Ciencias Sociales
						y/o
						Económico Administrativas.</li>
					<li>Acreditar un promedio mínimo de 80 (ochenta) con certificado original o documento que sea
						equiparable de
						los
						estudios precedentes (con el plan de estudios cursado y calificaciones de cada una de las
						materias).</li>
					<li>Presentar constancia de Nivel <b>B2 de inglés</b>, no mayor a dos años:</li>

					<ul class="col-md-10 pl-8" style="list-style: none;">
						<li><b>* IELTS® (International English Language Testing System).</b></li>
						<li><b>* TOEFL® (Test of English as Foreign Language) IBT o ITP.</b></li>
						<li><b>* CAE® (Cambridge English: Advanced).</b></li>
					</ul>
					<li>Carta de exposición de motivos, en inglés, (600 palabras máximo) que explique las razones
						para
						cursar el
						programa:</p>
						<ul class="col-md-10" style="list-style: none;">
							<li>
								<p><b>* Personales.</b></p>
							</li>
							<li>
								<p><b>* Académicos.</b></p>
							</li>
							<li>
								<p><b>* Profesionales.</b></p>
							</li>
						</ul>
					<li>Currículum Vítae (no mayor a dos cuartillas) con documentos probatorios.</li>
					<li>Copia de Acta de nacimiento.</li>
					<li>Copia de la Cédula Profesional Federal (o trámite en curso).</li>
					<li>Copia del CURP.</li>
					<li>Copia de Identificación oficial (pasaporte para extranjeros).</li>
					<li>Dos cartas de recomendación académica y/o profesional (enviado por quien la escribe al
						correo de
						la maestría), que incluya:</li>
					<ul style="list-style: none;" class="col-md-12">
						<li><b>* Datos completos del postulante.</b></li>
						<li><b>* Datos completos de la persona que la elabora (Universidad o empresa en la que
								labora, teléfono y correo).</b></li>
						<li><b>* Motivos que lo hacen un postulante adecuado para la maestría.</b></li>
					</ul>
					<li>Certificado de buena salud.</li>
					<li>Proyecto de investigación:</li>
					<b>*</b> En un ensayo no mayor a 5 cuartillas (portada y referencias se excluyen del máximo) se
					expondrá, <b>en inglés</b>, un <b>tema tentativo</b> de investigación para tema de tesis. Deberá
					incluir <b>justificación, pertinencia y problemática a tratar; además de pregunta de
						investigación e hipótesis.</b>
				</ul>


				<p><b>PROCESO DE INGRESO</b></p>
				<b>A. </b>Evaluación curricular.
				<ul style="list-style: none;" class="col-md-12">
					<li><b>Se realizará del 20 al 24 de junio del 2022.</b></li>
					<li>A los candidatos que cumplan con los requisitos se les avisará para que continúen el proceso
						de
						admisión.</li>
				</ul>
				</p>
				<p><b>B. </b> Examen Ceneval EXANI III®</p>
				<ul style="list-style: none;" class="col-md-12">
					<li>Presentar el Examen Ceneval EXANI III® correspondiente, el cual se celebrará <b>de forma
							virtual el sábado 11 de junio. </b>
						Para estudiantes que su lengua nativa sea el inglés, deberán presentar el <b>Graduate Record
							Examination® (GRE)</b>
						(los puntajes mínimos serán determinados por la Junta Académica).</li>
				</ul>
				<p><b>C. </b> Entrevista en inglés con miembros del Núcleo Académico Básico (NAB) de la maestría.
				<ul style="list-style: none;" class="col-md-12">
					<li><b>Entrevista con dos miembros del NAB.</b></li>
					<li><b>Redacción de un texto breve sobre tema de actualidad por asignar (en inglés).</b>
					</li>
					<li><b>27 de junio al 1º. de julio de 2022</b></li>
				</ul>
				</p>
				<p><b>D. </b>Publicación de resultados (Coordinación GP&TPS).</p>
				<ul style="list-style: none;" class="col-md-12">
					<li><b>4 de julio de 2022</b></li>
				</ul>
				<p><b>E. </b>Curso propedéutico (aspirantes elegibles).</p>
				<ul style="list-style: none;" class="col-md-12">
					<li><b>5 al 13 de julio y 5 al 9 de agosto de 2022.</b></li>
				</ul>
				<p><b>F. </b>Periodo de entrega de documentación en Control Escolar.
				<ul style="list-style: none;" class="col-md-12">
					<li><b>Del lunes 23 de mayo al viernes 29 de julio de 2022.</b></li>
				</ul>
				<p><b>G. </b> Publicación de dictamen (Universidad de Guadalajara).</p>
				<ul style="list-style: none;" class="col-md-12">
					<li><b>8 de agosto de 2022</b></li>
				</ul>
				<p><b>H. </b> Reunión informativa</p>
				<ul style="list-style: none;" class="col-md-12">
					<li><b>10 de agosto de 2022 de forma virtual.</b></li>
				</ul>
				<p><b>I. </b>Inicio de cursos.</p>
				<ul style="list-style: none;" class="col-md-12">
					<li><b>11 de agosto de 2022</b></li>
				</ul>
				<div class="modal-footer">
					<small><sup>1</sup>No es necesario el apostillado de documentos oficiales para el proceso de
						selección, aunque será necesario en caso de ser admitido al posgrado.</small>
				</div>
			</div>
		</div>
	</div>
</div>
<!--ADMISION FIN-->

<!--TITULACION-->
<!--MODAL BODY -->
<div class="modal fade" id="requisitos-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content" style="background-color: #fff;">
			<div class="modal-header text-center" style="background-color: #004777;">
				<h5 class="modal-title text-light text-center" id="exampleModalLongTitle">
					<p class="text-center"><b class="text-center">Requisitos de Titulación</b>
					</p>
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #ffffff;">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body p-2 text-justify" style="color: #000;">

				<!-- cabecera del diálogo -->

				<!-- cuerpo del diálogo -->
				<div class="modal-body p-2">
					<p>Los requisitos para la obtención de grado son:</p>
					<p>Concluir el programa de la Maestría en Global Politics and Transpacific Studies (GP&TPS).</p>
					<p>Cubrir el total de créditos establecidos en el Plan de Estudios (100).</p>
					<p>Elaborar, presentar, defender y aprobar la tesis de grado, en inglés, producto de una
						investigación original con un mínimo de tres sinodales (director entre ellos).</p>
					<p>El trabajo se revisará con la herramienta Anti Plagio Turnitin®.</p>
					<p>Además, se presentarán los siguientes documentos que se entregarán a la Coordinación de
						Posgrados del Centro Universitario antes de la defensa de la tesis:</p>
					<ul style="list-style: decimal;" class="col-12 ml-4">
						<li><b>Carta de NO ADEUDO (Emitida por Control Escolar).</b></li>
						<li><b>Carta Compresión del idioma (Emitida por la Coordinación del programa).</b></li>
						<li><b>Copia del Título de licenciatura.</b></li>
						<li><b>Copia de la Cédula Profesional Federal.</b></li>
						<li><b>Kardex Certificado (Emitido por Control Escolar).</b></li>
						<li><b><i>Curriculum</i> breve</b></li>
						<li><b>Tesis y CD (5 juegos a entregar).</b></li>
						<li><b>Oficio para presentar examen (Emitido por la Coordinación del programa).</b></li>
						<li><b>Cartas de director(a) y lector(es) informando que la tesis se aprueba para su defensa
								(una copia de cada carta va en la versión impresa de la tesis)</b></li>
					</ul>
					<p>Cubrir los aranceles correspondientes.</p>
				</div>
				<!-- pie del diálogo -->
			</div>
		</div>
	</div>
</div>
<!--TITULACION FIN-->

<!--Titulo Galeria-->
<div class="text-center mt-5 mb-3">
	<h2 class="display-4 font-weight-bold" style="color: #004777;">
		Galería
	</h2>
</div> 

<!--Inicio Galeria-->
<!--GALERIA DE IMAGENES-->
<section class="ftco-gallery">
	<div class="container-wrap">
		<div class="row no-gutters">
			<div class="col-md-3 ftco-animate">
				<a href="images/requisitos1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/requisitos1.jpg);">
					<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-camera"></span>
					</div>
				</a>
			</div>
			<div class="col-md-3 ftco-animate">
				<a href="images/requisitos2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/requisitos2.jpg);">
					<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-camera"></span>
					</div>
				</a>
			</div>
			<div class="col-md-3 ftco-animate">
				<a href="images/requisitos3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/requisitos3.jpg);">
					<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-camera"></span>
					</div>
				</a>
			</div>
			<div class="col-md-3 ftco-animate">
				<a href="images/requisitos4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/requisitos4.jpg);">
					<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-camera"></span>
					</div>
				</a>
			</div>
		</div>
	</div>
	</div>
</section>
<!--GALERIA DE IMAGENES FIN-->


@endsection