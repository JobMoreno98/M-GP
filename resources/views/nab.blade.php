<!--Plantila con NavBar, Footer, Css y Js-->
@extends('layouts.template')
@section('content')
<!--Plantila con NavBar, Footer, Css y Js-->


<!--Carrusel Profesores-->
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/teacher_carrusel.jpg');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="display-3 font-weight-bold text-uppercase" style="color:#fff;">Núcleo Académico Básico</h1>
			</div>
		</div>
	</div>
</section>
<!--Carrusel Profesores-->


<!--Modales Profesores-->
<section class="ftco-section" style="color: #000;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-lg-3 ftco-animate" data-toggle="modal" data-target="#roberto_hernandez">
				<div class="staff">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(images/roberto.jpg);">
						</div>
					</div>
					<div class="text pt-3 text-center">
						<h3>Roberto Hernández, Ph.D.</h3>
						<span class="position mb-2">China</span>
						<div class="faded">
							<p>Historia de China, Economía, Procesos de Integración en Asia Pacífico y Relaciones
								Internacionales.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="roberto_hernandez">
				<div class="modal-dialog modal-xl modal-dialog-centered">
					<div class="modal-content">
						<!-- cabecera del diálogo -->

						<div class="modal-header" style="background-color:#048A81;">
							<h4 class="modal-title" style="color: #ffffff;"><b>Roberto Hernández, Ph.D.</b></h4>
							<button type="button" class="close text-white" data-dismiss="modal">X</button>
						</div>

						<!-- cuerpo del diálogo -->
						<div class="modal-body text-justify" style="background-color:#F3CDB6;">

							<div class="row pt-2">
								<div class="flex-profesores">
									<div class="ftco-animate col-5">
										<span class="gallery img align-items-center" style="background-image: url(images/roberto.jpg); height: 340px; width: 325px;"></span>
									</div>

									<li style="color:transparent;"></li>
									<div class="row">
										<div class="col-9">
											<p><b>Roberto Hernández Hernández</b></p>

											<p><b>Doctor en Ciencias Sociales</b></p>
											<hr>
											<b><i class="ion-ios-mail" style="font-size: 25px;"></i><a href="mailto:roberto.hhernandez@academicos.udg.mx" target="_blank" style="color:#048A81;">
													roberto.hhernandez@academicos.udg.mx</a></b>
											<hr>
											<p><b>Jefe del Departamento de Estudios Internacionales</b></p>
											<p><b>Profesor Investigador Titular “C”</b></p>
											<p><b>SNI Nivel I</b></p>
											<p><b>Perfil Promep</b></p>

										</div>
									</div>
								</div>

								<div class="col pt-3">
									<ul class="nav nav-tabs text-center background-pills" id="myTab" role="tablist">
										<li class="nav-item col-6 nav-link-pills" role="presentation">
											<a class="nav-link active a-pills" id="home-tab" data-toggle="tab" href="#biografia" role="tab" aria-controls="home" aria-selected="true"><b>Biografía y Educación</b></a>
										</li>
										<li class=" nav-item col-6" role="presentation">
											<a class="nav-link nav-link-pills a-pills" id="profile-tab" data-toggle="tab" href="#produccion" role="tab" aria-controls="profile" aria-selected="false"><b>Líneas de
													Investigación</b></a>
										</li>
										<li class="nav-item col-6" role="presentation">
											<a class="nav-link  a-pills" id="contact-tab" data-toggle="tab" href="#proyecto" role="tab" aria-controls="contact" aria-selected="false"><b>Proyectos Actuales</b></a>
										</li>
										<li class="nav-item col-6" role="presentation">
											<a class="nav-link a-pills" id="contact-tab" data-toggle="tab" href="#contacto" role="tab" aria-controls="contact" aria-selected="false"><b>Publicaciones</b></a>
										</li>
									</ul>
									<div class="tab-content text-dark pt-3" id="myTabContent">

										<div class="tab-pane fade show active" id="biografia" role="tabpanel" aria-labelledby="home-tab">

											<p>Durante 30 años ha sido profesor-investigador del Departamento de
												Estudios del Pacífico y del Departamento de Estudios Internacionales
												de la Universidad de Guadalajara. Cursó la Licenciatura en Economía
												en la Universidad de Guadalajara, Maestría en Estudios de Asia y
												África en El Colegio de México; posgrado en Historia Moderna y
												Contemporánea de China en la Universidad de Beijing y Doctorado en
												Ciencias Sociales por la Universidad de Guadalajara. Diplomado sobre
												Relaciones Internacionales de México en el Instituto Matías Romero
												de Estudios Diplomáticos.
												Pertenece al Sistema Nacional de Investigadores. Ha fungido como
												Jefe del Departamento de Estudios del Pacífico y del Departamento de
												Estudios Internacionales de la UdeG. Pertenece a la Junta Académica
												de la Maestría en Relaciones Internacionales de los Gobiernos y
												Actores Locales y al Consejo Editorial de la Revista de México y la
												Cuenca del Pacífico. Sus áreas de interés académico son Historia,
												Economía y Relaciones Internacionales del Este de Asia con énfasis
												en China. Su docencia se centra en materias como Teoría de las
												Relaciones Internacionales, Gobierno y Política Exterior en Asia,
												Procesos de Integración Regional y Formación de Bloques
												Internacionales, Historia, Economía y Relaciones Internacionales de
												China y Seminario de Titulación.
											</p>
										</div>
										<div class="tab-pane fade" id="produccion" role="tabpanel" aria-labelledby="profile-tab">

											<p>
												<li>El resurgimiento económico de China y su nuevo papel de gran
													potencia</li>
											</p>
											<p>
												<li>Seguridad Internacional de China</li>
											</p>
											<p>
												<li>La Política de Cooperación Internacional de China</li>
											</p>
											<p>
												<li>Procesos de integración en el Este de Asia</li>
											</p>
										</div>
										<div class="tab-pane fade" id="proyecto" role="tabpanel" aria-labelledby="contact-tab">

											<p>
												<li>El reposicionamiento de China como potencia económica y militar
													de alcance global.</li>
											</p>
											<p>
												<li>La vía China para evadir la Trampa del Ingreso Medio; una
													perspectiva latinoamericana</li>
											</p>
										</div>
										<div class="tab-pane fade" id="contacto" role="tabpanel" aria-labelledby="contact-tab">

											<p>Hernández H. Roberto (2020) “China y su política de seguridad
												nacional: ¿Hacia una nueva carrera armamentistas?”. En Alberto
												Lozano Vázquez y Abelardo Rodríguez Sumano (Coordinadores),
												Seguridad y Asuntos Internacionales. Teorías, Dimensiones,
												Interdisciplinas, Las Américas, Amenazas, Instituciones, Regiones,
												Política Mundial. Mexico, Siglo XXI Editores, Pags. 956-85. ISBN
												978-67-03-1094-2.
											</p>
											<p>Hernández H. Roberto (2020), “La estrategia comercial de China en el
												siglo XXI y sus implicaciones para la relación con Estados Unidos”.
												En José Ignacio Martínez Cortes (Coord.) América Latina y el Caribe
												y China. Relaciones políticas e internacionales, México, Unión de
												Universidades de América Latina y el Caribe (UDUAL). 1ª edición.
												Pags. 87-110. ISBN: 978-607-8066-51d-3
											</p>
											<p>Hernández H. Roberto (2019), Retos de la Asociación Económica
												Regional comprehensiva (RECEP). En Luz Alicia Jiménez Portugal y
												Antonio Ruiz Porras (Coordinadores), Avances, retos y perspectivas
												de los procesos de integración en el siglo XXI: Análisis económicos
												e institucionales. México, Universidad de Guadalajara. 1º edición
												2019.ISBN: 978-607-547-507-3 (versiòn impresa) 978-607-547-631-5
												(versión digital)
											</p>
											<p>Capitulo de libro: Hernandez H. Roberto (2019). “The China’s
												International Cooperation, a Pathway to Escape the Meddle-Income
												Trap in Latin America?”, Fudan-Latin America University Consortium,
												China and Latin America. Parth to Overcoming the Middle-income Trap.
												Shanghai, Fudan University. pp. 170-188.</p>
											<p>Hernández, H. Roberto (2017). “La política de cooperación
												internacional de China; una perspectiva global” en Martínez Cortés
												José Ignacio (Coord.). América Latina y el Caribe y China.
												Relaciones Políticas e Internacionales, 2017. México, UDUAL, UNAM
												pp. 219-240.</p>
											<p>Hernández H. Roberto (2020), “La Relación China-Estados Unidos en el
												contexto de la COVID-19”. Revista México y la Cuenca del Pacífico,
												Vol. 9 Núm. 27/ septiembre-diciembre de
												2020.DOI:10.32870/mycp.v9i27.710 Pags. ISSN: 2007-5308 (versión
												digital)</p>
											<p>Hernández H. Roberto (2019) “El papel de la cooperación internacional
												en la estrategia de gran potencia de China”. Foreign Affairs
												Latinoamérica. México Pags.</p>
											<p>Hernández H. Roberto (2018). “Procesos y escenarios geoeconómicos en
												Asia: Implicaciones para África y América Latina”. México y la
												Cuenca del Pacífico, Vol. 7, Núm. 20, mayo-agosto 2018, pp. 8-19.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- pie del diálogo -->
					</div>
				</div>
			</div>



			<div class="col-md-6 col-lg-3 ftco-animate" data-toggle="modal" data-target="#genevieve_marchini">
				<div class="staff">
					<div class="img-wrap d-flex align-items-center">
						<div class="img align-self-stretch" style="background-image: url(images/genevieve_marchini.jpg);">
						</div>
					</div>
					<div class="text pt-3 text-center">
						<h3>Geneviève Marchini, Ph.D.</h3>
						<span class="position mb-2">China</span>
						<div class="faded">
							<p>Relaciones Económicas Alianza del Pacífico-Asia Oriental, Economías de Asia Oriental
								y América Latina: Cooperación Financiera e Integración en el Sistema Financiero
								Internacional.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="genevieve_marchini">
				<div class="modal-dialog modal-xl modal-dialog-centered">

					<div class="modal-content">
						<!-- cabecera del diálogo -->
						<div class="modal-header" style="background-color:#048A81;">
							<h4 class="modal-title" style="color: #ffffff;"><b>Geneviève Marchini, Ph.D.</b></h4>
							<button type="button" class="close text-white" data-dismiss="modal">X</button>
						</div>
						<!-- cuerpo del diálogo -->
						<div class="modal-body text-justify" style="background-color:#F3CDB6;">

							<div class="row pt-2">

								<div class="flex-profesores">
									<div class="ftco-animate col-5">
										<span class="gallery img align-items-center" style="background-image: url(images/genevieve_marchini.jpg); height: 340px; width: 325px;"></span>
									</div>

									<li style="color:transparent;"></li>
									<div class="row">
										<div class="col-9">
											<p><b>Geneviève Marchini</b></p>

											<p><b>Doctora en Ciencias Económicass</b></p>
											<hr>
											<b><i class="ion-ios-mail" style="font-size: 25px;"></i>&nbsp;<a href="mailto:genevieve.marchini@academicos.udg.mx" target="_blank" style="color:#048A81;">
													genevieve.marchini@academicos.udg.mx</a></b>
											<hr>
											<p><b>Jefe del Departamento de Estudios Internacionales</b></p>
											<p><b>Profesor Investigador Titular “C”</b></p>
											<p><b>SNI Nivel I</b></p>
											<p><b>Perfil Promep</b></p>

										</div>
									</div>
								</div>
								<div class="col pt-3">
									<ul class="nav nav-tabs text-center background-pills" id="myTab" role="tablist">
										<li class="nav-item col-6 nav-link-pills" role="presentation">
											<a class="nav-link active a-pills" id="home-tab" data-toggle="tab" href="#biografia1" role="tab" aria-controls="home" aria-selected="true""><b>Biografía y Educación</b></a>
											</li>
											<li class=" nav-item col-6" role="presentation">
												<a class="nav-link nav-link-pills a-pills" id="profile-tab" data-toggle="tab" href="#produccion1" role="tab" aria-controls="profile" aria-selected="false"><b>Líneas de
														Investigación</b></a>
										</li>
										<li class="nav-item col-6" role="presentation">
											<a class="nav-link  a-pills" id="contact-tab" data-toggle="tab" href="#proyecto1" role="tab" aria-controls="contact" aria-selected="false"><b>Proyectos Actuales</b></a>
										</li>
										<li class="nav-item col-6" role="presentation">
											<a class="nav-link a-pills" id="contact-tab" data-toggle="tab" href="#contacto1" role="tab" aria-controls="contact" aria-selected="false"><b>Publicaciones</b></a>
										</li>
									</ul>
									<div class="tab-content text-dark pt-3" id="myTabContent">
										<div class="tab-pane fade show active" id="biografia1" role="tabpanel" aria-labelledby="home-tab">

											<p>Doctora en Ciencias Económicas (Universidad de Paris XIII). Magister
												en Economía (Pontificia Universidad Católica del Perú).
												Profesora-investigadora titular, Departamento de Estudios del
												Pacífico, Universidad de Guadalajara, e Investigadora nacional
												(SNI). Autora de tres libros, capítulos de libros y artículos
												arbitrados sobre crecimiento económico y desarrollo financiero en
												Asia, Oceanía y América Latina, Cooperación financiera en Asia y
												América Latina, experiencias de desarrollo en Asia (Corea del Sur,
												China) y relaciones económicas entre la Alianza del Pacífico y Asia
												del Este.
												Catedrática de los cursos de Sistema Financiero Internacional y
												Mercados Financieros Internacionales en la Licenciatura en
												Relaciones Internacionales, de Global Political Economy en la
												Maestría en Global Politics & Transpacific Studies, del Seminario de
												Economía Internacional y Nuevos Modelos de Desarrollo del Doctorado
												en Ciencia Política del CUCSH. Directora de Tesis en los niveles de
												Licenciatura, Maestría y Doctorado.</p>
										</div>
										<div class="tab-pane fade" id="produccion1" role="tabpanel" aria-labelledby="profile-tab">

											<p>
												<li>Relaciones económicas América Latina-Asia del Este</li>
											</p>
											<p>
												<li>Desarrollo económico y financiero en América Latina y Asia del
													Este</li>
											</p>

										</div>
										<div class="tab-pane fade" id="proyecto1" role="tabpanel" aria-labelledby="contact-tab">

											<p>
												<li>Relaciones económicas entre la Alianza del Pacífico y China,
													Corea del Sur y Japón</li>
											</p>
											<p>
												<li>La Fintech en China</li>
											</p>
											<p>
												<li>Criptomonedas y regulación pública en China, Corea del Sur y
													Japón</li>
											</p>
										</div>
										<div class="tab-pane fade" id="contacto1" role="tabpanel" aria-labelledby="contact-tab">


											<p>La Alianza del Pacífico a ocho años de su creación. Balance
												crítico y perspectivas. Anuario Latinoamericano Ciencias Políticas
												y Relaciones Internacionales. vol. 7, 2019. pp. 75–109. ISSN:
												2392-0343, e-ISSN: 2449-8483.
												https://journals.umcs.pl/al/article/view/10214/7143
											</p>
											<p>Las relaciones económicas de la Alianza del Pacífico con Japón:
												especificidades y perspectivas, Contextualizaciones
												Latinoamericanas, Año 11, No. 22, Enero-Junio. pp. 140-166. ISSN:
												2007-2120,
												http://contexlatin.cucsh.udg.mx/index.php/CL/article/view/7405/6533
											</p>
											<p>La economía de la República de Corea. Fortalezas y retos en un
												contexto internacional incierto. en López, Nayelli (coord.).
												Península coreana: estrategias, reestructuración e inserción en el
												mundo global, México. UNAM. 2020, pp. 75-111. ISBN
												978-607-30-4117-1.</p>
											<p>La Alianza del Pacífico y Asia del Este: relaciones económicas,
												alcances del comercio intraindustrial y perspectivas de mayores
												encadenamientos productivos, en Ortiz Morales Catherine & Edgar
												Vieira Posada (Ed.) Nuevas propuestas de integración regional:
												tendencias y retos de transformación. Bogotá, Colombia: Universidad
												Cooperativa de Colombia. 2019. pp. 45-93. ISBN 978-958-760-201-2.
											</p>
											<p>Integración y desarrollo financiero en la Alianza del Pacifico. en
												Calva, José Luis (coord). La globalización neo-liberal en crisis.
												México 2018-2024 Nueva estrategia de desarrollo. vol. 1, México:
												Juan Pablos Editor S.A., Consejo Nacional de Universitarios y
												Universidad de Guadalajara. 2018. ISBN 978-607-711-475-8.</p>
											<p>Inversiones y préstamos de Asia del Este hacia la Alianza del
												Pacífico: balance y perspectivas. en Girón, Alicia & Eugenia Correa
												(coord.). Financiarización y ciclo económico entre Asia y África,
												México: UNAM. 2018. pp. 23-54. ISBN: 978-607-30-0936-2.</p>
											<p>Las relaciones económicas entre Corea del Sur y la Alianza del
												Pacífico: ¿Hacia una profundización de los lazos productivos?. en
												León-Manríquez, José Luis (coord.), Corea, ayer y hoy Aportaciones
												latinoamericanas, México: Universidad Autónoma Metropolitana, Unidad
												Xochimilco-Korea Foundation. 2017. pág. 425-446. ISBN:
												978-970-31-0929-6
											</p>
											<p>Alianza del Pacífico y el futuro de sus relaciones con Corea, Japón y
												China”, en Girón, Alicia y Eugenia Correa (coord.), Reorganización
												financiera en Asia y América Latina en el periodo de postcrisis".
												México: PUEAA-UNAM. 2017. pp. 365-398. ISBN: 978-607-02-9393-3</p>
											<p>La Alianza del Pacífico y China: ¿hacia una relación comercial más
												diversificada?. en Dussel Peters, Enrique (coord.), América Latina y
												China - Economía, comercio e inversión 2017, México: Unión de
												Universidades de América Latina, 2017. pp. 279-298. ISBN:
												978-607-8066-28-5.</p>
											<p>La Alianza del Pacífico y sus relaciones con Asia del Este. en Buzo
												de la Peña, Ricardo & Víctor Manuel Cuevas Ahumada (coord..) El
												incierto panorama de la economía mundial, México: Universidad
												Autónoma Metropolitana Unidad Azcapotzalco. 2017. pp. 337-385.
												ISBN:978-607-28-1050-1.</p>
											<p>Diagnóstico y potencialidad de la integración económica en la
												Alianza del Pacífico. en Buzo de la Peña, Ricardo Marcos, Victor
												Manuel Cuevas Ahumada & María de la Paz Guzmán Plata (coord.).
												Nuevos Enfoques en el Análisis de la Economía Mundial. México:
												Universidad Autónoma Metropolitana Unidad Azcapotzalco, 2017. pp.
												217-255. ISBN 978-607-28-1121-8.</p>
											<p>Crecimiento económico y desarrollo financiero en Asia-Pacífico, Vol.
												1, “La industrialización de Asia del Este, Japón, Corea del Sur,
												Hong Kong y Singapur”. México: Universidad de Guadalajara. 2012.
												ISBN 978-607-450-491-0.</p>
											<p>Crecimiento económico y desarrollo financiero en Asia-Pacífico, Vol.
												2, “Las economías primario-exportadoras de Oceanía y América Latina,
												Australia, Nueva Zelanda”, México: Universidad de Guadalajara.
												2012.ISBN 978-607-450-628-0.</p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- pie del diálogo -->
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate" data-toggle="modal" data-target="#bertha_cuevas">
				<div class="staff">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(images/bertha_cuevas.jpg);">
						</div>
					</div>
					<div class="text pt-3 text-center">
						<h3>Ana Bertha Cuevas, Ph.D.</h3>
						<span class="position mb-2">China</span>
						<div class="faded">
							<p>Análisis comparativo de las políticas ambientales en la región de Asia-Pacífico y el
								comportamiento de las economías de Asia-Pacífico frente al cambio climático.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="bertha_cuevas">
				<div class="modal-dialog modal-xl modal-dialog-centered">

					<div class="modal-content">
						<!-- cabecera del diálogo -->
						<div class="modal-header" style="background-color:#048A81;">
							<h4 class="modal-title" style="color: #ffffff;"><b>Ana Bertha Cuevas, Ph.D.</b></h4>
							<button type="button" class="close text-white" data-dismiss="modal">X</button>
						</div>
						<!-- cuerpo del diálogo -->
						<div class="modal-body text-justify" style="background-color:#F3CDB6;">


							<div class="row pt-2">

								<div class="flex-profesores">
									<div class="ftco-animate col-5">
										<span class="gallery img align-items-center" style="background-image: url(images/bertha_cuevas.jpg); height: 340px; width: 325px;"></span>
									</div>

									<li style="color:transparent;"></li>
									<div class="row">
										<div class="col-9">
											<p><b>Ana Bertha Cuevas Tello</b></p>

											<p><b>Doctora en Relaciones Transpacíficas</b></p>
											<hr>
											<b><i class="ion-ios-mail" style="font-size: 25px;"></i>&nbsp;<a href="mailto:ana.cuevas@academicos.udg.mx" target="_blank" style="color:#048A81;">
													ana.cuevas@academicos.udg.mx</a></b>
											<hr>
											<p><b>Miembro fundador del grupo interdisciplinario<br> e interinstitucional China Global.</b></p>
											<p><b>Profesora investigadora Titular “A”</b></p>
											<p><b>SNI Nivel I</b></p>
											<p><b>Perfil Promep</b></p>

										</div>
									</div>
								</div>

								<div class="col pt-3">
									<ul class="nav nav-tabs text-center background-pills" id="myTab" role="tablist">
										<li class="nav-item col-6 nav-link-pills" role="presentation">
											<a class="nav-link active a-pills" id="home-tab" data-toggle="tab" href="#biografia2" role="tab" aria-controls="home" aria-selected="true""><b>Biografía y Educación</b></a>
											</li>
											<li class=" nav-item col-6" role="presentation">
												<a class="nav-link nav-link-pills a-pills" id="profile-tab" data-toggle="tab" href="#produccion2" role="tab" aria-controls="profile" aria-selected="false"><b>Líneas de
														Investigación</b></a>
										</li>
										<li class="nav-item col-6" role="presentation">
											<a class="nav-link  a-pills" id="contact-tab" data-toggle="tab" href="#proyecto2" role="tab" aria-controls="contact" aria-selected="false"><b>Proyectos Actuales</b></a>
										</li>
										<li class="nav-item col-6" role="presentation">
											<a class="nav-link a-pills" id="contact-tab" data-toggle="tab" href="#contacto2" role="tab" aria-controls="contact" aria-selected="false"><b>Publicaciones</b></a>
										</li>
									</ul>
									<div class="tab-content text-dark pt-3" id="myTabContent">
										<div class="tab-pane fade show active" id="biografia2" role="tabpanel" aria-labelledby="home-tab">
											<p>Licenciada en estudios internacionales por la Universidad de
												Guadalajara. Maestría en Ciencias Sociales con especialidad en
												Relaciones Internacionales y Estudios del Pacífico, por la
												Universidad de Guadalajara. Doctorado en Relaciones Transpacíficas
												por la Universidad de Colima. Especialidad en economía circular por
												la Universidad de Berkeley. Perfil deseable PRODEP desde 2008.
												Miembro del Sistema Nacional de Investigadores (SNI) nivel I, desde
												2015. Pertenece al cuerpo académico “Integración, política y medio
												ambiente en Asia Pacífico”. Miembro del comité ejecutivo de la
												Revista México y la Cuenca del Pacífico. Miembro consultivo del
												equipo One Health México.</p>
										</div>
										<div class="tab-pane fade" id="produccion2" role="tabpanel" aria-labelledby="profile-tab">
											<p>
											<ul>La política internacional del cambio climático y los esfuerzos
												nacionales en Asia Pacífico</ul>
											</p>
											<p>
											<ul></ul>Análisis comparativo de las políticas ambientales de las
											economías del APEC.
											</p>
										</div>
										<div class="tab-pane fade" id="proyecto2" role="tabpanel" aria-labelledby="contact-tab">
											<p>
											<ul>Pertenece al cuerpo académico “Integración, política y medio
												ambiente en Asia Pacífico”.</ul>
											</p>
											<p>
											<ul>PACMETRO</ul>
											</p>
											<p>
											<ul>Grupo interdisciplinario e interinstitucional China GlobaL</ul>
											</p>
											<p>
											<ul>ONE HEALTH MX</ul>
											</p>
										</div>
										<div class="tab-pane fade" id="contacto2" role="tabpanel" aria-labelledby="contact-tab">
											<p>Cuevas Tello, Ana B. (2016) Estrategias y acciones contra el cambio
												climático en las principales economías del APEC. México: Universidad
												de Guadalajara. ISBN 978-607-742-639-4</p>
											<p>Cuevas Tello, Ana B. (2017). México ante el riesgo del cambio
												climático: vulnerabilidad y retos. Iberoamericana, XXXIX(1), 43-64.
												Universidad de Sofía, Japón. ISSN 23102799</p>
											<p>Cuevas Tello, Ana B., Bravo Vergara, José J. y Rodríguez Alegría,
												Agustina (2017). La institucionalización del medio ambiente en la
												agenda internacional y el nacimiento del mercado de bienes y
												servicios ambientales: El caso de algunas economías de Asia
												Pacífico. Portes, 11(22), 7-30. ISSN 18706800</p>
											<p>Cuevas Tello, Ana B. (2018). La interrelación de la educación y el
												empleo en la sociedad actual, el caso de México: 2005-2014. En
												Panorama de la educación pública en México (políticas educativas
												contemporáneas) (págs. 141-161). Universidad de Guadalajara. ISBN
												978-607-547-031-</p>
											<p>Cuevas Tello, Ana B. (2018). La postura de las economías del APEC en
												su compromiso de mantener el desarrollo a través de la ciencia, la
												tecnología y la innovación. En A. Ivanova Boncheva, L. F. Beltrán
												Morales y J. E. Rangel Delgado, Ciencia, Tecnología e Innovación
												para el Desarrollo. Experiencia de la región Asia Pacífico y México
												(págs. 59-76). Universidad Autónoma de Baja California Sur, Consejo
												Nacional de Ciencia y Tecnología, Centro de Investigaciones
												Biológicas del Noroeste Universidad de Colima, Consorcio Mexicano de
												Centros de Estudios APEC y Pacific Circle Consortium. ISBN:
												978-607-7777-97-7</p>
											<p>Cuevas Tello, Ana B. (2018). La vulnerabilidad de México frente al
												cambio climático y la respuesta nacional. En M. G. Moreno González y
												M. G. López Pedroza, Balance y prospectivas sociopolíticas de México
												para el sexenio 2018-2024 (págs. 469-489). Universidad de
												Guadalajara. ISBN 9786075473901</p>
											<p>Cuevas Tello, Ana B. (2018). Asia Pacífico frente al Acuerdo de París
												contra el cambio climático: geopolítica y cooperación. Estudios de
												Asia y África, 53(1), 151-188. ISSN 2448654X</p>
											<p>Cuevas Tello, Ana B. (2018). Potencial liderazgo chino en la lucha
												global contra el cambio climático en el siglo XXI. México y la
												Cuenca del Pacífico, 7(21), 95-120. ISSN 20075308</p>
											<p>Cuevas Tello, Ana B. y Bravo Vergara, José J. (2018). Riesgo y
												vulnerabilidad, las dos caras del cambio climático: principales
												fallos en el cumplimiento de los acuerdos ambientales. En P. Ortega
												Gómez, Z. T. Infante Jimenez y C. Ortiz Paniagua, Transferencia del
												conocimiento y sistemas de Innovación para el desarrollo sustentable
												(págs. 135-149). Cenid Editorial. ISBN 9786078435586</p>
											<p>Cuevas Tello, Ana B. y Preciado Caballero, Nora E. (2018). México
												ante los múltiples esfuerzos internacionales para frenar el cambio
												climático. En R. Rosales Ortega, A. Mercado Celis, A. Sánchez
												Almanza, D. Amparo Tello y C. Venegas Herrera, Teoría, impactos
												externos y políticas públicas para el desarrollo regional (págs.
												79-100). UNAM, AMECIDER. ISBN 9786070299988</p>
											<p>Cuevas Tello, Ana B. y Ivanova Boncheva, Antonina (2019). Cómo las
												políticas de mitigación del mecanismo de cooperación económica de
												Asia-Pacífico (APEC) contribuyen a alcanzar la meta de 1.5ºC. En J.
												C. Rueda Abad, ¿Aún estamos a tiempo para el 1.5oC? (págs. 35-50).
												UNAM. ISBN 978-607-30-20992</p>
											<p>Cuevas Tello, Ana B. (2020). Desafíos mundiales sobre el cambio
												climático y la oportunidad de China para liderar con éxito el
												acuerdo de París. En A. F. Torres García, Divergencias en el
												desarrollo económico de México y China (págs. 213-246). Universidad
												Autónoma de Baja California Sur y Universidad Veracruzana. ISBN:
												978-607-8654-22-2</p>
											<p>Cuevas Tello, Ana B. y Ivanova Boncheva, Antonina (2020). Agenda
												ambiental y climática en el APEC a la luz del desarrollo
												sustentable. En C. Uscanga y J. J. Ramírez, El Foro de Cooperación
												Económica de Asia Pacífico apec: tres décadas de trayectoria y
												escenarios para el futuro (págs. 223-246). Universidad Nacional
												Autónoma de México (UNAM). ISBN 978-607-30-3429-6</p>
											<p>Cuevas Tello, Ana B. (2021). La relación de la pandemia por COVID-19
												y el cambio climático: la experiencia de China. Sociedad y ambiente
												(24), 1-26. ISSN 20076576</p>
											<p>Cuevas Tello, Ana B. (2021). Evolución del Análisis del Medio
												Ambiente y los Recursos Naturales en las Relaciones Internacionales:
												El Antes y Después de la Problemática Ambiental Actual. En A.
												Villarruel Mora y D. Villarruel Reynoso, Tendencias, Actores y
												Procesos en el Estudio de las Relaciones Internacionales (págs.
												83-111). Universidad de Guadalajara. ISBN: 978-607-571-108-9</p>
											<p>Cuevas Tello, Ana B. (2021) Postura del APEC ante la problemática y
												los retos del Cambio Climático. En A. Girón, A. Ivanova y A. Zamora.
												México en APEC: Agenda en tiempos de pandemia (págs. 219-241).
												Secretaría de Economía. ISBN: 978-84-685-6381-7</p>
										</div>
									</div>

								</div>
							</div>
						</div>

						<!-- pie del diálogo -->
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate" data-toggle="modal" data-target="#karla_padilla">
				<div class="staff">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(images/karla_padilla.jpg);">
						</div>
					</div>
					<div class="text pt-3 text-center">
						<h3>Karla Padilla, Ph.D.</h3>
						<span class="position mb-2">China-Corea del Sur</span>
						<div class="faded">
							<p>Relaciones México-Corea del Sur, Relaciones Transpacíficas, Corporaciones y Grupos
								Empresariales, Diplomacia Corporativa y Enseñanza de las Relaciones Internacionales
								en México.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="karla_padilla">
				<div class="modal-dialog modal-xl modal-dialog-centered">

					<div class="modal-content">
						<!-- cabecera del diálogo -->
						<div class="modal-header" style="background-color:#048A81;">
							<h4 class="modal-title" style="color: #ffffff;"><b>Karla Padilla, Ph.D.</b></h4>
							<button type="button" class="close text-white" data-dismiss="modal">X</button>
						</div>
						<!-- cuerpo del diálogo -->
						<div class="modal-body text-justify" style="background-color:#F3CDB6;">
							<div class="modal-content">
								<!-- cabecera del diálogo -->
								<!-- cuerpo del diálogo -->
								<div class="modal-body text-justify" style="background-color:#F3CDB6;">

									<div class="row pt-2">

										<div class="flex-profesores">
											<div class="ftco-animate col-5">
												<span class="gallery img align-items-center" style="background-image: url(images/karla_padilla.jpg); height: 340px; width: 325px;"></span>
											</div>

											<li style="color:transparent;"></li>
											<div class="row">
												<div class="col-9">


													<p><b>Doctora en Relaciones Transpacíficas</b></p>
													<hr>
													<b><i class="ion-ios-mail" style="font-size: 25px;"></i><a href="mailto:jose.bvergara@academicos.udg.mx" target="_blank" style="color:#048A81;">
															karla.padilla@academicos.udg.mx</a></b>
													<hr>
													<p><b>Secretaría Académica de CULagos</b></p>
													<p><b>Coordinadora del e-School Program <br>
															de la Fundación Corea para la UdeG. </b></p>
													<p><b>Secretaria de Vinculación de AMEI, A.C</b></p>
													<p><b>Profesora investigadora asociada A</b></p>

												</div>
											</div>
										</div>

										<div class="col pt-3">
											<ul class="nav nav-tabs text-center background-pills" id="myTab" role="tablist">
												<li class="nav-item col-6 nav-link-pills" role="presentation">
													<a class="nav-link active a-pills" id="home-tab" data-toggle="tab" href="#biografia13" role="tab" aria-controls="home" aria-selected="true""><b>Biografía y Educación</b></a>
										</li>
										<li class=" nav-item col-6" role="presentation">
														<a class="nav-link nav-link-pills a-pills" id="profile-tab" data-toggle="tab" href="#produccion13" role="tab" aria-controls="profile" aria-selected="false"><b>Líneas de
																Investigación</b></a>
												</li>
												<li class="nav-item col-6" role="presentation">
													<a class="nav-link  a-pills" id="contact-tab" data-toggle="tab" href="#proyecto13" role="tab" aria-controls="contact" aria-selected="false"><b>Proyectos Actuales</b></a>
												</li>
												<li class="nav-item col-6" role="presentation">
													<a class="nav-link a-pills" id="contact-tab" data-toggle="tab" href="#contacto13" role="tab" aria-controls="contact" aria-selected="false"><b>Publicaciones</b></a>
												</li>
											</ul>
											<div class="tab-content text-dark pt-3" id="myTabContent">
												<div class="tab-pane fade show active" id="biografia13" role="tabpanel" aria-labelledby="home-tab">
													<p>Es Doctora en Relaciones Transpacíficas por la Universidad de Colima (2015-2019, Maestra en Ciencias Sociales con especialidad en Relaciones Internacionales y Estudios del Pacífico por la Universidad de Guadalajara (2004-2006) y Licenciada en Estudios Internacionales (1996-2000). Ha tomado cursos de especialización y posgrado en FLACSO sede Académica Argentina (2004), Universidad de Guadalajara (2004) y la Universidad Nacional de Seúl (2006), Corea del Sur.
													</p>
													<p>Ha realizado estancias de investigación en la Seoul National University (SNU) en 2006 y en la Hankuk University of Foreign Studies (HUFS) en 2018, Seúl, Corea del Sur. Cuenta con Certificación en la metodología Content and Language Integrated Learning (CLIL Methodology) Teaching through English in Undergraduate Programs, Foreign Languages Institutional Program (FLIP-U de G). </p>
													<p>Miembro de la Junta Académica y del Núcleo académico básico de la Maestría en Relaciones Internacionales de los Gobiernos y Actores Locales. Miembro del Cuerpo Académico “Relaciones Internacionales y las Nuevas Diplomacias”, registro PRODEP, de la Red de Expertos en Paradiplomacia e Internacionalización Territorial (REPIT) miembro fundador. También es miembro del Pacific Economic Cooperación Council/ Consejo para la Cooperación Economica del Pacífico. (PECC) Capítulo México y es Representante institucional de la Universidad de Guadalajara ante el Consejo Técnico del EGEL-RI (Relaciones Internacionales) del Centro Nacional de Evaluación de la Educación Superior A.C. (CENEVAL) (2016-2022).
													</p>
												</div>
												<div class="tab-pane fade pl-2" id="produccion13" role="tabpanel" aria-labelledby="profile-tab">
													<ul>
														<li>
															Relaciones Internacionales y Nuevas diplomacias: Diplomacia Corporativa, Diplomacia Pública, Diplomacia Económica, Diplomacia Cultural.
														</li>
														<li>
															Corporativos y Empresarios en México y Corea del Sur
														</li>
														<li>
															Relaciones Corea-América Latina; Diplomacia pública de Corea del Sur
														</li>
														<li>
															Enseñanza de las relaciones Internacionales en México.
														</li>
													</ul>
												</div>
												<div class="tab-pane fade pl-2" id="proyecto13" role="tabpanel" aria-labelledby="contact-tab">
													<ul>
														<li>
															Las aportaciones de la diplomacia cultural coreana a la relación México-Corea
														</li>
														<li>
															Las aportaciones del sector privado a la relación bilateral México-Corea del Sur en el marco del inicio de las negociaciones del tratado de libre comercio.
														</li>
														<li>
															Mercado laboral de los internacionalistas en el contexto post pandemia.
													</ul>
												</div>
												<div class="tab-pane fade pl-2" id="contacto13" role="tabpanel" aria-labelledby="contact-tab">


													<p>
														La Diplomacia Económica Coreana hacia México y Chile: el camino hacia la Alianza del Pacífico” en el libro: Tendencias, Actores y Procesos en el Estudio de las Relaciones Internacionales, Publicado, Universidad de Guadalajara, 2021, ISBN: 978-607-571-108-9.

													</p>
													<p>
														“El e-school program de Fundación Corea. Una estrategia exitosa de internacionalización de los estudios regionales desde casa”. Fecha de entrega: 04 de julio de 2020. Investigación Conjunta con la Mtra. Viviana Ávila Gómez. Publicación en libro: “Reimaginando la internacionalización del currículo: buenas prácticas y posibilidades prometedoras” editado por la Universidad de Guadalajara.
													</p>
													<p>
														“Diplomacia económica y turismo: oportunidades para la vinculación de Jalisco con China, Corea del Sur y Japón” para el libro titulado: Actores locales, impactos globales: aportes académicos en paradiplomacia. 2019, ISBN: 978 607 547 613 1. ANUIES-Universidad de Guadalajara.
													</p>
													<p>
														“La internacionalización en las Universidades Públicas en México: El caso del Centro Universitario de la Costa de la Universidad de Guadalajara” para el libro titulado: Universidad y sus entornos temáticos. Universidad de Guadalajara-Centro Universitario de la Costa. 2018. ISBN: 978 607 547 411 3

													</p>

												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- pie del diálogo -->
							</div>
						</div>


						<!-- pie del diálogo -->
					</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-3 ftco-animate" data-toggle="modal" data-target="#melba_falck">
				<div class="staff">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(images/melba_falck.jpg);">
						</div>
					</div>
					<div class="text pt-3 text-center">
						<h3>Melba Falck, Ph.D.</h3>
						<span class="position mb-2">Japón</span>
						<div class="faded">
							<p>Relaciones económicas México-Japón y Relaciones económicas transpacíficas.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="melba_falck">
				<div class="modal-dialog modal-xl modal-dialog-centered">

					<div class="modal-content">
						<!-- cabecera del diálogo -->
						<div class="modal-header" style="background-color:#048A81;">
							<h4 class="modal-title" style="color: #ffffff;"><b>Melba Falck, Ph.D.</b></h4>
							<button type="button" class="close text-white" data-dismiss="modal">X</button>
						</div>
						<!-- cuerpo del diálogo -->
						<div class="modal-body text-justify" style="background-color:#F3CDB6;">

							<div class="row pt-2">
								<div class="ftco-animate col-5">
									<span class="gallery img align-items-center" style="background-image: url(images/melba_falck.jpg); height: 340px; width: 325px;"></span>
								</div>
								<div class="col">
									<ul class="nav nav-tabs text-center background-pills" id="myTab" role="tablist">
										<li class="nav-item col-6 nav-link-pills" role="presentation">
											<a class="nav-link active a-pills" id="home-tab" data-toggle="tab" href="#biografia4" role="tab" aria-controls="home" aria-selected="true""><b>Biografía y Educación</b></a>
											</li>
											<li class=" nav-item col-6" role="presentation">
												<a class="nav-link nav-link-pills a-pills" id="profile-tab" data-toggle="tab" href="#produccion4" role="tab" aria-controls="profile" aria-selected="false"><b>Líneas de
														Investigación</b></a>
										</li>
										<li class="nav-item col-6" role="presentation">
											<a class="nav-link  a-pills" id="contact-tab" data-toggle="tab" href="#proyecto4" role="tab" aria-controls="contact" aria-selected="false"><b>Proyectos Actuales</b></a>
										</li>
										<li class="nav-item col-6" role="presentation">
											<a class="nav-link a-pills" id="contact-tab" data-toggle="tab" href="#contacto4" role="tab" aria-controls="contact" aria-selected="false"><b>Publicaciones Recientes</b></a>
										</li>
									</ul>
									<div class="tab-content text-dark pt-3" id="myTabContent">
										<div class="tab-pane fade show active" id="biografia4" role="tabpanel" aria-labelledby="home-tab"><b>1-Para implementarlo en la parte de la
												información de los profesores</b>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
												eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
												ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
												aliquip ex ea commodo consequat. Duis aute irure dolor in
												reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
												pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
												culpa qui officia deserunt mollit anim id est laborum.</p>
										</div>
										<div class="tab-pane fade" id="produccion4" role="tabpanel" aria-labelledby="profile-tab"><b>2-Para implementarlo en la parte de la
												información de los profesores</b>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
												eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
												ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
												aliquip ex ea commodo consequat. Duis aute irure dolor in
												reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
												pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
												culpa qui officia deserunt mollit anim id est laborum.</p>
										</div>
										<div class="tab-pane fade" id="proyecto4" role="tabpanel" aria-labelledby="contact-tab"><b>3-Para implementarlo en la parte de la
												información de los profesores</b>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
												eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
												ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
												aliquip ex ea commodo consequat. Duis aute irure dolor in
												reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
												pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
												culpa qui officia deserunt mollit anim id est laborum.</p>
										</div>
										<div class="tab-pane fade" id="contacto4" role="tabpanel" aria-labelledby="contact-tab"><b>4-Para implementarlo en la parte de la
												información de los profesores</b>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
												eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
												ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
												aliquip ex ea commodo consequat. Duis aute irure dolor in
												reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
												pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
												culpa qui officia deserunt mollit anim id est laborum.</p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- pie del diálogo -->
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate" data-toggle="modal" data-target="#carlos_maya">
				<div class="staff">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(images/carlos_maya.jpg);">
						</div>
					</div>
					<div class="text pt-3 text-center">
						<h3>Carlos Maya, Ph.D.</h3>
						<span class="position mb-2">Japón</span>
						<div class="faded">
							<p>Economía Política de la Agricultura y la Alimentación en Japón, Tensiones Sociales en
								el Japón Contemporáneo, Estado y Política en el Japón Contemporáneo.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="carlos_maya">
				<div class="modal-dialog modal-xl modal-dialog-centered">

					<div class="modal-content">
						<!-- cabecera del diálogo -->
						<div class="modal-header" style="background-color:#048A81;">
							<h4 class="modal-title" style="color: #ffffff;"><b>Carlos Maya, Ph.D.</b></h4>
							<button type="button" class="close text-white" data-dismiss="modal">X</button>
						</div>
						<!-- cuerpo del diálogo -->
						<div class="modal-body text-justify" style="background-color:#F3CDB6;">

							<div class="row pt-2">

								<div class="flex-profesores">
									<div class="ftco-animate col-5">
										<span class="gallery img align-items-center" style="background-image: url(images/carlos_maya.jpg); height: 340px; width: 325px;"></span>
									</div>

									<li style="color:transparent;"></li>
									<div class="row">
										<div class="col-9">
											<p><b>Carlos Javier Maya Ambía</b></p>

											<p><b>Doctor en Ciencias Económicas y Sociales</b></p>
											<hr>
											<b><i class="ion-ios-mail" style="font-size: 25px;"></i>&nbsp;<a href="mailto:carlos.maya@academicos.udg.mx" target="_blank" style="color:#048A81;">
													carlos.maya@academicos.udg.mx</a></b>
											<hr>
											<p><b>Profesor Investigador Titular “B”</b></p>
											<p><b>Coordinador de Investigación del Centro<br>de Estudios Japoneses</b></p>
											<p><b>Miembro del Consejo Editorial de la Revista<br>Vínculos, Sociología, análisis y opinión</b></p>


										</div>
									</div>
								</div>
								<div class="col pt-3">
									<ul class="nav nav-tabs text-center background-pills" id="myTab" role="tablist">
										<li class="nav-item col-6 nav-link-pills" role="presentation">
											<a class="nav-link active a-pills" id="home-tab" data-toggle="tab" href="#biografia5" role="tab" aria-controls="home" aria-selected="true""><b>Biografía y Educación</b></a>
											</li>
											<li class=" nav-item col-6" role="presentation">
												<a class="nav-link nav-link-pills a-pills" id="profile-tab" data-toggle="tab" href="#produccion5" role="tab" aria-controls="profile" aria-selected="false"><b>Líneas de
														Investigación</b></a>
										</li>
										<li class="nav-item col-6" role="presentation">
											<a class="nav-link  a-pills" id="contact-tab" data-toggle="tab" href="#proyecto5" role="tab" aria-controls="contact" aria-selected="false"><b>Proyectos Actuales</b></a>
										</li>
										<li class="nav-item col-6" role="presentation">
											<a class="nav-link a-pills" id="contact-tab" data-toggle="tab" href="#contacto5" role="tab" aria-controls="contact" aria-selected="false"><b>Publicaciones</b></a>
										</li>
									</ul>
									<div class="tab-content text-dark pt-3" id="myTabContent">
										<div class="tab-pane fade show active" id="biografia5" role="tabpanel" aria-labelledby="home-tab">
											<p>Cursó la Licenciatura en economía en la UNAM, la Maestría en Ciencias
												Políticas y el Doctorado en Economía en la Universidad Libre de
												Berlin (Alemania Federal). Se ha desempeñado como docente e
												investigador en la UNAM, en el Instituto Nacional de Antropología e
												Historia, en la Universidad Libre de Berlín, en el Instituto
												Tecnológico y de Estudios Superiores de Monterrey, en la Universidad
												Autónoma de Sinaloa. Ha sido profesor-investigador invitado en El
												Colegio de Sonora, la Universidad Michoacana de San Nicolás de
												Hidalgo., la Universidad de Sevilla, la Universidad de California en
												Santa Cruz, la Universidad Sofia (Japón) y el Instituto de Economías
												en Desarrollo (Japón). Desde 2010 es profesor-investigador de la
												Universidad de Guadalajara, en el Departamento de Estudios del
												Pacífico. Miembro del núcleo académico básico del Doctorado en
												Ciencias Sociales y de la Maestría en Global Politics & Transpacific
												Studies. Docente en el Doctorado en Ciencia Política. Fundador y
												coordinador de investigación del Centro de Estudios Japoneses de la
												UdeG. Autor de siete libros, coordinador de diez y de más de cien
												artículos publicados en revistas científicas nacionales y
												extranjeras. Miembro del Consejo Editorial Internacional de la
												Revista México y la Cuenca del Pacífico.</p>
										</div>
										<div class="tab-pane fade" id="produccion5" role="tabpanel" aria-labelledby="profile-tab">
											<li>
												Economía Política de la Agricultura y la Alimentación
												Teoría y Filosofía Política
											</li>
										</div>
										<div class="tab-pane fade" id="proyecto5" role="tabpanel" aria-labelledby="contact-tab">
											<p>
												<li>La modernización de Japón: tensiones y disrupciones sociales
												</li>
											</p>
											<p>
												<li>La modernización de la dieta japonesa</li>
											</p>
										</div>
										<div class="tab-pane fade" id="contacto5" role="tabpanel" aria-labelledby="contact-tab">
											<p>
												<li>Maya, C. (2022). Japón: El cansancio de una nación. México:
													Universidad Nacional Autónoma de México.
												</li>
											</p>
											<p>
												<li>Maya, C. (2021). Introducción y expansión del consumo de lácteos
													en Japón, PORTES, Revista Mexicana de Estudios sobre la Cuenca
													del Pacífico, XV, 29, 123-145.</li>
											</p>
											<p>
												<li>Maya, C. (2021). Some reflections about the post-global economy
													after COVID-19, Sociology International Journal, V, 1, 10-11.
												</li>
											</p>
											<p>
												<li>Maya, C. (2020). Revisión de la discusión actual sobre la
													Covid-19 en el ámbito del pensamiento social, El Trimestre
													Económico, LXXXVII (4), 1233-1258.</li>
											</p>
											<p>
												<li>Maya, C. (2017), La crítica de Karl Polanyi a la teoría
													económica basada en el homo oeconomicus y la mentalidad de
													mercado, Ciencia Económica, VI (11), 2-46.</li>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- pie del diálogo -->
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate" data-toggle="modal" data-target="#daisuke_kishi">
				<div class="staff">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(images/daisuke.jpg);">
						</div>
					</div>
					<div class="text pt-3 text-center">
						<h3>Daisuke Kishi, Ph.D.</h3>
						<span class="position mb-2">Japón</span>
						<div class="faded">
							<p>Sociolingüística del Japonés y el Español Mexicano, japonés como segunda lengua,
								español como segunda lengua.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="daisuke_kishi">
				<div class="modal-dialog modal-xl modal-dialog-centered">

					<div class="modal-content">
						<!-- cabecera del diálogo -->
						<div class="modal-header" style="background-color:#048A81;">
							<h4 class="modal-title" style="color: #ffffff;"><b>Daisuke Kishi, Ph.D.</b></h4>
							<button type="button" class="close text-white" data-dismiss="modal">X</button>
						</div>
						<!-- cuerpo del diálogo -->
						<div class="modal-body text-justify" style="background-color:#F3CDB6;">

							<div class="row pt-2">

								<div class="flex-profesores">
									<div class="ftco-animate col-5">
										<span class="gallery img align-items-center" style="background-image: url(images/daisuke.jpg); height: 340px; width: 325px;"></span>
									</div>

									<li style="color:transparent;"></li>
									<div class="row">
										<div class="col-9">
											<p><b>Daisuke Kishi</b></p>

											<p><b>Doctor en Ciencias de la Educación</b></p>
											<hr>
											<b><i class="ion-ios-mail" style="font-size: 25px;"></i>&nbsp;<a href="mailto:daisuke.kishi@academicos.udg.mx" target="_blank" style="color:#048A81;;">
													daisuke.kishi@academicos.udg.mx</a></b>
											<hr>
											<p><b>Profesor investigador Titular “B”</b></p>

											<p><b>Director del Centro de Estudios Japoneses</b></p>

										</div>
									</div>
								</div>

								<div class="col pt-3">
									<ul class="nav nav-tabs text-center background-pills" id="myTab" role="tablist">
										<li class="nav-item col-6 nav-link-pills" role="presentation">
											<a class="nav-link active a-pills" id="home-tab" data-toggle="tab" href="#biografia6" role="tab" aria-controls="home" aria-selected="true""><b>Biografía y Educación</b></a>
											</li>
											<li class=" nav-item col-6" role="presentation">
												<a class="nav-link nav-link-pills a-pills" id="profile-tab" data-toggle="tab" href="#produccion6" role="tab" aria-controls="profile" aria-selected="false"><b>Líneas de
														Investigación</b></a>
										</li>
										<li class="nav-item col-6" role="presentation">
											<a class="nav-link  a-pills" id="contact-tab" data-toggle="tab" href="#proyecto6" role="tab" aria-controls="contact" aria-selected="false"><b>Proyectos Actuales</b></a>
										</li>
										<li class="nav-item col-6" role="presentation">
											<a class="nav-link a-pills" id="contact-tab" data-toggle="tab" href="#contacto6" role="tab" aria-controls="contact" aria-selected="false"><b>Publicaciones</b></a>
										</li>
									</ul>
									<div class="tab-content text-dark pt-3" id="myTabContent">
										<div class="tab-pane fade show active" id="biografia6" role="tabpanel" aria-labelledby="home-tab">
											<p>Licenciado en Filosofía y Letras (Universidad Nanzan, 1979).
												Maestría en Lingüística (Universidad Autónoma de Guadalajara, 1982).
												Maestría en Letras (Universidad de Estudios Extranjeros de Kioto, 1983).
												Doctorado en Ciencias de la Educación (Universidad Santander, 2020).
												Profesor de español en la Universidad de Chiba, Universidad Waseda,
												Universidad Hosei, Universidad de Estudios Internacionales de Kanda,
												Universidad Shumei, etc. en Japón (1984-2003). Profesor investigador
												en el Departamento de Estudios del Pacífico de la Universidad de Guadalajara
												(2003-actual) y Director del Centro de Estudios Japoneses (2016-actual).
											</p>
										</div>
										<div class="tab-pane fade pl-3" id="produccion6" role="tabpanel" aria-labelledby="profile-tab">
											<ul>
												<li>Sociolingüística</li>
												<li>Enseñanza de japonés y español como L2</li>
											</ul>
										</div>
										<div class="tab-pane fade pl-3" id="proyecto6" role="tabpanel" aria-labelledby="contact-tab">
											<ul>
												<li>Nuevos retos en la enseñanza-aprendizaje del japonés básico durante la pandemia: Utilidades del uso de TICE</li>
												<li>Dudas más comunes en estudiantes hispanohablantes del japonés básico</li>
											</ul>
										</div>
										<div class="tab-pane fade pl-2" id="contacto6" role="tabpanel" aria-labelledby="contact-tab">
											<p>Kishi (2017). ¿Cómo enseñar a estudiantes extranjeros los verbos irregulares españoles en el presente de indicativo? Una aproximación, One Classroom. Many Languages. Universidad de Colima. 581-596.
											</p>
											<p>Kishi (2018). Problemas y tendencias en el aprendizaje de la escritura japonesa katakana en estudiantes tapatíos, Panorama de la Enseñanza de Lenguas: diez años después. Universidad de Colima.
											</p>
											<p>Kishi (2019). El aprendizaje de los adjetivos del japonés en mexicanos: un acercamiento al enfoque en competencias, Pedagogía 2019: Encuentro Internacional por la Unidad de Los Educadores. Ministerio de Educación, Cuba. 378-387.
											</p>
											<p>Kishi (2021a). Algunos errores característicos en el aprendizaje de las letras japonesas hiragana en estudiantes extranjeros según distintas nacionalidades: en el caso de los hablantes de español, inglés, chino e indonesio. PORTES, revista mexicana de estudios sobre la Cuenca del Pacífico, 15 (29), 147-168.
											</p>
											<p>Kishi (2021b). ¿Existe una estrategia y evaluación adecuada para la enseñanza-aprendizaje de Katakana del idioma japonés con estudiantes mexicanos?, Revista Lengua y Cultura, 2 (4), 22-29.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- pie del diálogo -->
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate" data-toggle="modal" data-target="#cristobal_collignon">
				<div class="staff">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(images/cristobal.jpg);">
						</div>
					</div>
					<div class="text pt-3 text-center">
						<h3>Cristóbal Collignon, Ph.D.</h3>
						<span class="position mb-2">Japón</span>
						<div class="faded">
							<p>Relaciones y estudios mexicano-japoneses, Diplomacia Pública y Cultural, Teoría
								Crítica, Teoría de Género y Queer en Relaciones Internacionales, Industrias
								Creativas.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="cristobal_collignon">
				<div class="modal-dialog modal-xl modal-dialog-centered">

					<div class="modal-content">
						<!-- cabecera del diálogo -->
						<div class="modal-header" style="background-color:#048A81;">
							<h4 class="modal-title" style="color: #ffffff;"><b>Cristóbal Collignon, Ph.D.</b></h4>
							<button type="button" class="close text-white" data-dismiss="modal">X</button>
						</div>
						<!-- cuerpo del diálogo -->
						<div class="modal-body text-justify" style="background-color:#F3CDB6;">

							<div class="row pt-2">
								<div class="ftco-animate col-5">
									<span class="gallery img align-items-center" style="background-image: url(images/cristobal.jpg); height: 340px; width: 325px;"></span>
								</div>
								<div class="col">
									<ul class="nav nav-tabs text-center background-pills" id="myTab" role="tablist">
										<li class="nav-item col-6 nav-link-pills" role="presentation">
											<a class="nav-link active a-pills" id="home-tab" data-toggle="tab" href="#biografia7" role="tab" aria-controls="home" aria-selected="true""><b>Biografía y Educación</b></a>
											</li>
											<li class=" nav-item col-6" role="presentation">
												<a class="nav-link nav-link-pills a-pills" id="profile-tab" data-toggle="tab" href="#produccion7" role="tab" aria-controls="profile" aria-selected="false"><b>Líneas de
														Investigación</b></a>
										</li>
										<li class="nav-item col-6" role="presentation">
											<a class="nav-link  a-pills" id="contact-tab" data-toggle="tab" href="#proyecto7" role="tab" aria-controls="contact" aria-selected="false"><b>Proyectos Actuales</b></a>
										</li>
										<li class="nav-item col-6" role="presentation">
											<a class="nav-link a-pills" id="contact-tab" data-toggle="tab" href="#contacto7" role="tab" aria-controls="contact" aria-selected="false"><b>Publicaciones Recientes</b></a>
										</li>
									</ul>
									<div class="tab-content text-dark pt-3" id="myTabContent">
										<div class="tab-pane fade show active" id="biografia7" role="tabpanel" aria-labelledby="home-tab"><b>1-Para implementarlo en la parte de la
												información de los profesores</b>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
												eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
												ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
												aliquip ex ea commodo consequat. Duis aute irure dolor in
												reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
												pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
												culpa qui officia deserunt mollit anim id est laborum.</p>
										</div>
										<div class="tab-pane fade" id="produccion7" role="tabpanel" aria-labelledby="profile-tab"><b>2-Para implementarlo en la parte de la
												información de los profesores</b>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
												eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
												ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
												aliquip ex ea commodo consequat. Duis aute irure dolor in
												reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
												pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
												culpa qui officia deserunt mollit anim id est laborum.</p>
										</div>
										<div class="tab-pane fade" id="proyecto7" role="tabpanel" aria-labelledby="contact-tab"><b>3-Para implementarlo en la parte de la
												información de los profesores</b>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
												eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
												ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
												aliquip ex ea commodo consequat. Duis aute irure dolor in
												reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
												pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
												culpa qui officia deserunt mollit anim id est laborum.</p>
										</div>
										<div class="tab-pane fade" id="contacto7" role="tabpanel" aria-labelledby="contact-tab"><b>4-Para implementarlo en la parte de la
												información de los profesores</b>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
												eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
												ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
												aliquip ex ea commodo consequat. Duis aute irure dolor in
												reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
												pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
												culpa qui officia deserunt mollit anim id est laborum.</p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- pie del diálogo -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-lg-3 ftco-animate" data-toggle="modal" data-target="#takako_nakasone">
			<div class="staff">
				<div class="img-wrap d-flex align-items-stretch">
					<div class="img align-self-stretch" style="background-image: url(images/takako.jpg);">
					</div>
				</div>
				<div class="text pt-3 text-center">
					<h3>Takako Nakasone, Ph.D.</h3>
					<span class="position mb-2">Japón</span>
					<div class="faded">
						<p>Migración contemporánea de Japón a México, el japonés como segunda lengua.</p>
					</div>
				</div>
			</div>
		</div>

		<!--<div class="col-lg-4" data-toggle="modal" data-target="#requisitos-3">
									<div class="hover hover-2 text-white rounded">
										<img src="images/graduation.jpg" alt="">
										<div class="hover-overlay"></div>
										<div class="hover-2-content px-4 py-3">
											<h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span
													class="font-weight-light text-white">Requisitos de Titulación</h3>
										</div>
									</div>
									</a>
								</div>-->

		<div class="modal fade" id="takako_nakasone">
			<div class="modal-dialog modal-xl modal-dialog-centered">

				<div class="modal-content">
					<!-- cabecera del diálogo -->
					<div class="modal-header" style="background-color:#048A81;">
						<h4 class="modal-title" style="color: #ffffff;"><b>Takako Nakasone, Ph.D.</b></h4>
						<button type="button" class="close text-white" data-dismiss="modal">X</button>
					</div>
					<!-- cuerpo del diálogo -->
					<div class="modal-body text-justify" style="background-color:#F3CDB6;">

						<div class="row pt-2">
							<div class="flex-profesores">
								<div class="ftco-animate col-5">
									<span class="gallery img align-items-center" style="background-image: url(images/takako.jpg); height: 340px; width: 325px;"></span>
								</div>
								<li style="color:transparent;"></li>
								<div class="row">
									<div class="col-9">

										<p><b>Takako Nakasone</b></p>

										<p><b>Doctora en Ciencias Sociales</b></p>
										<hr>
										<b><i class="ion-ios-mail" style="font-size: 25px;"></i>&nbsp;<a href="mailto:takako.nakasone@academicos.udg.mx" target="_blank" style="color:#048A81;">
												takako.nakasone@academicos.udg.mx</a></b>
										<hr>
										<p><b>Coordinadora de Docencia del<br>Centro de Estudios Japoneses</b></p>
										<p><b>Técnico Académico del Departamento<br>de Estudios del Pacífico</b></p>

									</div>
								</div>
							</div>
							<div class="col pt-3">
								<ul class="nav nav-tabs text-center background-pills" id="myTab" role="tablist">
									<li class="nav-item col-6 nav-link-pills" role="presentation">
										<a class="nav-link active a-pills" id="home-tab" data-toggle="tab" href="#biografia8" role="tab" aria-controls="home" aria-selected="true""><b>Biografía y Educación</b></a>
										</li>
										<li class=" nav-item col-6" role="presentation">
											<a class="nav-link nav-link-pills a-pills" id="profile-tab" data-toggle="tab" href="#produccion8" role="tab" aria-controls="profile" aria-selected="false"><b>Líneas de
													Investigación</b></a>
									</li>
									<li class="nav-item col-6" role="presentation">
										<a class="nav-link  a-pills" id="contact-tab" data-toggle="tab" href="#proyecto8" role="tab" aria-controls="contact" aria-selected="false"><b>Proyectos Actuales</b></a>
									</li>
									<li class="nav-item col-6" role="presentation">
										<a class="nav-link a-pills" id="contact-tab" data-toggle="tab" href="#contacto8" role="tab" aria-controls="contact" aria-selected="false"><b>Publicaciones</b></a>
									</li>
								</ul>
								<div class="tab-content text-dark pt-3" id="myTabContent">
									<div class="tab-pane fade show active" id="biografia8" role="tabpanel" aria-labelledby="home-tab">
										<p>Es doctora en Ciencias Sociales y maestra en Comunicación por la
											Universidad de Guadalajara y licenciada en Lengua y Cultura Hispánicas
											por la Universidad de las Ryukyus en Okinawa, Japón. Es coordinadora de
											Enseñanza de Japonés del Centro de Estudios Japoneses (CEJA) del
											Departamento de Estudios del Pacífico (DEP) del Centro Universitario de
											Ciencias Sociales y Humanidades (CUCSH) de la Universidad de
											Guadalajara. Profesora de Asignatura del Departamento de Lenguas Moderna
										</p>
									</div>
									<div class="tab-pane fade" id="produccion8" role="tabpanel" aria-labelledby="profile-tab">
										<p>
											<li>Migración japonesa a Guadalajara</li>
										</p>
										<p>
											<li>Migración nikkei a Okinawa</li>
										</p>
										<p>
											<li>Enseñanza del idioma japonés</li>
										</p>

									</div>
									<div class="tab-pane fade" id="proyecto8" role="tabpanel" aria-labelledby="contact-tab">
										<p>
											<li>Diversidad migratoria en Guadalajara y Chapala. Historias de arribo,
												asentamiento y procesos de transformación</li>
										</p>
										<p>
											<li>Nuevos retos en la enseñanza-aprendizaje del japonés básico durante
												la pandemia: Utilidades del uso de TICE
											</li>
										</p>
										<p>
											<li>Nueva realidad en el aula 2.0: prácticas docentes
											</li>
										</p>
									</div>
									<div class="tab-pane fade" id="contacto8" role="tabpanel" aria-labelledby="contact-tab">
										<p> Nakasone, T. y Yamaguchi L., V. K. (2020). Censo Nikkei de Guadalajara
											2018. En M. Falck R. (Ed.), Presencia japonesa en Jalisco (pp.137-169).
										</p>
										<p> Universidad de Guadalajara.
											http://www.publicaciones.cucsh.udg.mx/kiosko/2020/E-book_Presencia_japonesa_INTERNET_FINAL.pdf
										</p>
										<p> Nakasone, T. (2016). Los perfiles de los residentes japoneses en
											Guadalajara en 2009. México y la Cuenca del Pacífico, 5(13), 57-88:
											http://www.mexicoylacuencadelpacifico.cucsh.udg.mx/index.php/mc/article/view/499/509
										</p>
										<p> Nakasone, T. (2015). Imágenes sobre los japoneses: una visión de los
											empleados mexicanos en empresas japonesas. México y la Cuenca del
											Pacífico, 4(11), 89-112:
											http://www.mexicoylacuencadelpacifico.cucsh.udg.mx/index.php/mc/article/view/485/479
										</p>
										<p> Nakasone, T. (2014). Diferencias culturales entre México y Japón: desde
											las perspectivas de los japoneses en Guadalajara. Portes, revista
											mexicana de estudios sobre la Cuenca del Pacífico, 3(16), 29-60:
											http://www.portesasiapacifico.com.mx/revistas/epocaiii/numero16/2.pdf
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- pie del diálogo -->
				</div>
			</div>
		</div>




		<div class="col-md-6 col-lg-3 ftco-animate" data-toggle="modal" data-target="#ruben_casillas">
			<div class="staff">
				<div class="img-wrap d-flex align-items-stretch">
					<div class="img align-self-stretch" style="background-image: url(images/ruben_casillas.jpg);">
					</div>
				</div>
				<div class="text pt-3 text-center">
					<h3>Rubén Casillas de la Torre, Ph.D.</h3>
					<span class="position mb-2">Japón</span>
					<div class="faded">
						<p>Política exterior japonesa y relaciones internacionales; Seguridad económica y militar
							japonesa en el Indo-Pacífico.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="ruben_casillas">
			<div class="modal-dialog modal-xl modal-dialog-centered">

				<div class="modal-content">
					<!-- cabecera del diálogo -->
					<div class="modal-header" style="background-color:#048A81;">
						<h4 class="modal-title" style="color: #ffffff;"><b>Rubén Casillas de la Torre, Ph.D.</b>
						</h4>
						<button type="button" class="close text-white" data-dismiss="modal">X</button>
					</div>
					<!-- cuerpo del diálogo -->
					<div class="modal-body text-justify" style="background-color:#F3CDB6;">

						<div class="row pt-2">

							<div class="flex-profesores">
								<div class="ftco-animate col-5">
									<span class="gallery img align-items-center" style="background-image: url(images/ruben_casillas.jpg); height: 340px; width: 325px;"></span>
								</div>

								<li style="color:transparent;"></li>
								<div class="row">
									<div class="col-9">
										<p><b>Rubén Casillas de la Torre</b></p>

										<p><b>Doctor en Ciencia Política</b></p>
										<hr>
										<b><i class="ion-ios-mail" style="font-size: 25px;"></i>&nbsp;<a href="mailto:ruben.casillas@academicos.udg.mx" target="_blank" style="color:#048A81;">
												ruben.casillas@academicos.udg.mx</a></b>
										<hr>
										<p><b>Miembro del Grupo de Estudios sobre Eurasia (GESE)</b></p>
										<p><b>Profesor Docente Asociado “C”</b></p>

									</div>
								</div>
							</div>

							<div class="col pt-3">
								<ul class="nav nav-tabs text-center background-pills" id="myTab" role="tablist">
									<li class="nav-item col-6 nav-link-pills" role="presentation">
										<a class="nav-link active a-pills" id="home-tab" data-toggle="tab" href="#biografia9" role="tab" aria-controls="home" aria-selected="true""><b>Biografía y Educación</b></a>
										</li>
										<li class=" nav-item col-6" role="presentation">
											<a class="nav-link nav-link-pills a-pills" id="profile-tab" data-toggle="tab" href="#produccion9" role="tab" aria-controls="profile" aria-selected="false"><b>Líneas de
													Investigación</b></a>
									</li>
									<li class="nav-item col-6" role="presentation">
										<a class="nav-link  a-pills" id="contact-tab" data-toggle="tab" href="#proyecto9" role="tab" aria-controls="contact" aria-selected="false"><b>Proyectos Actuales</b></a>
									</li>
									<li class="nav-item col-6" role="presentation">
										<a class="nav-link a-pills" id="contact-tab" data-toggle="tab" href="#contacto9" role="tab" aria-controls="contact" aria-selected="false"><b>Publicaciones</b></a>
									</li>
								</ul>
								<div class="tab-content text-dark pt-3" id="myTabContent">
									<div class="tab-pane fade show active" id="biografia9" role="tabpanel" aria-labelledby="home-tab">
										<p>Licenciado en Relaciones Internacionales, Maestro en Ciencias Sociales y
											Doctor en Ciencia Política por la Universidad de Guadalajara. Realizó
											una estancia de intercambio en Kanda University of International Studies
											entre los años 2009-2010 y posteriormente, en 2017, visitó de nuevo
											Japón para realizar una estancia corta de investigación con el apoyo del
											gobierno japonés. Ha impartido cursos pertenecientes a la disciplina de
											las Relaciones Internacionales en UVM, ITESO, UAG y UdeG, así como
											también de lengua japonesa en estas dos últimas instituciones.
											Actualmente es profesor de la Licenciatura en Lenguas y Culturas
											Extranjeras de CULagos y de la especialidad en Japón de la Maestría en
											Global Politics and Transpacific Studies del CUCSH. Miembro de ALADAA.
											Miembro del Centro de Estudios Japoneses (CEJA), CUCS
										</p>
									</div>
									<div class="tab-pane fade" id="produccion9" role="tabpanel" aria-labelledby="profile-tab">
										<p>
											<li>Seguridad de Japón en el Indo-Pacífico</li>
										</p>
										<p>
											<li>Política exterior japonesa</li>
										</p>
										<p>
											<li>Historia y cultura de Japón</li>
										</p>

									</div>
									<div class="tab-pane fade" id="proyecto9" role="tabpanel" aria-labelledby="contact-tab">
										<p>
											<li>Seguridad económico-militar de Japón en el Indo-Pacífico
											</li>
										</p>
									</div>
									<div class="tab-pane fade" id="contacto9" role="tabpanel" aria-labelledby="contact-tab">
										<p>Caldera Montes J.F., Pérez Pulido I., Torres Aceves A., Mora García O. &
											Casillas De la Torre R. (2022). Ajuste escolar y habilidades sociales en
											estudiantes mexicanos de educación superior. Revista Dilemas
											Contemporáneos: Educación, Política y Valores. Año: IX. Número: 2.
											Artículo no.:23. DOI: https://doi.org/10.46377/dilemas.v9i2.3064.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- pie del diálogo -->
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 ftco-animate" data-toggle="modal" data-target="#arturo_santa_cruz">
			<div class="staff">
				<div class="img-wrap d-flex align-items-stretch">
					<div class="img align-self-stretch" style="background-image: url(images/arturo_santa_cruz.jpg);">
					</div>
				</div>
				<div class="text pt-3 text-center">
					<h3>Arturo Santa Cruz, Ph.D.</h3>
					<span class="position mb-2">América del Norte</span>
					<div class="faded">
						<p>Teoría de las Relaciones Internacionales, Relaciones México-Estados Unidos, Integración
							Norteamericana.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="arturo_santa_cruz">
			<div class="modal-dialog modal-xl modal-dialog-centered">

				<div class="modal-content">
					<!-- cabecera del diálogo -->
					<div class="modal-header" style="background-color:#048A81;">
						<h4 class="modal-title" style="color: #ffffff;"><b>Arturo Santa Cruz, Ph.D.</b></h4>
						<button type="button" class="close text-white" data-dismiss="modal">X</button>
					</div>
					<!-- cuerpo del diálogo -->
					<div class="modal-body text-justify" style="background-color:#F3CDB6;">

						<div class="row pt-2">

							<div class="flex-profesores">
								<div class="ftco-animate col-5">
									<span class="gallery img align-items-center" style="background-image: url(images/arturo_santa_cruz.jpg); height: 340px; width: 325px;"></span>
								</div>

								<li style="color:transparent;"></li>
								<div class="row">
									<div class="col-9">
										<p><b>Arturo Santa Cruz</b></p>

										<p><b>Doctor en Ciencias Sociales</b></p>
										<hr>
										<b><i class="ion-ios-mail" style="font-size: 25px;"></i><a href="mailto:arturo.santacruz@academicos.udg.mx" target="_blank" style="color:#048A81;">
												roberto.hhernandez@academicos.udg.mx</a></b>
										<hr>
										<p><b>Jefe del Departamento de Estudios Internacionales</b></p>
										<p><b>Profesor Investigador Titular “C”</b></p>
										<p><b>SNI Nivel I</b></p>
										<p><b>Perfil Promep</b></p>

									</div>
								</div>
							</div>

							<div class="col pt-3">
								<ul class="nav nav-tabs text-center background-pills" id="myTab" role="tablist">
									<li class="nav-item col-6 nav-link-pills" role="presentation">
										<a class="nav-link active a-pills" id="home-tab" data-toggle="tab" href="#biografia10" role="tab" aria-controls="home" aria-selected="true""><b>Biografía y Educación</b></a>
										</li>
										<li class=" nav-item col-6" role="presentation">
											<a class="nav-link nav-link-pills a-pills" id="profile-tab" data-toggle="tab" href="#produccion10" role="tab" aria-controls="profile" aria-selected="false"><b>Líneas de
													Investigación</b></a>
									</li>
									<li class="nav-item col-6" role="presentation">
										<a class="nav-link  a-pills" id="contact-tab" data-toggle="tab" href="#proyecto10" role="tab" aria-controls="contact" aria-selected="false"><b>Proyectos Actuales</b></a>
									</li>
									<li class="nav-item col-6" role="presentation">
										<a class="nav-link a-pills" id="contact-tab" data-toggle="tab" href="#contacto10" role="tab" aria-controls="contact" aria-selected="false"><b>Publicaciones</b></a>
									</li>
								</ul>
								<div class="tab-content text-dark pt-3" id="myTabContent">
									<div class="tab-pane fade show active" id="biografia10" role="tabpanel" aria-labelledby="home-tab">
										<p>Arturo Santa Cruz es Profesor-Investigador del Departamento de Estudios
											del Pacífico, y Director del Centro de Estudios sobre América del Norte
											(CESAN) de la Universidad de Guadalajara. Es doctor en Ciencias
											Políticas por la Universidad de Cornell.
											Es autor de “US Hegemony and the Americas: Power and Economic Statecraft
											in International Relations” (Routledge, 2020); “Mexico-United States
											Relations: The Semantics of Sovereignty” (Routledge, 2012); co-autor de
											América del Norte, Volumen 1 de la serie "Historia de las relaciones
											internacionales de México, 1821-2010" (Secretaría de Relaciones
											Exteriores, 2011); e “International Election Monitoring, Sovereignty,
											and the Western Hemisphere Idea: The Emergence of an International Norm”
											(Routledge, 2005).
											Es editor o coeditor de, entre otros libros, “Introducción a las
											Relaciones Internacionales: América Latina y la Política Global”, con
											Thomas Legler y Laura Zamudio (Oxford University Press, 2013); “The
											State and Security in Mexico: Transformation and Crisis in Regional
											Perspective”, con Brian Bow (Routledge, 2012), y “La política sin
											fronteras, o la ubicuidad de lo distintivo” (CIDE, 2012).
											También ha publicado en revistas especializadas, como International
											Organization, Journal of Latin American Studies, Estudios
											Internacionales y Foro Internacional, así como varios capítulos en
											libros.

										</p>
									</div>
									<div class="tab-pane fade" id="produccion10" role="tabpanel" aria-labelledby="profile-tab">
										<p>
											<li>
												Integración en América del Norte
											</li>
											<li>
												Relaciones México-Estados Unidos
											<li>
												Teoría de Relaciones Internacionales
											</li>
										</p>
									</div>
									<div class="tab-pane fade" id="proyecto10" role="tabpanel" aria-labelledby="contact-tab">
										<p>
											<li>Regionalización en América del Norte</li>
											<li>Relaciones Internacionales en México</li>
											<li>Aspectos metodológicos del constructivismo</li>
										</p>
									</div>
									<div class="tab-pane fade" id="contacto10" role="tabpanel" aria-labelledby="contact-tab">
										<p>Santa Cruz, A. (en prensa). From Asia-Pacific to the Indo-Pacific, in
											three different world(view)s. México y la Cuenca del Pacífico, 11(32).
										</p>

										<p>Cruz, A. (2021). La hegemonía estadounidense y el continente
											americano: Poder y diplomacia económica en las relaciones
											internacionales. Nueva York: Peter Lang.</p>

										<p>Cruz, A; Legler, T. & Zamudio, L. (2021, reimpresión).</p>

										<p>Introducción a las Relaciones Internacionales: América Latina y la
											Política Global. Ciudad de México: Universidad Iberoamericana.</p>

										<p>Santa Cruz, A. (2021). “Regionalism in Latin American Thought and
											Practice”. En Acharya, A.; Deciancio, M. & Tussie, D. (eds). Latin
											America in Global International Relations [163-181]. Nueva York:
											Routledge.</p>

										<p>Santa Cruz, A. (2021). “Dos Décadas de Conmoción en el Orden Hemisférico
											en las Américas”. En Secretaría de Relaciones Exteriores (ed). El
											sistema y la política internacionales: narrativas desde México
											[121-142]. Ciudad de México: Instituto Matías Romero.</p>

										<p> Cruz, A. (2020). US Hegemony and the Americas: Power and Economic
											Statecraft in International Relations. Nueva York: Routledge.</p>

										<p>Santa Cruz, A. (2020). “La política de Enrique Peña Nieto hacia América
											del Norte: normalización y defensa de fronteras de políticas públicas”.
										</p>

										<p>En Covarrubias, A. et al (eds). Fundamentos internos y externos de la
											política exterior de México (2012-2018) [103-123]. Ciudad de México: El
											Colegio de México.</p>

										<p>Santa Cruz, A. (2020). “Constructivismo y Seguridad”. En Lozano, A. &
											Rodríguez, A. (coords). Seguridad y Asuntos Internacionales [61-73].
											Ciudad de México: Siglo Veintiuno Editores.</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- pie del diálogo -->
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 ftco-animate" data-toggle="modal" data-target="#jorge_chabat">
			<div class="staff">
				<div class="img-wrap d-flex align-items-stretch">
					<div class="img align-self-stretch" style="background-image: url(images/jorge_chabat.jpg);">
					</div>
				</div>
				<div class="text pt-3 text-center">
					<h3>Jorge Chabat, Ph.D.</h3>
					<span class="position mb-2">América del Norte</span>
					<div class="faded">
						<p>Política Exterior Mexicana, Seguridad Internacional, Seguridad Nacional, Crimen
							Organizado Transnacional, Política Exterior de Estados Unidos y Relaciones
							México-Estados Unidos.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="jorge_chabat">
			<div class="modal-dialog modal-xl modal-dialog-centered">

				<div class="modal-content">
					<!-- cabecera del diálogo -->
					<div class="modal-header" style="background-color:#048A81;">
						<h4 class="modal-title" style="color: #ffffff;"><b>Jorge Chabat, Ph.D.</b></h4>
						<button type="button" class="close text-white" data-dismiss="modal">X</button>
					</div>
					<!-- cuerpo del diálogo -->
					<div class="modal-body text-justify" style="background-color:#F3CDB6;">

						<div class="row pt-2">
							<div class="ftco-animate col-5">
								<span class="gallery img align-items-center" style="background-image: url(images/jorge_chabat.jpg); height: 340px; width: 325px;"></span>
							</div>
							<div class="col">
								<ul class="nav nav-tabs text-center background-pills" id="myTab" role="tablist">
									<li class="nav-item col-6 nav-link-pills" role="presentation">
										<a class="nav-link active a-pills" id="home-tab" data-toggle="tab" href="#biografia11" role="tab" aria-controls="home" aria-selected="true""><b>Biografía y Educación</b></a>
										</li>
										<li class=" nav-item col-6" role="presentation">
											<a class="nav-link nav-link-pills a-pills" id="profile-tab" data-toggle="tab" href="#produccion11" role="tab" aria-controls="profile" aria-selected="false"><b>Líneas de
													Investigación</b></a>
									</li>
									<li class="nav-item col-6" role="presentation">
										<a class="nav-link  a-pills" id="contact-tab" data-toggle="tab" href="#proyecto11" role="tab" aria-controls="contact" aria-selected="false"><b>Proyectos Actuales</b></a>
									</li>
									<li class="nav-item col-6" role="presentation">
										<a class="nav-link a-pills" id="contact-tab" data-toggle="tab" href="#contacto11" role="tab" aria-controls="contact" aria-selected="false"><b>Publicaciones Recientes</b></a>
									</li>
								</ul>
								<div class="tab-content text-dark pt-3" id="myTabContent">
									<div class="tab-pane fade show active" id="biografia11" role="tabpanel" aria-labelledby="home-tab"><b>1-Para implementarlo en la parte de la
											información de los profesores</b>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
											veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
											commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
											velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
											occaecat cupidatat non proident, sunt in culpa qui officia deserunt
											mollit anim id est laborum.</p>
									</div>
									<div class="tab-pane fade" id="produccion11" role="tabpanel" aria-labelledby="profile-tab"><b>2-Para implementarlo en la parte de la
											información de los profesores</b>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
											veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
											commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
											velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
											occaecat cupidatat non proident, sunt in culpa qui officia deserunt
											mollit anim id est laborum.</p>
									</div>
									<div class="tab-pane fade" id="proyecto11" role="tabpanel" aria-labelledby="contact-tab"><b>3-Para implementarlo en la parte de la
											información de los profesores</b>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
											veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
											commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
											velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
											occaecat cupidatat non proident, sunt in culpa qui officia deserunt
											mollit anim id est laborum.</p>
									</div>
									<div class="tab-pane fade" id="contacto11" role="tabpanel" aria-labelledby="contact-tab"><b>4-Para implementarlo en la parte de la
											información de los profesores</b>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
											veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
											commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
											velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
											occaecat cupidatat non proident, sunt in culpa qui officia deserunt
											mollit anim id est laborum.</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- pie del diálogo -->
				</div>
			</div>
		</div>

		<div class="col-md-6 col-lg-3 ftco-animate" data-toggle="modal" data-target="#marcela_lopez">
			<div class="staff">
				<div class="img-wrap d-flex align-items-stretch">
					<div class="img align-self-stretch" style="background-image: url(images/marcela.jpg);">
					</div>
				</div>
				<div class="text pt-3 text-center">
					<h3>Marcela López-Vallejo, Ph.D.</h3>
					<span class="position mb-2">América del Norte</span>
					<div class="faded">
						<p>Gobernanza Global, Integración Transregional en América del Norte, Diplomacia Local y
							Cooperación Descentralizada, Transiciones Energéticas, Gobernanza Climática
							EE.UU.-Canadá-México y Política Energética.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="marcela_lopez">
			<div class="modal-dialog modal-xl modal-dialog-centered">

				<div class="modal-content">
					<!-- cabecera del diálogo -->
					<div class="modal-header" style="background-color:#048A81;">
						<h4 class="modal-title" style="color: #ffffff;"><b>Marcela López-Vallejo, Ph.D.</b></h4>
						<button type="button" class="close text-white" data-dismiss="modal">X</button>
					</div>
					<!-- cuerpo del diálogo -->
					<div class="modal-body text-justify" style="background-color:#F3CDB6;">

						<div class="row pt-2">


							<div class="flex-profesores">
								<div class="ftco-animate col-5">
									<span class="gallery img align-items-center" style="background-image: url(images/marcela.jpg); height: 340px; width: 325px;"></span>
								</div>

								<li style="color:transparent;"></li>
								<div class="row">
									<div class="col-9">
										<p><b>Marcela López-Vallejo Olvera</b></p>

										<p><b>Doctora en Relaciones Internacionales </b></p>
										<hr>
										<b><i class="ion-ios-mail" style="font-size: 25px;"></i><a href="mailto:marcela.lopezvallejo@academicos.udg.mx" target="_blank" style="color:#048A81;">
												marcela.lopezvallejo@academicos.udg.mx</a></b>
										<hr>
										<p><b>Vicepresidenta de AMEI</b></p>
										<p><b>Profesora Investigadora Titular “C”</b></p>
										<p><b>SNI Nivel I</b></p>
										<p><b>Perfil Promep</b></p>

									</div>
								</div>
							</div>

							<div class="col pt-3">
								<ul class="nav nav-tabs text-center background-pills" id="myTab" role="tablist">
									<li class="nav-item col-6 nav-link-pills" role="presentation">
										<a class="nav-link active a-pills" id="home-tab" data-toggle="tab" href="#biografia12" role="tab" aria-controls="home" aria-selected="true""><b>Biografía y Educación</b></a>
										</li>
										<li class=" nav-item col-6" role="presentation">
											<a class="nav-link nav-link-pills a-pills" id="profile-tab" data-toggle="tab" href="#produccion12" role="tab" aria-controls="profile" aria-selected="false"><b>Líneas de
													Investigación</b></a>
									</li>
									<li class="nav-item col-6" role="presentation">
										<a class="nav-link  a-pills" id="contact-tab" data-toggle="tab" href="#proyecto12" role="tab" aria-controls="contact" aria-selected="false"><b>Proyectos Actuales</b></a>
									</li>
									<li class="nav-item col-6" role="presentation">
										<a class="nav-link a-pills" id="contact-tab" data-toggle="tab" href="#contacto12" role="tab" aria-controls="contact" aria-selected="false"><b>Publicaciones</b></a>
									</li>
								</ul>
								<div class="tab-content text-dark pt-3" id="myTabContent">
									<div class="tab-pane fade show active" id="biografia12" role="tabpanel" aria-labelledby="home-tab">
										<p>Es profesora-investigadora del Centro de Estudios sobre América del Norte
											(CESAN) y del Departamento de Estudios del Pacífico en la Universidad de Guadalajara.
											Estudió su Doctorado y Maestría en la Universidad de las Américas Puebla y ha sido
											profesora de Relaciones Internacionales por más de 20 años en diversas universidades
											del país. Pertenece al Sistema Nacional de Investigadores y fue Secretaria General
											de la Asociación Mexicana de Estudios Internacionales (2017-2019), así como Vicepresidenta
											de la Sección de América Latina y el Caribe de la International Studies Association (2019-2021).
											Trabajó en la Secretaría de Relaciones Exteriores, en la Secretaría de Educación Pública
											y la firma de cabildeo Burson-México.</p>
										<p> Pertenece al Consejo Editorial de la revista Latin American Policy y ha sido
											profesora visitante en el Instituto de Estudios de Energía de Oxford en Reino Unido,
											en la Universidad de Montreal, la Universidad de Ottawa y la Universidad Wilfried Laurier
											en Canadá. Sus más de 50 publicaciones se enfocan en el análisis sobre América del Norte
											con temas como diplomacias y gobernanzas locales, cambio climático, política energética,
											regionalismo y teoría de Relaciones Internacionales. Destacan sus dos últimos libros
											sobre gobernanza climática y política ambiental transregional en América del Norte.</p>
									</div>
									<div class="tab-pane fade pl-3" id="produccion12" role="tabpanel" aria-labelledby="profile-tab">
										<ul>
											<li>Regionalización, integración y políticas en América del Norte
											</li>
											<li>Políticas globales, regionales, nacionales y locales climáticas y energéticas</li>
											<li>Sistemas de precios al CO2 (mercados e impuestos)</li>
											<li>Gobernanza global</li>
											<li>Paradiplomacia y cooperación descentralizada</li>
										</ul>
									</div>
									<div class="tab-pane fade pl-3" id="proyecto12" role="tabpanel" aria-labelledby="contact-tab">
										<ul>
											<li>New Geographies of Energy in Mexico (Baker Institute/BUAP)
											</li>
											<li>North American Climate and Energy (University of Michigan)
											</li>
											<li>Metodología y Métodos en Relaciones Internacionales (UDG/COLSAN/UMAR)
											</li>
											<li>PACMetro (UDG/IMEPLAN)</li>
										</ul>
									</div>
									<div class="tab-pane fade" id="contacto12" role="tabpanel" aria-labelledby="contact-tab">
										<p>López-Vallejo, Marcela (2014). Reconfiguring Global Climate Governance in North America: A Transregional Approach, Surrey, UK: Ashgate Publishing. (https://www.routledge.com/Reconfiguring-Global-Climate-Governance-in-North-America-A-Transregional/Lopez-Vallejo/p/book/9781138270718)
										</p>
										<p>Healy, Robert, Van Nijnatten, Debora, and Marcela López-Vallejo (2014). Environmental Policy in North America: Capacities, Approaches and Transboundary Issue management in Canada, the United States and Mexico, Boradview & University of Toronto Press. (http://www.utppublishing.com/Environmental-Policy-in-North-America-Approaches-Capacity-and-the-Management-of-Transboundary-Issues.html)
										</p>
										<p>Schiavon, Jorge, Adriana S. Ortega, Marcela López-Vallejo y Rafael Velázquez (eds.). (2021). Teorías de Relaciones Internacionales en el siglo XXI: Interpretaciones críticas desde México y América Latina (Nueva Edición), Ciudad de México: CIDE. (ISBN: 978-607-8508-90-72020).</p>
										<p>Schiavon, Jorge, Adriana S. Ortega, Marcela López-Vallejo y Rafael Velázquez (eds.) (2014 y 2016). Teorías de Relaciones Internacionales en el siglo XXI: Interpretaciones críticas desde México, México DF: BUAP, COLSAN UPAEP, UABC, UANL, Primera y Segunda Ediciones.
										</p>
										<p>López-Vallejo, Marcela, Ana Bárbara Mungaray, Fausto Quintana, Rafael Velázquez (eds.). (2013). Gobernanza global en un mundo interconectado, México D.F.: Universidad Autónoma de Baja California, Asociación Mexicana de Estudios Internacionales, A.C., Universidad Popular Autónoma del Estado de Puebla, A.C. (ISBN: 978-607-607-140-3). (http://www.amei.mx/home/las-noticias-de-amei/gobernanza-global-en-un-mundo-interconectado/)
										</p>
										<p>López-Vallejo, Marcela. (2021). “Mexican Sub-Federal Governments and Trade Politics: Variation on Supportive Conditions and Institutional Resources,” Regional and Federal Studies. DOI: 10.1080/13597566.2021.1919871.
										</p>
										<p>López-Vallejo, Marcela & Pilar Fuerte Celis. (2020). “Hybrid Governance in Northeastern Mexico: Crime, Violence, and Legal-Illegal Energy Markets,” Latina American Perspectives 48(1):103-125. doi:10.1177/0094582X20975016.
										</p>
										<p>López-Vallejo, Marcela. (2019). “Una nueva multilateralidad climática con liderazgo local,” Foreign Affairs Latinoamérica, Mayo. ITAM. </p>
										<p>Muñoz-Meléndez, Gabriela & López-Vallejo, Marcela. (2018). “Building a Transregional Governance Architecture for Electricity Integration in the Baja California–California Border Region: The Cases of Tijuana and Mexicali,” Latin American Policy, issue 9, number, November 349-372. DOI: https://doi.org/10.1111/lamp.12148
										</p>
										<p>López-Vallejo, Marcela. (2017). “En la frontera del debate global-local: La provisión de bienes públicos desde la gobernanza escalar.” Revista Española de Derecho Internacional, vol. 69, 2:171-194. ISSN: 0034-9380.</p>
										<p>López-Vallejo, Marcela. (2021). “Non-Additionality, Overestimation of Supply, and Double Counting in Offset Programs: Insight into the Mexican Carbon Market.” En Simone Lucatello and Camila Barragán (eds.), Towards an Emissions Trading System in Mexico: Rationale, Design and Connections with the Global Climate Agenda. Springer Editions.
										</p>
										<p>López-Vallejo, Marcela. (2021). “Gobernanza climática multi-escala en América del Norte: Tres modos de integración regional.” En Catherine Vézina (ed.). Historias Conectadas en América del Norte. Editorial CIDE.
										</p>
										<p>López-Vallejo, Marcela. (2021). “Políticas climáticas y el partidismo en Canadá: Estrategias federales y provinciales durante los gobiernos de S.Harper y J.Trudeau.” En Oliver Santín Peña (eds.), Canadá y sus paradojas en el Siglo XXI: Política exterior, paradiplomacia, economía, recursos naturales y medioambiente, Volumen 1, pp. 205-238. Ciudad de México, CISAN-UNAM.
										</p>
										<p>López-Vallejo, Marcela. (2021). “Gobernanza Global.” En Schiavon, Jorge, Adriana S. Ortega, Marcela López-Vallejo y Rafael Velázquez (eds.), Teorías de Relaciones Internacionales en el siglo XXI: Interpretaciones críticas desde México y América Latina (1a Edición), pp. 529-548. Ciudad de México: CIDE. (ISBN: 978-607-8508-90-72020).
										</p>
										<p>López-Vallejo, Marcela. (2020). “Seguridad ambiental.” En Alberto Lozano Vázquez y Abelardo Rodríguez Sumano (eds.) Teorías, Dimensiones, Interdisciplinas, Las Américas, Amenazas, Instituciones, Regiones y Política Mundial. Siglo XXI Editores y Asociación Mexicana de Estudios Internacionales. Ciudad de México.
										</p>
										<p>Schiavon, Jorge A. & Marcela López-Vallejo. (2020). “Mexican Sub-Federal Actors and the Negotiation and Implementation of Free-Trade Agreements.” En Jörg Broschek y Patricia Goff (eds.). Multilevel Trade Politics: Configurations, Dynamics, Mechanisms, pp. University of Toronto Press.
										</p>
										<p>Van Nijnatten, Debora and Marcela López-Vallejo. (2018). “Canada-United States Relations and a Low-Carbon Economy for North America?” En Stephen Bird y Andrea Olive (eds.) Transboundary Environmental Governance, Michigan State University Press.
										</p>
										<p>López-Vallejo, Marcela. (2017). “Mexico-US Energy Relations: Clean-Energy Integration falling behind?” En Stoett, Peter and Owen Temby Towards Continental Environmental Governance? North American Transnational Networks and Governance, pp. 276-306. New York: State University of New York.</p>
										<p>Taraska, Gwynne, Marcela López-Vallejo, Sam Adams, Erin Flanagan, Gustavo Alanís-Ortega, Cathleen Kelly, Andrew Light, Julia Martinez, and Joe Thwaites.(2016). Proposals for a North American Climate Strategy. Washington DC: Center for American Progress, World Resources Institute, Centro de Investigación y Docencia Económicas, Centro Mexicano de Derecho Ambiental, Pembina Institute, Canada 2020. https://cdn.americanprogress.org/wp-content/uploads/2016/06/17110956/NALS-report-spreads.pdf
										</p>
										<p>López-Vallejo, Marcela. (2016). “Electricidad renovable en América Latina: Marcos regulatorios y beneficios sociales locales,” en Beneficios Sociales de la Electricidad en América Latina. Ciudad de México: Secretaría de Energía.</p>

									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- pie del diálogo -->
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 ftco-animate" data-toggle="modal" data-target="#jose_bravo">
			<div class="staff">
				<div class="img-wrap d-flex align-items-stretch">
					<div class="img align-self-stretch" style="background-image: url(images/jose_bravo.jpg);">
					</div>
				</div>
				<div class="text pt-3 text-center">
					<h3>José Bravo, Ph.D.</h3>
					<span class="position mb-2">América del Norte</span>
					<div class="faded">
						<p>Política Exterior de América del Norte, Relaciones Transpacíficas Estados Unidos - China.
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="jose_bravo">
			<div class="modal-dialog modal-xl modal-dialog-centered">

				<div class="modal-content">
					<!-- cabecera del diálogo -->
					<div class="modal-header" style="background-color:#048A81;">
						<h4 class="modal-title" style="color: #ffffff;"><b>José Bravo, Ph.D.</b></h4>
						<button type="button" class="close text-white" data-dismiss="modal">X</button>
					</div>
					<!-- cuerpo del diálogo -->
					<div class="modal-body text-justify" style="background-color:#F3CDB6;">

						<div class="row pt-2">

							<div class="flex-profesores">
								<div class="ftco-animate col-5">
									<span class="gallery img align-items-center" style="background-image: url(images/jose_bravo.jpg); height: 340px; width: 325px;"></span>
								</div>

								<li style="color:transparent;"></li>
								<div class="row">
									<div class="col-9">
										<p><b>José Jesús Bravo Vergara</b></p>

										<p><b>Doctor en Ciencias Sociales</b></p>
										<hr>
										<b><i class="ion-ios-mail" style="font-size: 25px;"></i><a href="mailto:jose.bvergara@academicos.udg.mx" target="_blank" style="color:#048A81;">
												jose.bvergara@academicos.udg.mx</a></b>
										<hr>
										<p><b>Jefe del Departamento de Estudios Internacionales</b></p>
										<p><b>Profesor Investigador Titular “C”</b></p>
										<p><b>SNI Nivel I</b></p>
										<p><b>Perfil Promep</b></p>

									</div>
								</div>
							</div>

							<div class="col pt-3">
								<ul class="nav nav-tabs text-center background-pills" id="myTab" role="tablist">
									<li class="nav-item col-6 nav-link-pills" role="presentation">
										<a class="nav-link active a-pills" id="home-tab" data-toggle="tab" href="#biografia13" role="tab" aria-controls="home" aria-selected="true""><b>Biografía y Educación</b></a>
										</li>
										<li class=" nav-item col-6" role="presentation">
											<a class="nav-link nav-link-pills a-pills" id="profile-tab" data-toggle="tab" href="#produccion13" role="tab" aria-controls="profile" aria-selected="false"><b>Líneas de
													Investigación</b></a>
									</li>
									<li class="nav-item col-6" role="presentation">
										<a class="nav-link  a-pills" id="contact-tab" data-toggle="tab" href="#proyecto13" role="tab" aria-controls="contact" aria-selected="false"><b>Proyectos Actuales</b></a>
									</li>
									<li class="nav-item col-6" role="presentation">
										<a class="nav-link a-pills" id="contact-tab" data-toggle="tab" href="#contacto13" role="tab" aria-controls="contact" aria-selected="false"><b>Publicaciones</b></a>
									</li>
								</ul>
								<div class="tab-content text-dark pt-3" id="myTabContent">
									<div class="tab-pane fade show active" id="biografia13" role="tabpanel" aria-labelledby="home-tab">
										<p>Egresado de la Licenciatura de Asuntos de la Universidad de Guadalajara. Maestro en Ciencias Sociales con especialidad en Relaciones Internacionales y Estudios del Pacífico, perteneciente al Padrón de Excelencia de Conacyt. Doctorado en Ciencias Sociales de la Universidad de Guadalajara, perteneciente al Padrón de excelencia de Conacyt 2007-2011. Miembro del comité Editorial de la Revista México y la Cuenca del Pacífico. Miembro de AMEI.
										</p>
										<p> Profesor en la Universidad Panamericana en 2004 en la carrera de Negocios Internacionales. Profesor en la Universidad del Valle de Atemajac de 2002 a 2006 en las carreras de Negocios Internacionales, Derecho y Relaciones Internacionales. Profesor en el Doctorado de Administración Docente en el Instituto Mexicano de Estudios Pedagógicos de 2011 a 2013. Profesor en la Licenciatura de Relaciones Internacionales desde 2002, en la Maestría de las Relaciones Internacionales de los Actores Locales y en la Maestría en Global Politics and Transpacific Studies. Profesor docente adscrito al Departamento de Estudios del Pacífico, y miembros del Centro de Estudios para América del Norte. Coordinador de Capacitación electoral en el Distrito X del Consejo Electoral del Estado de Jalisco en la elección de 2003.
										</p>
									</div>
									<div class="tab-pane fade pl-2" id="produccion13" role="tabpanel" aria-labelledby="profile-tab">
										<ul>
											<li>
												Política exterior de Estados Unidos hacia China en Asia del Este
											</li>
											<li>
												Política exterior nde Estados Unidos en Asia Central
											</li>
											<li>
												Política exterior de Estados Unidos hacia México y Canadá.
											</li>
										</ul>
									</div>
									<div class="tab-pane fade pl-2" id="proyecto13" role="tabpanel" aria-labelledby="contact-tab">
										<ul>
											<li>
												Artículos sobre la relación soviético-estadounidense durante la expansión japonesa de la primera parte del siglo XX
											</li>
											<li>
												Sobre la relación sino-estadounidense ante The Belt and Road Iniciative
											</li>
											<li>
												Asociación sino-rusa en Asia Central y del Este ante el orden americano
											</li>
										</ul>
									</div>
									<div class="tab-pane fade pl-2" id="contacto13" role="tabpanel" aria-labelledby="contact-tab">


										<p>
											Bravo Vergara, José y Sigala, Miguel Ángel. (2014). Constructivismo. En Teorías de Relaciones Internacionales en el Siglo XXI(pp. 435-453). Ciudad de Puebla: Benemérita Universidad Autónoma de Puebla, El Colegio de San Luis, Universidad Autónoma de Baja California, Universidad Autónoma de Nuevo León y Universidad Popular Autónoma del Estado de Puebla.
										</p>
										<p>
											Bravo Vergara, José Jesús. (2017). La relación política sino-estadounidense en Asia del Este: lucha por el poder o divergencias resultantes por la percepción de la amenaza. Foro Internacional, LVII, 4, pp. 870-914.
										</p>
										<p>
											Lemus, Daniel and Bravo Vergara. Jose. (2017). Geopolitics, “Real and imagined Spaces: China and Foreign Policy in the Context of East Asia. International Journal of China Studies, University of Malaya 8, pp. 397-421.
										</p>
										<p>
											Bravo Vergara, José Jesús. (2018). El concepto de seguridad en el ejercicio del poder estadounidense en el siglo XXI: las divergencias ante Rusia y China. En Paz y seguridad y desarrollo Tomo VIII(pp. 75-91). Universidad Nacional Autónoma de México: Ediciones del Lirio.
										</p>
										<p>
											Bravo Vergara José Jesús. (2020). Convergencias y divergencias en el orden normativo estadounidense: una interpretación constructivista de la relación política sino-estadounidense. México y la Cuenca del Pacífico, Año 23, núm. 68, pp. 77-120.
										</p>

									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- pie del diálogo -->
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 ftco-animate" data-toggle="modal" data-target="#miguel_sigala">
			<div class="staff">
				<div class="img-wrap d-flex align-items-stretch">
					<div class="img align-self-stretch" style="background-image: url(images/miguel_sigala.jpg);">
					</div>
				</div>
				<div class="text pt-3 text-center">
					<h3>Miguel Sigala, M.A.</h3>
					<span class="position mb-2">América del Norte</span>
					<div class="faded">
						<p>Política Comparada en América del Norte, Identidades Nacionales en América del Norte y
							Política Exterior Canadiense.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="miguel_sigala">
			<div class="modal-dialog modal-xl modal-dialog-centered">

				<div class="modal-content">
					<!-- cabecera del diálogo -->
					<div class="modal-header" style="background-color:#048A81;">
						<h4 class="modal-title" style="color: #ffffff;"><b>Miguel Sigala, M.A.</b></h4>
						<button type="button" class="close text-white" data-dismiss="modal">X</button>
					</div>
					<!-- cuerpo del diálogo -->
					<div class="modal-body text-justify" style="background-color:#F3CDB6;">

						<div class="row pt-2">

							<div class="flex-profesores">
								<div class="ftco-animate col-5">
									<span class="gallery img align-items-center" style="background-image: url(images/miguel_sigala.jpg); height: 340px; width: 325px;"></span>
								</div>

								<li style="color:transparent;"></li>
								<div class="row">
									<div class="col-9">
										<p><b>Miguel Ángel Sigala Gómez</b></p>

										<p><b>Maestro en Ciencias Sociales</b></p>
										<hr>
										<b><i class="ion-ios-mail" style="font-size: 25px;"></i><a href="mailto:miguel.sigala@academicos.udg.mx" target="_blank" style="color:#048A81;">
												miguel.sigala@academicos.udg.mx</a></b>
										<hr>
										<p><b>Profesor Investigador Titular “A” </b></p>


									</div>
								</div>
							</div>

							<div class="col pt-3">
								<ul class="nav nav-tabs text-center background-pills" id="myTab" role="tablist">
									<li class="nav-item col-6 nav-link-pills" role="presentation">
										<a class="nav-link active a-pills" id="home-tab" data-toggle="tab" href="#biografia14" role="tab" aria-controls="home" aria-selected="true""><b>Biografía y Educación</b></a>
										</li>
										<li class=" nav-item col-6" role="presentation">
											<a class="nav-link nav-link-pills a-pills" id="profile-tab" data-toggle="tab" href="#produccion14" role="tab" aria-controls="profile" aria-selected="false"><b>Líneas de
													Investigación</b></a>
									</li>
									<li class="nav-item col-6" role="presentation">
										<a class="nav-link  a-pills" id="contact-tab" data-toggle="tab" href="#proyecto14" role="tab" aria-controls="contact" aria-selected="false"><b>Proyectos Actuales</b></a>
									</li>
									<li class="nav-item col-6" role="presentation">
										<a class="nav-link a-pills" id="contact-tab" data-toggle="tab" href="#contacto14" role="tab" aria-controls="contact" aria-selected="false"><b>Publicaciones</b></a>
									</li>
								</ul>
								<div class="tab-content text-dark pt-3" id="myTabContent">
									<div class="tab-pane fade show active" id="biografia14" role="tabpanel" aria-labelledby="home-tab">
										<p>Estudió la maestría en Ciencias Sociales con orientación en Relaciones
											Internacionales y del Pacífico, y licenciatura en Estudios
											Internacionales, ambas por la Universidad de Guadalajara. Ha impartido
											cursos de historia y teoría de las Relaciones Internacionales; así como
											de historia y política comparada en América del Norte. Actualmente,
											estudia el programa de Doctorado en Transborder Studies en Arizona State
											University, Tempe. Fungió como Coordinador de programas internacionales
											y de internacionalización de la Universidad de Guadalajara.</p>
									</div>
									<div class="tab-pane fade" id="produccion14" role="tabpanel" aria-labelledby="profile-tab">
										<p>
											<li>Relaciones México-Estados Unidos.</li>
										</p>
										<p>
											<li>Política comparada en América del Norte.</li>
										</p>
									</div>
									<div class="tab-pane fade" id="proyecto14" role="tabpanel" aria-labelledby="contact-tab">
										<p>
											<li>Bordering processes: a framework to study how the U.S. and Mexico
												shape each other.
											</li>
										</p>
										<p>
											<li>U.S.-Mexico academic and scientific cooperation.</li>
										</p>
										<p>
											<li>Enlightened self-interest in Canadian Foreign Policy.</li>
										</p>
									</div>
									<div class="tab-pane fade" id="contacto14" role="tabpanel" aria-labelledby="contact-tab">
										<p>Moreno C.I., Delgadillo C.B., Sigala M.Á., Cárdenas E.H. (2022)
											University of Guadalajara: Transforming and Innovating Through Stronger
											Collaboration Between Higher and Upper-Secondary Education During the
											Pandemic. En Reimers F.M., Marmolejo F.J. (eds) University and School
											Collaborations during a Pandemic. Knowledge Studies in Higher Education,
											vol 8. Springer, Cham. https://doi.org/10.1007/978-3-030-82159-3_11</p>
										<p>Sigala, Miguel & Moreno, Carlos I. (2019). Las universidades como
											actores paradiplomáticos y de poder suave. En Villarruel Daniel. et al.
											(ed.), Actores locales, impactos globales: aportes académicos en
											paradiplomacia. Guadalajara: Editorial Universidad de Guadalajara.</p>
										<p>Bravo Vergara, J.J., Sigala, M. (2016). Constructivismo. En Schiavon
											Uriegas, J.A., Ortega Ramírez A.S., Lopez Vallejo, M., Valezquez Flores,
											(eds). Teorías de las Relaciones Internacionales: Interpretaciones
											críticas desde México (2da ed). México: CIDE, AMEI, Colegio de San Luis,
											UANL, UPAEP.</p>


									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- pie del diálogo -->
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 ftco-animate" data-toggle="modal" data-target="#miguel_hijar">
			<div class="staff">
				<div class="img-wrap d-flex align-items-stretch">
					<div class="img align-self-stretch" style="background-image: url(images/miguel_hijar.jpg);">
					</div>
				</div>
				<div class="text pt-3 text-center">
					<h3>Miguel Híjar, M.A.</h3>
					<span class="position mb-2">América del Norte</span>
					<div class="faded">
						<p>Política Exterior de Australia, Canadá, Nueva Zelanda, Reino Unido y Estados Unidos;
							Seguridad en el Indo-Pacífico.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="miguel_hijar">
			<div class="modal-dialog modal-xl modal-dialog-centered">

				<div class="modal-content">
					<!-- cabecera del diálogo -->
					<div class="modal-header" style="background-color:#048A81;">
						<h4 class="modal-title" style="color: #ffffff;"><b>Miguel Híjar, M.A.</b></h4>
						<button type="button" class="close text-white" data-dismiss="modal">X</button>
					</div>
					<!-- cuerpo del diálogo -->
					<div class="modal-body text-justify" style="background-color:#F3CDB6;">

						<div class="row pt-2">

							<div class="flex-profesores">
								<div class="ftco-animate col-5">
									<span class="gallery img align-items-center" style="background-image: url(images/miguel_hijar.jpg); height: 340px; width: 325px;"></span>
								</div>

								<li style="color:transparent;"></li>
								<div class="row">
									<div class="col-9">
										<p><b>Miguel Alejandro Híjar Chiapa</b></p>

										<p><b>Maestro en Ciencias Sociales</b></p>
										<hr>
										<b><i class="ion-ios-mail" style="font-size: 25px;"></i>&nbsp;<a href="mailto:miguel.hijar@academicos.udg.mx" target="_blank" style="color:#048A81;">
												miguel.hijar@academicos.udg.mx</a></b>
										<hr>
										<p><b>President, Australian and New Zealand<br>Studies Association of North America</b></p>
										<p><b>Profesor Investigador Asociado “B”</b></p>

									</div>
								</div>
							</div>

							<div class="col pt-3">
								<ul class="nav nav-tabs text-center background-pills" id="myTab" role="tablist">
									<li class="nav-item col-6 nav-link-pills" role="presentation">
										<a class="nav-link active a-pills" id="home-tab" data-toggle="tab" href="#biografia15" role="tab" aria-controls="home" aria-selected="true""><b>Biografía y Educación</b></a>
										</li>
										<li class=" nav-item col-6" role="presentation">
											<a class="nav-link nav-link-pills a-pills" id="profile-tab" data-toggle="tab" href="#produccion15" role="tab" aria-controls="profile" aria-selected="false"><b>Líneas de
													Investigación</b></a>
									</li>
									<li class="nav-item col-6" role="presentation">
										<a class="nav-link  a-pills" id="contact-tab" data-toggle="tab" href="#proyecto15" role="tab" aria-controls="contact" aria-selected="false"><b>Proyectos Actuales</b></a>
									</li>
									<li class="nav-item col-6" role="presentation">
										<a class="nav-link a-pills" id="contact-tab" data-toggle="tab" href="#contacto15" role="tab" aria-controls="contact" aria-selected="false"><b>Publicaciones</b></a>
									</li>
								</ul>
								<div class="tab-content text-dark pt-3" id="myTabContent">
									<div class="tab-pane fade show active" id="biografia15" role="tabpanel" aria-labelledby="home-tab">
										<p>Miguel Alejandro Híjar Chiapa es Profesor Investigador en el Centro de
											Estudios sobre América del Norte del Departamento de Estudios del
											Pacífico de la Universidad de Guadalajara y Presidente de la Australian
											and New Zealand Studies Association of North America. También funge como
											Director de la sección de Australia y Oceanía y como Miembro del Comité
											Ejecutivo del Consortium of Indo-Pacific Researchers. Ha sido Profesor
											Visitante en el Centro Edward A. Clark de Estudios Australianos y
											Neozelandeses de la Universidad de Texas en Austin y en el Centro de
											Estudios sobre Seguridad y Defensa de la Universidad de Massey en Nueva
											Zelanda.
											Licenciado en Relaciones Internacionales por la Universidad del Valle de
											Atemajac y Maestro en Ciencias Sociales con orientación en Relaciones
											Internacionales y del Pacífico por la Universidad de Guadalajara.
										</p>
									</div>
									<div class="tab-pane fade" id="produccion15" role="tabpanel" aria-labelledby="profile-tab">
										<p>
											<li>Teoría de Relaciones internacionales</li>
										</p>
										<p>
											<li>Seguridad en el Indo-Pacífico</li>
										</p>
										<p>
											<li>Política Exterior y de Defensa de Australia, Nueva Zelanda, Canadá,
												Estados Unidos, Reino Unido e India</li>
										</p>
									</div>
									<div class="tab-pane fade" id="proyecto15" role="tabpanel" aria-labelledby="contact-tab">
										<p>
											<li>AUKUS, Quad, and the Indo-Pacific</li>
										</p>
									</div>
									<div class="tab-pane fade" id="contacto15" role="tabpanel" aria-labelledby="contact-tab">
										<p>Híjar-Chiapa, M. A. (2021). “Australia, New Zealand and the Quad Plus” in
											J. Panda & E. Gunasekara-Rockwell (Eds.), Quad Plus and Indo-Pacific:
											The Changing Profile of International Relations (pp. 94-107). Routledge.
										</p>
										<p> Híjar-Chiapa, M. A. (2021). “From Distant Relatives to Close Partners:
											India’s Relations with Australia and New Zealand” in A. Pande (Ed.),
											Routledge Handbook of South Asian Foreign Policy (pp. 216-230).
											Routledge.</p>
										<p> Híjar-Chiapa, M. A. (2020). A Quad Plus? The Prospects for Australia and
											New Zealand. Journal of Indo Pacific Affairs, 3(5), 87-105.</p>
										<p> Híjar-Chiapa, M. A. (2020). “Australia and the Construction of the
											Indo-Pacific” in A. Rossiter & B. Cannon (Eds.), Conflict and
											Cooperation in the Indo-Pacific: New Geopolitical Realities (pp. 78-93).
											Routledge.</p>
										<p> Gallardo Ocampo, A. & Híjar-Chiapa, M. A. (2020). “Museums as Critical
											Spaces for Alterity in a Post-Truth World” in B. Jones & M. Guddonis
											(Eds.), History in a Post-Truth World: Theory and Praxis (pp. 251-265).
											Routledge.</p>
										<p> Híjar-Chiapa, M. A. (2020). “John G. Ruggie: Teórico de la
											Transformación” in R. Velázquez, J. Schiavon & D. Morales (Eds.), Los
											Clásicos de las Relaciones Internacionales: Ideas y conceptos para la
											construcción teórica de la disciplina (pp. 221-225). AMEI, CIDE & UABC.
										</p>
										<p> Híjar-Chiapa, M. A. (2018). Navigating Dangerous Waters: Australia and
											the Indo-Pacific. Rising Powers Quarterly, 3(2), 157-173.</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- pie del diálogo -->
				</div>
			</div>
		</div>
	</div>
	</div>
</section>
<!--Modales Profesores-->

@endsection