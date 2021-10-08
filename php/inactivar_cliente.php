<?php
include("../Conexion/conexion.php");

$Id=$_GET['Id'];
$base->query("update clientes set estatus='Inactivo' where id_cliente=$Id");
header("location:../clientes.php");



?>