<?php

    include ("../conexion/conexion.php");

        $nombre = $_POST["categoria"];
       
    



        try {
            $sql="INSERT INTO categoria (descripcion) 
                VALUES (:myname )";
    
            $resultado = $base->prepare($sql);
    
            $resultado->execute(array(":myname"=>$nombre));
    
    

            } 
            catch (exception $e) {
                die("Error: " . $e->getMessage());

            }
// }


?>