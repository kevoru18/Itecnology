<?php
date_default_timezone_set("America/Tegucigalpa");
include ("../conexion/conexion.php");

/*Recepción de información*/
$codinuevafactura=$_POST["codinuevafactura"];
$estado=$_POST["estado"];
$codigoproducto =$_POST["codigoproducto"];
$codiproveedor =$_POST["codiproveedor"];
$costo = $_POST["costo"];
$cantidadpro = $_POST["cantidadpro"];
$totalcosto= $costo*$cantidadpro;
$usuario=  $_SESSION["nombre"];
$pventa=$_POST["pventa"];
$idcreador=1;
$fecha=date("Y-m-d");
try{
 


$sql="INSERT INTO orden_pedido(num_factura, cantidad, costo, id_producto, id_creador, id_proveedor, sub_total, total, estado, fecha_creacion,precio) 
VALUES (:mycodigopedido,:mycantidadpro,  :mycosto, :mycodigoproducto, :myusuario,  :mycodiproveedor, :mytotalcosto, :mytotalcosto2, 
 :myestado, :mydate, :myprecio)";

$resultado = $base->prepare($sql);

$resultado->execute(array("mycodigopedido"=>$codinuevafactura, ":mycodigoproducto"=>$codigoproducto, 
 ":mycosto"=>$costo, ":mycantidadpro"=>$cantidadpro,
":mytotalcosto"=>$totalcosto, ":mytotalcosto2"=>$totalcosto, ":myestado"=>$estado, ":mydate"=>$fecha, ":myusuario"=> $idcreador,
 ":mycodiproveedor"=>$codiproveedor, ":myprecio"=>$pventa));

 
}catch(Exception $e){
die("Error: " . $e->getMessage());

}




?>