<?php
include("../Conexion/conexion.php");

$Id=$_GET['Id'];
$compra=$_GET['cod'];
$base->query("update orden_pedido set estado='Eliminado' where id_producto=$Id and num_factura=$compra");

header("location:../compras.php");



?>