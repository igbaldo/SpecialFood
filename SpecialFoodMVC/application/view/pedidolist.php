
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
    <!--<link rel="stylesheet" href="/css/jquery-ui.css">				-->
    <link rel="stylesheet" href="/css/nice-select.css">
    <link rel="stylesheet" href="/css/animate.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/custom.css">

    <link href='/css/jquery-ui.css' rel="stylesheet" type="text/css" />
    <link href='/css/ui.jqgrid.css' rel="stylesheet" type="text/css" />

    <script src='/js/jquery.js' type="text/javascript"></script>
    <script src='/js/jquery-1.11.1.min.js' type="text/javascript"></script>
    <script src='/js/jquery-ui.js' type="text/javascript"></script>

    <script src='/js/grid.locale-es.js' type="text/javascript"></script>
    <script src='/js/jquery.jqGrid.min.js' type="text/javascript"></script>

    <style type="text/css">
        .myAltRowClass {
            background-color: #DCFFFF;
            background-image: none;
        }

        /* fix the size of the pager */
        input.ui-pg-input {
            width: auto;
        }
        /* fix the grid width */
        table {
            border-style: none;
            border-collapse: separate;
        }

        table td {
            border-style: none;
        }

        .ui-jqdialog-content table.group th {
            background-color: inherit;
        }

        .ui-autocomplete {
            /* for IE6 which not support max-height it can be width: 350px; */
            max-height: 300px;
            overflow-y: auto; /* prevent horizontal scrollbar */
            overflow-x: hidden; /* add padding to account for vertical scrollbar */
            padding-right: 20px;
        }
        /*.ui-autocomplete.ui-menu { opacity: 0.9; }*/
        .ui-autocomplete.ui-menu .ui-menu-item {
            font-size: 0.75em;
        }

        .ui-autocomplete.ui-menu a.ui-state-hover {
            border-color: Tomato;
        }

        .ui-resizable-handle {
            z-index: inherit !important;
        }
    </style>

    <script>
        try{
            $(document).ready(function() {
                jQuery("#listPedido").jqGrid({
                    //url:'../../application/view/comerciogrid.php',
                    //url: 'application/view/comerciogrid.php?page=1&rows=20&sidx=1&sord=asc',
                    //datatype: "json",
                    datatype: "local",
                    //idpedido, fechapedido, costoentrega,tiempoestimadoentrega,idcomercio,idcliente,idpuntodeventa,fechamodificacion,idusuariomodificacion
                    colNames:['IdDelivery','IdPedido','Estado','Costo','Tiempo Entrega', 'Comercio','Dir. Comercio','Dir. Cliente',''],

                    colModel:[
                        { name:'IdDelivery', index:'IdDelivery',hidden:true, sortable: false, width: 50 },
                        { name:'IdPedido', index:'IdPedido', hidden: true, sortable: false, width: 50 },
                        { name:'Estado', index:'Estado', sortable: false, width: 50 },
                        { name:'CostoEntrega', index:'CostoEntrega', sortable: false, width: 50 },
                        { name:'TiempoEstimadoEntrega', index:'TiempoEstimadoEntrega', sortable: false, width: 90 },
                        { name:'Comercio', index:'Comercio', sortable: false, width: 70 },
                        { name:'CalleComercio', index:'CalleComercio', sortable: false, width: 120 },
                        { name:'CalleCliente', index:'CalleCliente', sortable: false, width: 120 },
                        { name: 'action', index: 'action', width: 60, align: 'center', sortable: false, search: false }
                    ], rowNum:10000, /*rowList:[10,20,30],*/ pager: '#pagerPedido', sortname: 'id',
                    viewrecords: true, sortorder: "desc", caption:"Pedidos",
                    rows: []
                });

                jQuery("#listPedido").jqGrid('navGrid','#pagerPedido', { edit: false, add: false, del: false });

                <?php $session_IdPerfil=(isset($_SESSION['IdPerfil']))?$_SESSION['IdPerfil']:''; ?>
                <?php $session_IdUsuario=(isset($_SESSION['IdUsuario']))?$_SESSION['IdUsuario']:''; ?>

                var idPerfilGrid='<?php echo $session_IdPerfil;?>';
                var idUsuarioGrid='<?php echo $session_IdUsuario;?>';


                //alert("Perfil: " + idPerfiGrid);
                //alert("Usuario: " + idUsuarioGrid);



                $.get("../../application/view/pedidogrid.php?page=1&rows=10000&sidx=1&sord=asc&idPerfil=" + idPerfilGrid + "&idUsuario=" + idUsuarioGrid, function(data){
                    $("#listPedido")[0].addJSONData(JSON.parse(data));
                    <?php $session_IdPerfil=(isset($_SESSION['IdPerfil']))?$_SESSION['IdPerfil']:''; ?>
                    <?php $session_IdUsuario=(isset($_SESSION['IdUsuario']))?$_SESSION['IdUsuario']:''; ?>

                    var idPerfilGrid='<?php echo $session_IdPerfil;?>';
                    var idUsuarioGrid='<?php echo $session_IdUsuario;?>';

                   if (idPerfilGrid==3) {


                       var ids = jQuery("#listPedido").jqGrid('getDataIDs');
                       var cont=0;


                       for (var i = 0; i < ids.length; i++) {

                           var rowId = ids[i];

                           var IdPedido = jQuery("#listPedido").jqGrid('getRowData')[i].IdPedido;
                           var IdDelivery = jQuery("#listPedido").jqGrid('getRowData')[i].IdDelivery;

                           var checkOut = "<table><tr>";
                           if (IdDelivery<1){

                               checkOut = checkOut + "<td title='Tomar' class='ui-pg-button ui-corner-all ui-state-hover' style='border: 0px; cursor:pointer;'>";
                               checkOut = checkOut + "<span class='ui-icon ui-icon-pin-s' onclick=\"Tomar(" + IdPedido + ");\"></span></td>";

                           }
                            else{

                               checkOut = checkOut +
                                   "<td title='Entregado' class='ui-pg-button ui-corner-all ui-state-hover' style='border: 0px; cursor:pointer;'>" +
                                   "<span class='ui-icon ui-icon-check' onclick=\"Entregado(" + IdPedido + ");\"></span></td>";
                           }


                           checkOut = checkOut + "</tr></table>";

                           jQuery("#listPedido").jqGrid('setRowData', rowId, {action: checkOut});
                       }
                   }
                });
            });
        }
        catch(err){
            alert(err);
        }

        function Tomar(id) {
            <?php $session_IdUsuario=(isset($_SESSION['IdUsuario']))?$_SESSION['IdUsuario']:''; ?>

            var idUsuarioGrid='<?php echo $session_IdUsuario;?>';

            window.location.assign("/pedido/tomar?id=" + id + "&idUsuario=" + idUsuarioGrid);
        };
        function Entregado(id) {
            window.location.assign("/pedido/entregado?id=" + id);
        };
    </script>
</head>
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
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-8 col-sm-offset-4 col-md-offset-4 espacio">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title letra-blanca">Pedidos</h2>

                    </div>
                    <div class="panel-body">
                        <form action="/pedido/guardar" method="post">
                            <div class="row" id="containerGrid">
                                <div class="col-md-12">
                                    <br/><br/>
                                    <table id="listPedido"></table>
                                    <div id="pagerPedido"></div>
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
<!--<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>-->
<script src="/js/validar-formulario.js"></script>

</body>
</html>