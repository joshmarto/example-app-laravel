<!DOCTYPE html>
	<head>
		<meta charset='UTF-8'>
		<meta http-equiv='X-UA-Compatible' content='IE=edge'>
		<meta name='viewport' content='width=device-width, initial-scale=1.0'>
		<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css' integrity='sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N' crossorigin='anonymous'>
		<link rel='shortcut icon' href='{{ $icon }}' type='png'>
		<link rel='stylesheet' href='{{ $style }}'>
		<title>{{ $title; }}</title>
	</head>
	<body>
		<!-- Header -->
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-ligth">
				<a href="../index" class="navbar-brand">Cool Store GT</a>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item {{ ( $location == 'welcome' ) ? 'active' : ''; }}" id="nav-item-home">
							<a class="nav-link" href="../index">Inicio <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item {{ ( $location == 'categories' ) ? 'active' : ''; }}" id="nav-item-categories">
							<a class="nav-link" href="../categories">Categorías</a>
						</li>
						<li class="nav-item {{ ( $location == 'contact' ) ? 'active' : ''; }}" id="nav-item-contact">
							<a class="nav-link" href="../contact">Contacto</a>
						</li>
						<li class="nav-item {{ ( $location == 'misionVision' ) ? 'active' : ''; }}" id="nav-item-mision-vision">
							<a class="nav-link" href="../misionVision">Misión-Visión</a>
						</li>
						<?php	if ( $isLoggedIn ){ ?>
								<li class="nav-item" id="nav-item-logout">
									<a class="nav-link" href="../logout">Logout</a>
								</li>
							<?php } else{  ?>
								<li class="nav-item" id="nav-item-login">
									<a class="nav-link {{ ( $location == 'login' ) ? 'active' : ''; }}" href="../login">Login</a>
								</li>
						<?php }  ?>
					</ul>
				</div>
			</nav>
		</header>
		<!-- Inner Display -->
		<div class="main-container">
            <div class="container-fluid">
                @foreach ($products[$category] as $element => $item)
                    <div class="container-sm">
                        <h3>{{ htmlentities($item['nombre']) }}</h3>
                        <p>
                            {{ htmlentities($item['descripcion']) }}
                        </p>
                        <button class="btn btn-link">
                            <a href="{{ $item['url'] }}" >
                                Ver articulo
                            </a>
                        </button>
                        <span class="pequenio_precio">
                            Q. {{ number_format($item['precio'], '2', '.', ','); }}
                        </span>
                    </div>
                @endforeach
            </div>
        </div>
		<!-- Footer -->
		<footer>
			<hr>
			<a href='https://www.facebook.com/' class='socialLink' target='_blank'>Facebook: &#64CoolStoreGT</a>&nbsp&nbsp
			<a href='https://www.instagram.com/' class='socialLink' target='_blank'>Instagram: &#64CoolStoreGT</a>&nbsp&nbsp
			<a href='https://www.twitter.com/' class='socialLink' target='_blank'>Twitter: &#64CoolStoreGT</a>&nbsp&nbsp
			<a href='https://www.youtube.com/' class='socialLink' target='_blank'>YouTube: Cool Store GT</a><br>
			&copy; 2022 - Cool Store GT
		</footer>
	</body>
</html>