<?php

    include ("../conexion/conexion.php");

        $nombre = $_POST["nombre"];
        $identidad=$_POST["identidadproveedor"];
        $phone =$_POST["phone"];
        $address = $_POST["address"];
        $empresa = $_POST["empresa"];
       




        try {
            $sql="INSERT INTO proveedor(nombre, identidad, empresa, telefono, direccion) 
                VALUES (:myname,:myid,:myempresa, :myphone, :myaddress)";
    
            $resultado = $base->prepare($sql);
    
            $resultado->execute(array(":myname"=>$nombre,":myid"=>$identidad, ":myempresa"=>$empresa, 
            ":myphone"=>$phone, ":myaddress"=>$address));
    
    

            } 
            catch (exception $e) {
                die("Error: " . $e->getMessage());

            }
// }


?>