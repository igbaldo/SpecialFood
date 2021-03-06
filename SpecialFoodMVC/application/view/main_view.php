	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>SpecialFood - Inicio</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="../css/linearicons.css">
			<link rel="stylesheet" href="../css/font-awesome.min.css">
			<link rel="stylesheet" href="../css/bootstrap.css">
			<link rel="stylesheet" href="../css/magnific-popup.css">
			<link rel="stylesheet" href="../css/jquery-ui.css">				
			<link rel="stylesheet" href="../css/nice-select.css">							
			<link rel="stylesheet" href="../css/animate.min.css">
			<link rel="stylesheet" href="../css/owl.carousel.css">				
			<link rel="stylesheet" href="../css/main.css">
			<link rel="stylesheet" href="../css/custom.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		</head>
		<body>	
			<header id="header">
				<div class="header-top">
					<div class="container">
				  		<div class="row justify-content-center">
						      <div id="logo">
						        <a href="/main"><img src="/img/logo.png" alt="" title="" /></a>
						      </div>
				  		</div>			  					
					</div>
				</div>
				<div class="container main-menu">
					<div class="row align-items-center justify-content-center d-flex">			
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
					        

							<?php
							 if (isset($_SESSION['IdPerfil'])){
								if ($_SESSION['IdPerfil'] == 1){ //admin
									?>
									<li><a href="/">Inicio</a></li>
									<li><a href='/aprobacionUsuario/ListarAprobacionUsuarios'>Aprobar Usuarios</a></li>
									<li><a href='/informes/informeslist'>Informes y Estadísticas</a></li>
									<li><a href='/Comercio/ComercioList'>Administrar Comercios</a></li>
									<li><a href='/pedido/pedidolist'>Pedidos</a></li>
									<li><a href='/cobranza/cobranzascomercio'>Liquidar Comercios</a></li>
									<li><a href='/cobranza/liquidacionescomercio'>Ver Liquidaciones</a></li>
									<?php
								}else if($_SESSION['IdPerfil'] == 2){ //Comercio
									?>
									<li><a href="/">Inicio</a></li>
									<li><a href='/Menu/ListarMenu'>Mis Menúes</a></li>
									<li><a href='/pedido/pedidolist'>Pedidos</a></li>
									<li><a href='/puntodeventa/puntodeventalist'>Puntos de venta</a></li>
									<li><a href='/cobranza/cobranzasdelivery'>Liquidar Deliverys</a></li>
									<li><a href='/cobranza/liquidacionesdelivery'>Ver Liquidaciones</a></li>
							<?php
								}else if($_SESSION['IdPerfil'] == 3){ //Delivery
									?>
									<li><a href="/">Inicio</a></li>
									<li><a href='/pedido/pedidolist'>Pedidos</a></li>			
									<li><a href='/cobranza/cobranzasdelivery'>Mis Cobranzas</a></li>
							<?php
								}
								else if($_SESSION['IdPerfil'] == 4){ //Cliente
									?>
									<li><a href="/">Inicio</a></li>
									<li><a href='/product/listarProductos'>Realizar Pedido</a></li>
									<li><a href='/pedido/pedidolist'>Pedidos</a></li>
									<li><a href='/product/verCarritoDeCompra'><span class="glyphicon glyphicon-shopping-cart letra-blanca"></a></span></li>
							<?php
								}
							 }else{
							 	?>
							 	<li><a href="/">Inicio</a></li>
									<li><a href='/product/listarProductos'>Realizar Pedido</a></li>
					        <?php
							}
							?>	
					        
							<li class="derecha">
							<?php
							 if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
							 	?>
							 	<li><a href="#" onclick="IrAMiPerfil(); return false;"><?PHP echo $_SESSION['nombre']; ?></a></li>
						        <li><a href='/login/cerrarSesion'>Cerrar Sesion</a></li>
						         <?php
							 }else{								
								?>
							 	<li><a href='/main/iniciarsesion'>Iniciar Sesión</a></li>
						        	<li><a href='/registro/cargarPantalla'>Registrarse</a></li>
						        <?php
							 }
							?>
							</li>				        						
						</ul>
				      </nav>				      		  
					</div>
				</div>
			</header><!-- #header -->
			
			<script>
				function IrAMiPerfil() {
					<?php $session_IdUsuario=(isset($_SESSION['IdUsuario']))?$_SESSION['IdUsuario']:''; ?>
					var IdUsuario='<?php echo $session_IdUsuario;?>';

					window.location.assign("/registro/cargarPantalla2?id=" + IdUsuario);
				};
			</script>
			<!-- start banner Area -->
			<section class="banner-area">		
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between ">
						<div class="col-lg-12 banner-content">
							<h1 class="text-white">Comida al alcance de tu celular</h1>
							<p class="text-white">
								Amamos la comida tanto como vos y por eso queremos llevar a tu mesa, tu comida favorita directamente desde la cocina de los mejores restaurantes. ¿La mejor parte? ¡Te la llevamos donde estés!
							</p>							
							<form method="get" action="/" class="form-inline" style="display: none;">
								<input name="q" class="span5" type="text"  placeholder="Buscar restaurante" >
								<input name="loc" class="span5" type="text"  placeholder="Ubicación">
								<a href="#" class="primary-btn">Buscar</a>
							</form>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->
			

			<!-- Start home-about Area -->
			<section class="home-about-area section-gap">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 home-about-left">
							<h1>Las últimas tendencias en tu ciudad</h1>
							<p>
								Descubre las tiendas más famosas y decínos qué te llevamos a tu casa. 
							</p>
							<a href="#" class="primary-btn">Ver Restaurantes</a>
						</div>
						<div class="col-lg-6 home-about-right">
							<img class="img-fluid" src="img/about-img.jpg" alt="">
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->			

			<!-- Start review Area -->
			<section class="review-area section-gap">
				<div class="container">
					<div class="row">
						<div class="active-review-carusel">
							<div class="single-review">
								<img src="img/users/Bettina.jpg" alt="">
								<h4>Bettina</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>								
								</div>	
								<p>
									“muy buen servicio y mercadería”
								</p>
							</div>
							<div class="single-review">
								<img src="img/users/Gise.jpg" alt="">
								<h4>Gise</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>								
								</div>	
								<p>
									“llegó en el tiempo establecido”
								</p>
							</div>	
							<div class="single-review">
								<img src="img/users/CesarAntonio.png" alt="">
								<h4>Cesar Antonio</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>								
								</div>	
								<p>
									“Puse solo 3 en comida porque recibí 12 piezas de sushi riquísimas pero no eran las que había pedido... (rolls caliente de langostino empanizado en lugar de rolls de salmón ahumado. Dada la hora y que realmente estaba súper rico me dió lo mismo.”
								</p>
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End review Area -->					

			<!-- start footer Area -->		
			<footer class="footer-area">
				<?php 
					include ('footer.php');
				?>
			</footer>
			<!-- End footer Area -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>		
 			<script src="js/jquery-ui.js"></script>					
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>					
			<script src="js/owl.carousel.min.js"></script>			
            <script src="js/isotope.pkgd.min.js"></script>								
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>