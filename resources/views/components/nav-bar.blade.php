<nav class="navbar fixed-top position-sticky navbar-expand-lg" id="ftco-navbar" 
	style="background-color: rgba(243, 205, 182, .9); overflow-x: auto;">
	<div class="container-fluid d-flex align-items-center">
		<div class="d-flex align-items-center container-fluid">
			<a target="_blank" href="https://www.udg.mx">
				<img src="{{asset('images/1-logo_udg.svg')}}" style="max-height: 60px; margin: 0px 8px">
			</a>

			<a target="_blank" href="http://www.cucsh.udg.mx">
				<img src="{{asset('images/cucsh.svg')}}" style="max-height: 60px; margin: 0px 8px">
			</a>
			<a href="">
				<img src="{{asset('images/globalpolitics.svg')}}" class="{{route('index')}}" style="max-height: 60px; margin: 0px 8px">
			</a>
			<button class="navbar-toggler nav-button" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				&#9776;
			</button>
		</div>
		<div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav d-flex align-items-center text-center">
				<form 
					action="#"
					class="order-last text-dark form-inline nav-form">
					<input 
						type="text" 
						class="nav-search"
					>
				</form>
				
				<li class="nav-item ">
					<a href="{{route('index')}}" class="nav-link navBar">
						<b style="color: #2922B04;">Inicio</b>
					</a>
				</li>
				<li class="nav-item ">
					<a href="{{route('plan_estudios')}}" class="nav-link color-navBar">
						<b>Plan de Estudios/LGAC</b>
					</a>
				</li>
				<li class="nav-item ">
					<a href="{{route('nab')}}" class="nav-link color-navBar">
						<b>NAB</b>
					</a>
				</li>
				<li class="nav-item ">
					<a href="{{route('requisitos')}}" class="nav-link color-navBar">
						<b>Requisitos</b>
					</a>
				</li>
				<li class="nav-item ">
					<a href="{{route('estudiantes')}}" class="nav-link color-navBar">
						<b>Estudiantes</b>
					</a>
				</li>
				</li>
				<li class="nav-item active">
					<a href="{{route('contacto')}}" class="nav-link color-navBar">
						<b>Contacto</b>
					</a>
				</li>
				
				<li>
					<div class="nav-ct-sc">
						<a 
							href="https://twitter.com/gpandtps"
							target="_blank"
							rel="noopener noreferrer"
							class="nav-rd-sc"
							style="background-image: url('images/logos/icon-twitter.svg');"
						></a>
						<a 
							href="https://www.youtube.com/channel/UCcxHb3nbSkTEmpFBN9126uA"
							target="_blank"
							rel="noopener noreferrer"
							class="nav-rd-sc"
							style="background-image: url('images/logos/icon-youtube.svg');"
						></a>
						<a 
							href="https://www.instagram.com/gpandtps/"
							target="_blank"
							rel="noopener noreferrer"
							class="nav-rd-sc"
							style="background-image: url('images/logos/icon-instagram.png');"
						></a>
						<a 
							href="https://www.facebook.com/gpandtps"
							target="_blank"
							rel="noopener noreferrer"
							class="nav-rd-sc"
							style="background-image: url('images/logos/icon-facebook.png');"
						></a>
					</div>
				</li>
			</ul>
		</div>
	</div>
</nav>