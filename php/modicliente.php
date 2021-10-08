<?php
include('../conexion/conexion.php');

// require("../Conection/config.php");
/*Recepción de información*/
$ide = (isset($_POST['ide'])) ? $_POST['ide'] : "";
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : "";
$phone = (isset($_POST['telefonomodificar'])) ? $_POST['telefonomodificar'] : "";
$position = (isset($_POST['idau'])) ? $_POST['idau'] : "";
$office = (isset($_POST['addressu'])) ? $_POST['addressu'] : "";
$empresamodi = (isset($_POST['empresamodi'])) ? $_POST['empresamodi'] : "";
$status = (isset($_POST['estado'])) ? $_POST['estado'] : "";
$user = (isset($_POST['user'])) ? $_POST['user'] : "";
$pass = (isset($_POST['pass'])) ? $_POST['pass'] : "";
$sql="update clientes set rtn=:myposition, nombre_p=:myname, direccion_p=:myoffice, telefono_p=:myphone, empresa=:myempresa
, estatus=:mystatus, usuario=:myuser, clave=:mypass where id_cliente=:myid";
$resultado=$base->prepare($sql);
$resultado->execute(array(":myid"=>$ide,":myposition"=>$position,":myname"=>$nombre,":myoffice"=>$office,":myphone"=>$phone,
":myempresa"=>$empresamodi,":mystatus"=>$status,":myuser"=>$user,":mypass"=>$pass
));
//header("location:../index.php");

// ?>
 
 