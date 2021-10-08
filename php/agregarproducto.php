<?php
  include ("../conexion/conexion.php");

date_default_timezone_set("America/Tegucigalpa");
/*Recepción de información*/

$correlativo =  $_POST["correlativo"];/*Correlativo no*/
$descripcionproducto = $_POST["descripcionproducto"]; /*Descripcion */

$precioproducto = $_POST["precioproducto"];/*Costo si*/
$proveedorproducto = $_POST["proveedorproducto"];/*Valor si*/
$costoproducto = $_POST["costoproducto"];/*año si*/
$categoriapro = $_POST["categoriapro"];/*ISV si*/
$fecha=date('Y-m-d');



$cantidad=0;
    try {

        
        
$sql="INSERT INTO producto(codigo_producto, descripcion_producto, costo, precio,
fecha_creacion, fecha_vencimiento, categoria, cantidad, Id_proveedor) 
VALUES(:mycorrelativo, :myname,  :myanio , :mycosto,:myfecha,:myfecha2 , :myISV, :mycantidad, :myvalor )";

$resultado = $base->prepare($sql);

$resultado->execute(array(":mycorrelativo"=>$correlativo, ":myname"=>$descripcionproducto, ":myanio"=>$costoproducto,":myfecha"=>$fecha,":myfecha2"=>$fecha, 
":mycosto"=>$precioproducto, ":myISV"=>$categoriapro, ":mycantidad"=>$cantidad,
":myvalor"=>$proveedorproducto));

} 
catch (exception $e) {
    die("Error: " . $e->getMessage());

}




?>