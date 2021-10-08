<?php
include('../conexion/conexion.php');


/*Recepción de información*/

$ide = (isset($_POST['iduserumodi'])) ? $_POST['iduserumodi'] : "";
$nombre = (isset($_POST['nameumodi'])) ? $_POST['nameumodi'] : "";
$phone = (isset($_POST['telefonomodificarpro'])) ? $_POST['telefonomodificarpro'] : "";
$position = (isset($_POST['idau'])) ? $_POST['idau'] : "";
$empresa= (isset($_POST['empresampro'])) ? $_POST['empresampro'] : "";
$office = (isset($_POST['addressupro'])) ? $_POST['addressupro'] : "";
$sql="update proveedor set nombre=:myname
, identidad=:myposition, empresa=:myempresa, 
telefono=:myphone ,  direccion=:myoffice where Id_proveedor=:myid";
$resultado=$base->prepare($sql);
$resultado->execute(array(":myid"=>$ide, ":myname"=>$nombre
,":myposition"=>$position ,":myempresa"=>$empresa,":myphone"=>$phone,    
 ":myoffice"=>$office ));
//header("location:../index.php");

// ?> 
