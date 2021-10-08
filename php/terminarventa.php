<?php 
session_start();
    include ("../conexion/conexion.php");
    
   
    $cliente=$_SESSION['codigo'];
    $sql="select * from  tempventas where estado='Pendiente' and cliente=$cliente";
    $resultado=$base->prepare($sql);
    $resultado->execute();
   while ($a = $resultado->fetch(PDO::FETCH_ASSOC)) {
        $codigoproducto=$a['codigo_producto'];
        $cantidadarestar=intval($a['cantidad']);
        $valor="select cantidad from  producto where Id_producto=$codigoproducto";
        $resultadovalor=$base->prepare($valor);
        $resultadovalor->execute();
//        echo "Codigo",$codigoproducto, " cantidad ",$cantidadasumar;
        while ($b = $resultadovalor->fetch(PDO::FETCH_ASSOC)) {
            $cantidad=intval($b['cantidad']);
            $resultadoresta=$cantidad-$cantidadarestar;
            // echo "producto",$cantidad," ",$sumatoria ;
             $base->query("update producto set cantidad=$resultadoresta where Id_producto=$codigoproducto");
     

        }






 $base->query("update tempventas set estado='Procesado' where estado='Pendiente' and cliente=$cliente");
    
header("location:../principal.php");

   }










?>