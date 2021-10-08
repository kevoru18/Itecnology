<?php
include('../conexion/conexion.php');

// require("../Conection/config.php");
/*Recepción de información*/
$ide = (isset($_POST['ide'])) ? $_POST['ide'] : "";
$position = (isset($_POST['nombre'])) ? $_POST['nombre'] : "";
$sql="update categoria set descripcion=:myposition where Id_categoria=:myid";
$resultado=$base->prepare($sql);
$resultado->execute(array(":myid"=>$ide,":myposition"=>$position
));
//header("location:../index.php");

// ?>
 