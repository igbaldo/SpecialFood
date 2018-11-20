<?php
require('../../core/helpers/conexion.php');
?>

<?php

$page = $_GET['page']; // get the requested page
$limit = $_GET['rows']; // get how many rows we want to have into the grid
$sidx = $_GET['sidx']; // get index row - i.e. user click to sort
$sord = $_GET['sord']; // get the direction
$idPerfil = $_GET['idPerfil']; // id_perfil_user
$idUsuario = $_GET['idUsuario']; // id_perfil_user
if(!$sidx) $sidx =1;

$result = mysqli_query($conexion, "SELECT COUNT(*) AS count FROM Pedido");
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

if( $count >0 )
{
    $total_pages = ceil($count/$limit);
}
// admin 1, comercio 2, delivery 3
else
{
    $total_pages = 0;
}

if ($page > $total_pages)
    $page=$total_pages;

$start = $limit*$page - $limit; // do not put $limit*($page - 1)

$SQL = "";
$SQL = $SQL . "SELECT ";
$SQL = $SQL . "     p.IdPedido ";
$SQL = $SQL . "     ,p.FechaPedido FechaPedido ";
$SQL = $SQL . "     ,p.CostoEntrega ";
$SQL = $SQL . "     ,p.TiempoEstimadoEntrega ";
$SQL = $SQL . "     ,est.Descripcion Estado";
$SQL = $SQL . "     ,c.Nombre Comercio ";
$SQL = $SQL . "     ,p.IdPuntoDeVenta PuntoDeVenta ";
$SQL = $SQL . "     ,ca.Descripcion CallePuntoDeVenta ";
$SQL = $SQL . "     ,pv.Numero NumeroPuntoDeVenta ";
$SQL = $SQL . "     ,CONCAT(cli.Nombre, ' ', cli.Apellido) NombreCliente ";
$SQL = $SQL . "     ,cau.Descripcion CalleCliente ";
$SQL = $SQL . "     ,cli.Numero NumeroCliente ";
$SQL = $SQL . "FROM ";
$SQL = $SQL . "     Pedido p ";
$SQL = $SQL . "     LEFT JOIN Comercio c ON c.IdComercio = p.IdComercio AND c.BajaLogica = 0 ";
$SQL = $SQL . "     LEFT JOIN EstadoEntrega est ON est.IdEstadoEntrega = p.IdEstadoEntrega AND est.BajaLogica = 0 ";
$SQL = $SQL . "     LEFT JOIN PuntoDeVenta pv ON pv.IdPuntoDeVenta = p.IdPuntoDeVenta AND pv.BajaLogica = 0 ";
$SQL = $SQL . "     LEFT JOIN Calle ca ON ca.IdCalle = pv.IdCalle AND ca.BajaLogica = 0 ";
$SQL = $SQL . "     LEFT JOIN Usuario cli ON cli.IdUsuario = p.IdCliente AND cli.BajaLogica = 0 ";
$SQL = $SQL . "     LEFT JOIN Calle cau ON cau.IdCalle = cli.IdCalle AND cau.BajaLogica = 0 ";
$SQL = $SQL . "WHERE ";
$SQL = $SQL . "     p.BajaLogica = 0 ";
//admin 1 , negocio 2, delivery 3
if ($idPerfil == 3)
    $SQL = $SQL . " AND est.descripcion like 'Pendiente'";
if ($idPerfil == 2)
    $SQL = $SQL . " AND p.IdUsuarioModificacion='$idUsuario'";
$SQL = $SQL . "ORDER BY ";
$SQL = $SQL . "     $sidx $sord LIMIT $start , $limit";

$result = mysqli_query($conexion, $SQL ) or die("Couldn t execute query.".mysql_error());

$response = new stdClass();

$response->page = $page;

$response->total = "$total_pages";

$response->records = $count;

$i=0;

while($row=mysqli_fetch_assoc($result))
{
    $response->rows[$i]['IdPedido']=$row['IdPedido'];
    $response->rows[$i]['FechaPedido']=$row['FechaPedido'];
    $response->rows[$i]['Estado']=$row['Estado'];
    $response->rows[$i]['CostoEntrega']=$row['CostoEntrega'];
    $response->rows[$i]['TiempoEstimadoEntrega']=$row['TiempoEstimadoEntrega'];
    $response->rows[$i]['Comercio']=$row['Comercio'];
    $response->rows[$i]['PuntoDeVenta']=$row['PuntoDeVenta'];
    $response->rows[$i]['CallePuntoDeVenta']=$row['CallePuntoDeVenta'];
    $response->rows[$i]['NumeroPuntoDeVenta']=$row['NumeroPuntoDeVenta'];
    $response->rows[$i]['NombreCliente']=$row['NombreCliente'];
    $response->rows[$i]['CalleCliente']=$row['CalleCliente'];
    $response->rows[$i]['NumeroCliente']=$row['NumeroCliente'];

    $i++;
}

echo json_encode($response);

?>