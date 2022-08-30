<?php


		function card( $src, $alt, $cardTitle, $txt, $url, $goTo ){ ?>
            <div class="card">
                <img class="card-img-top" src="<?php echo $src; ?>" alt="<?php echo $alt; ?>" />
                <div class="card-body">
                  <h5 class="card-title"><?php echo $cardTitle; ?></h5>
                  <p class="card-text"><?php echo $txt; ?></p>
                  <a href="<?php echo $url; ?>" class="btn btn-success"><?php echo $goTo; ?></a>
                </div>
            </div>
<?php   } ?>



<!DOCTYPE html>
	<head>
		<meta charset='UTF-8'>
		<meta http-equiv='X-UA-Compatible' content='IE=edge'>
		<meta name='viewport' content='width=device-width, initial-scale=1.0'>
		<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css' integrity='sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N' crossorigin='anonymous'>
		<link rel='shortcut icon' href='<?php echo $icon; ?>' type='png'>
		<link rel='stylesheet' href='<?php echo $style; ?>'>
        <link rel="stylesheet" href="../css/categories.css">
		<title><?php echo $title; ?></title>
	</head>
	<body>
		<!-- Header -->
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-ligth">
				<a href="./index.php" class="navbar-brand">Cool Store GT</a>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item <?php echo ( $location == 'welcome' ) ? 'active' : ''; ?>" id="nav-item-home">
							<a class="nav-link" href="./index">Inicio <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item <?php echo ( $location == 'categories' ) ? 'active' : ''; ?>" id="nav-item-categories">
							<a class="nav-link" href="./categories">Categorías</a>
						</li>
						<li class="nav-item <?php echo ( $location == 'contact' ) ? 'active' : ''; ?>" id="nav-item-contact">
							<a class="nav-link" href="./contact">Contacto</a>
						</li>
						<li class="nav-item <?php echo ( $location == 'misionVision' ) ? 'active' : ''; ?>" id="nav-item-mision-vision">
							<a class="nav-link" href="./misionVision">Misión-Visión</a>
						</li>
						<?php	if ( $isLoggedIn ){ ?>
								<li class="nav-item" id="nav-item-logout">
									<a class="nav-link" href="./logout">Logout</a>
								</li>
							<?php } else{  ?>
								<li class="nav-item" id="nav-item-login">
									<a class="nav-link <?php echo ( $location == 'login' ) ? 'active' : ''; ?>" href="./login">Login</a>
								</li>
						<?php }  ?>
					</ul>
				</div>
			</nav>
		</header>
		<!-- Inner Display -->
        <div class="main-container">
            <div class="container-fluid">
                <h1>Categorias</h1>
                <br/>
                <p>Aquí encontrarás nuestras categorías para que puedas encontrar con mayor facilidad los productos que buscas.</p>
                <div class="categories">
                    <?php card("./img/ropa.jpg", "Ropa", "Ropa", "Esta es la seccion mas exclusiva en la ropa mas a la moda y de mejor calidad para nuestros clientes.", "categories/category=ropa", "Ver más...") ?>
                    <?php card("./img/zapatos.jpg", "Zapatos", "Zapatos", "Conoce todos los estilos que tenemos para ti, buscando combinar con tus mejores <i>outfits</i> y con comodidad siempre.", "categories/category=zapatos", "Ver tallas...") ?>
                    <?php card("./img/grocery-store.jpg", "Comestibles", "Comestibles", "Prueba la exquisita variedad de comestibles que tenemos disponibles para ti. Sabemos lo importante que es comer rico y saludable.", "categories/category=comestibles", "Ver más...") ?>
                    <?php card("./img/electrodomesticos.jpg", "Electrodomesticos", "Electrodomesticos", "Esta es tu oportunidad para conocer esos electrodomesticos que dia a dia complementan tu casa con variada utilidad.", "categories/category=electrodomesticos", "Comprar ahora") ?>
                    <?php card("./img/tupper.jpg", "Tupper", "Tupper", "Porque sabemos que siempre necesitas uno mas para guardar tu comida lo mejor posible. Puedes adquirirlos todos con nosotros.", "categories/category=tupper", "Comprar ahora") ?>
                </div>
                <div class="categories">
                <?php card("./img/juegos-de-mesa.jpg", "Juegos de Mesa", "Juegos de Mesa", "Los mejores juegos de mesa para entretenerte, razonar y pasar un buen tiempo en familia o con amigos.", "categories/category=juegosDeMesa", "Ver más...") ?>
                <?php card("./img/libros.jpg", "Libros", "Libros", "¿Buscas una buena lectura? Aquí encontrarás los mejores libros de una gran cantidad de autores para que estudies o te entretengas con el mejor contenido literario.", "categories/category=libros", "Comprar ahora") ?>
                <?php card("./img/instrumentos-musicales.jpg", "Instrumentos Musicales", "Instrumentos Musicales", "Si lo tuyo es la música, este es tu espacio. Contamos con los mejores instrumentos y accesorios musicales que te permitiran llevar tu ejecución a otro nivel.", "categories/category=instrumentosMusicales", "Comprar ahora")?>
                <?php card("./img/herramientas.jpg", "Herramientas", "Herramientas", "Si necesitas hacer alguna reparación cuenta con nuestro departamento de ferretería. Encontrarás todo lo necesario para ser un experto en construcción", "categories/category=herramientas", "Ver más...") ?>
                <?php card("./img/membresia.png", "Membresia Premium", "Membresia Premium", "¿Aún no eres un socio <i>Premium</i>? ¿Qué esperas? Obtendrás descuentos especiales, productos y servicios exclusivos", "categories/category=membresia", "Suscribirse!") ?>
                </div>
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