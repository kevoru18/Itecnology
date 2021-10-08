<?php
include('../conexion/conexion.php');

// require("../Conection/config.php");
/*Recepción de información*/

$ide = (isset($_POST['ide'])) ? $_POST['ide'] : "";
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : "";
$phone = (isset($_POST['telefonomodificar'])) ? $_POST['telefonomodificar'] : "";
$position = (isset($_POST['idau'])) ? $_POST['idau'] : "";
$office = (isset($_POST['addressu'])) ? $_POST['addressu'] : "";
$permits = (isset($_POST['permits'])) ? $_POST['permits'] : "";
$status = (isset($_POST['estado'])) ? $_POST['estado'] : "";
$user = (isset($_POST['user'])) ? $_POST['user'] : "";
$pass = (isset($_POST['pass'])) ? $_POST['pass'] : "";
$sql="update usuarios set nombre=:myname, identidad=:myposition, telefono=:myphone ,  direccion=:myoffice, 
tipo_usuario=:mypermits,  usuario=:myuser, clave=:mypass, estado=:mystatus  where Id=:myid";
$resultado=$base->prepare($sql);
$resultado->execute(array(":myid"=>$ide, ":myname"=>$nombre ,":myposition"=>$position ,":myphone"=>$phone,    
 ":myoffice"=>$office,":mypermits"=>$permits,":mystatus"=>$status,":myuser"=>$user,":mypass"=>$pass
));
//header("location:../index.php");

// ?>