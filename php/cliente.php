<?php

    include ("../conexion/conexion.php");

        $nombre = $_POST["nombre"];
        $identidad=$_POST["identidadusuario"];
        $phone =$_POST["phone"];
        $address = $_POST["address"];
        $permits = $_POST["permits"];
        $user =  $_POST["user"];
        $pass =  $_POST["pass"];
        $passcifrado =$pass;
        $status = $_POST["statusa"];

    



        try {
            $sql="INSERT INTO clientes (rtn, nombre_p,   direccion_p, telefono_p, empresa, estatus,  usuario, clave) 
                VALUES (:myid, :myname,  :myaddress, :myphone, :mypermits,  :mystatus,  :myusername, :mypass )";
    
            $resultado = $base->prepare($sql);
    
            $resultado->execute(array(":myname"=>$nombre,":myid"=>$identidad, ":myphone"=>$phone, ":myaddress"=>$address,
                    ":mypermits"=>$permits,":myusername"=>$user, 
                    ":mypass"=>$passcifrado, ":mystatus"=>$status));
    
    

            } 
            catch (exception $e) {
                die("Error: " . $e->getMessage());

            }
// }


?>