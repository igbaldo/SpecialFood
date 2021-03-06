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
  <title>SpecialFood</title>

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
       </head>
       <body>	
        <header id="header" class="absolute">
         <div class="container iniciar_sesion2">
            <div class="row">			
                <nav id="nav-menu">
                    <ul class="nav-menu ">
                        <li class="volver"><a href="/comercio/comerciolist"> << Volver</a></li>
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

<script>

    function PostForm() {
        if (IsValid()) {
            $("#lblErrorP").text("");

            document.forms["frmComercio"].submit();
        }
    }

    function IsValid() {
        HideDivMessageP();

        var field;

        field = $("#Comercio_nombre").val();
        if (field.length == 0) {
            $("#lblErrorP").text("Debe ingresar el nombre del comercio.");
            ShowDivMessageP();
            return false;
        }

        field = $("#Comercio_CUIT").val();
        if (field.length == 0) {
            $("#lblErrorP").text("Debe ingresar el CUIT del comercio.");
            ShowDivMessageP();
            return false;
        }

        return true;
    }

    function ShowDivMessageP() {
        scroll(0, 0);
        $("#divMessagesP").show("slow", function () { });
    }

    function HideDivMessageP() {
        $("#divMessagesP").hide();
    }

</script>
 <!-- start banner Area -->
 <section class="banner-area">		
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xs-12 col-sm-8 col-md-8 col-sm-offset-4 col-md-offset-4 espacio">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title letra-blanca">Datos del Comercio</h2>
                    </div>
                    <div id="divMessagesP" style="display: none;">
                        <p align="left">
                            <div class="alert alert-danger" style="text-align: left;">
                                <label id="lblErrorP" style="font-size: 12px; color: firebrick; font-weight: bold; margin-left: 5px;"></label>
                            </div>
                        </p>
                    </div>
                    <div class="panel-body">
                        <form action="/comercio/guardar" method="post" id="frmComercio" name="frmComercio">
                          <br/>
                          <input type="text" style="display: none;" name="Comercio_id" id="Comercio_id" value="<?php echo $data['IdComercio']; ?>" />
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                  <label class="letra-blanca">Nombre Comercio:</label>
                                  <input type="text" name="Comercio_nombre" id="Comercio_nombre" value="<?php echo $data['Nombre']; ?>" class="form-control input-sm" placeholder="Nombre*">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="letra-blanca">CUIT: </label>
                                      <input type="text" name="Comercio_CUIT" id="Comercio_CUIT" value="<?php echo $data['CUIT']; ?>" class="form-control input-sm" placeholder="CUIT*">
                                  </div>
                              </div>                            
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <input type="button" value="Volver" onclick="window.location.assign('/Comercio/ComercioList');" class="btn btn-info btn-block">
                            </div>
                          </div>
                          <br/>
                          <div class="row">
                            <div class="col-md-12">
                              <input type="button" onclick="PostForm(); return false;" value="Guardar" class=" btn btn-info btn-block">
                            </div>
                          </div>
                        </form>
                    </div>
            </div>
          </div>
        </div>
</div>
</section>
<footer class="footer-area">
   <?php
      include 'footer.php';
    ?>
</footer>
<script
src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="/js/validar-formulario.js"></script>           
</body>
</html>