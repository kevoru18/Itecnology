<?php
include("../Conexion/conexion.php");

$Id=$_GET['Id'];
$base->query("update usuarios set estado='Inactivo' where Id=$Id");
header("location:../index.php");



?>