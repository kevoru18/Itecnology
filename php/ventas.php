<?php
date_default_timezone_set("America/Tegucigalpa");
 session_start();
// if (isset($_SESSION["permits"])!="Administrador")
// {
//   header("location:../principal.php");

// }else {
//     if(!isset($_SESSION["usuario"])  ) {
//         header("location:../principal.php");

//     }else {


// function agregar_usuario() {
    include ("../conexion/conexion.php");
  
try {
    $id = $_GET["Id"];
    $cliente =$_SESSION["codigo"];
   
                $sqlproducto="SELECT * FROM producto WHERE codigo_producto=$id" ;
                 $resultadoproducto=$base->prepare($sqlproducto);
                 $resultadoproducto->execute();
  
                 while ($aproducto = $resultadoproducto->fetch(PDO::FETCH_ASSOC)) {
                    $codigoproducto= $aproducto['codigo_producto'];
                    $precioproducto=intval($aproducto['precio']);
                    $cantidad=1;
                    $total=$cantidad*$precioproducto;
                    $estado="Pendiente";
                    $fecha=date("Y-m-d");


             $sql="INSERT INTO tempventas(codigo_producto, precioU, cantidad, precio_total, estado, fecha_creacion_factura, cliente) 
               VALUES (:mycodigo,:myprecio, :mycantidad, :mytotal,  :mystatus, :myfecha, :myusername)";
    
             $resultado = $base->prepare($sql);
    
             $resultado->execute(array(":mycodigo"=>$codigoproducto,":myprecio"=>$precioproducto, ":mycantidad"=>$cantidad, 
             ":mytotal"=>$total, ":mystatus"=>$estado, ":myfecha"=>$fecha, ":myusername"=>$cliente
                     ));
    
    

            } 
           

    }catch (exception $e) {
        die("Error: " . $e->getMessage());

        }
// }
// }
header("location:../principal.php");
?>
