<!DOCTYPE html>
<html lang="es" class="no-js">
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
		<title>SpecialFood - Iniciar Sesión</title>

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
		</head>
		<body>	
		<body>	
		<header id="header" class="absolute">
			<div class="container iniciar_sesion2">
				<div class="row">			
					<nav id="nav-menu">
						<ul class="nav-menu ">
							<li class="volver"><a href="/"> << Volver</a></li>
						</ul>
					</nav>				      		  
				</div>
				</div>
				<div class="header-top">
					<div class="container">
						<div class="row justify-content-center">
							<div id="logo">
							<a href="/"><img src="/img/logo.png" alt="" title="" /></a>
						</div>
					</div>			  					
				</div>
			</div>     
		</header><!-- #header -->
								
			
        <!-- start banner Area -->
        <section class="banner-area">		
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xs-12 col-sm-8 col-md-8 col-sm-offset-4 col-md-offset-4 espacio">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title letra-blanca">Iniciar sesión</h3>
                                    <br/>
                                </div>
                                <div class="panel-body">
                                    <form role="form" action="/login/iniciar_sesion" method="post">

									<div class="row">
											<div class="col-md-6">
												 <input type="text" name="email" id="email" class="form-control input-sm" placeholder="Email">
											</div>
											<div class="col-md-6">
											<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Contraseña">
											</div>
                              			</div>
										<br><br>
										<div class="row">
											<div class="col-md-6">
												<input type="submit" value="Iniciar Sesión" class="newbutton acomodar">
											</div>
											<div class="col-md-6">
												<input type="button" onclick="window.location.assign('/registro/cargarPantalla')" value="Registrarse" class="newbutton acomodar">
											</div>
                              			</div> 
                                    </form>

									<?php

									if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false){

										session_destroy();
										echo "<div class='alert alert-danger' role='alert'>Email o Password incorrectos!";
									}
									if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true ){
										if (isset($_SESSION['estadoAprobacion1']) && $_SESSION['estadoAprobacion1'] == false){
											session_destroy();
											echo "<div class='alert alert-danger' role='alert'>Su usuario está pendiente de verificación";
										}else if (isset($_SESSION['estadoAprobacion3']) && $_SESSION['estadoAprobacion3'] == false){
											session_destroy();
											echo "<div class='alert alert-danger' role='alert'>Su usuario fue rechazado";
										}
									}
									
									?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

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
