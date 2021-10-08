<?php
include('../conexion/conexion.php');

// require("../Conection/config.php");
/*Recepción de información*/
 
$ide = (isset($_POST['ide'])) ? $_POST['ide'] : "";
$costo = (isset($_POST['position'])) ? $_POST['position'] : "";
$precio= (isset($_POST['office'])) ? $_POST['office'] : "";
$descripcion=(isset($_POST['phone'])) ? $_POST['phone'] : "";
$codigo=(isset($_POST['nombre'])) ? $_POST['nombre'] : "";
$sql="update producto set descripcion_producto=:myposition, costo=:mycosto, precio=:myprecio where Id_producto=:myid";
$resultado=$base->prepare($sql);
$resultado->execute(array(":myid"=>$ide,":myposition"=>$descripcion,":mycosto"=>$costo,":myprecio"=>$precio
));
//header("location:../index.php");

// ?>
 