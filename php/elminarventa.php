<?php
include("../Conexion/conexion.php");

$Id=$_GET['Id'];
$compra=$_GET['cod'];
$base->query("update tempventas set estado='Eliminado' where codigo_producto=$Id and Id=$compra");

header("location:../terminarventa.php");



?>