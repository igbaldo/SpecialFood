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
  <title>SpecialFood - Productos</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
            <!--
            CSS
            ============================================= -->
            <link rel="stylesheet" href="/css/linearicons.css">
            <link rel="stylesheet" href="/css/font-awesome.min.css">
            <link rel="stylesheet" href="/css/bootstrap.css">
            <link rel="stylesheet" href="/css/magnific-popup.css">
            <link rel="stylesheet" href="/css/jquery-ui.css">               
            <link rel="stylesheet" href="/css/nice-select.css">                         
            <link rel="stylesheet" href="/css/animate.min.css">
            <link rel="stylesheet" href="/css/owl.carousel.css">                
            <link rel="stylesheet" href="/css/main.css">
            <link rel="stylesheet" href="/css/custom.css">

      <header id="header">
        <div class="header-top">
                <div class="container">
                    <div class="row justify-content-center">
                        <div id="logo">
                         <a href="index.html"><img src="../img/logo.png" alt="" title="" /></a>
                     </div>
                 </div>                             
             </div>
         </div>
        <div class="container main-menu">
          <div class="row align-items-center justify-content-center d-flex">      
            <nav id="nav-menu-container">
              <ul class="nav-menu">
                <li><a href="index.html">Inicio</a></li>
                <li><a href="about.html">Nosotros</a></li>
                <li><a href="menu.html">Menú</a></li>
                <li><a href="contact.html">Contacto</a></li>

                <li class="derecha"></li>
                <li><button class="primary-btn1"><a href="iniciar-sesion.html">Iniciar sesión</a></li></button>
                <li><button class="primary-btn1"><a href="registrarse.html">Registrarse</a></li></button>
                
              </ul>
            </nav>                    
          </div>
        </div>
      </header><!-- #header -->
      <section class="banner-area1">   
        <div class="container">
          <div class="row fullscreen align-items-center justify-content-between ">
            
            <div class="cajag">
            
              <div class="caja10">


                <?php

                if($data != NULL){
                  foreach ($data as $element){

                        echo
                              "<form action='/product/irACarrito' method='GET'>".
                              "<div class='cajaparaboton'>". 
                              "<div class='cajaimagen'>"."<img class='imagencomida' src=".$element['Foto'].">"."</div>".
                                 "<div class='cajaparaboton2'>".$element['Descripcion']."<br>".$element['Precio']."<br>".
                                 "<input type='number' id='cantidad' name='Cantidad' min='1' max='100' value='1'>"."<br>".
                                 "<input type='text' name='IdProducto' visibility: hidden value=".$element['IdMenuComercioItem'].">"."<br>".
                              "<input type='submit' value='Agregar al carrito' class='btn btn-info btn-block'>".
                              "</div>".
                              "</div>".
                              
                              "</form>" ;
                    }
                }

                ?> 
                 
            </div>
          </div>
        </div>
      </section>


      

      <footer class="footer-area">
   <?php
      include 'footer.php';
    ?>
</footer>
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
