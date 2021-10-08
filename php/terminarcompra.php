<?php 
    include ("../conexion/conexion.php");
    
   

    $sql="select * from  orden_pedido where estado='Pendiente'";
    $resultado=$base->prepare($sql);
    $resultado->execute();
   while ($a = $resultado->fetch(PDO::FETCH_ASSOC)) {
        $codigoproducto=$a['id_producto'];
        $cantidadasumar=intval($a['cantidad']);
        $costo=intval($a['costo']);
        $precio=intval($a['precio']);
        $valor="select cantidad from  producto where Id_producto=$codigoproducto";
        $resultadovalor=$base->prepare($valor);
        $resultadovalor->execute();
//        echo "Codigo",$codigoproducto, " cantidad ",$cantidadasumar;
        while ($b = $resultadovalor->fetch(PDO::FETCH_ASSOC)) {
            $cantidad=intval($b['cantidad']);
            $sumatoria=$cantidadasumar+$cantidad;
            // echo "producto",$cantidad," ",$sumatoria ;
             $base->query("update producto set cantidad=$sumatoria, costo=$costo, precio=$precio where Id_producto=$codigoproducto");
     

        }






 $base->query("update orden_pedido set estado='Procesado'");
    
header("location:../compras.php");

   }










?>