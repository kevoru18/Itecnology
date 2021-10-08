<?php
// function agregar_usuario() {
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
            $sql="INSERT INTO clientes(nombre, identidad, telefono, direccion, tipo_usuario, usuario, clave,estado) 
                VALUES (:myname,:myid, :myphone, :myaddress, :mypermits, :myusername, :mypass,  :mystatus)";
    
            $resultado = $base->prepare($sql);
    
            $resultado->execute(array(":myname"=>$nombre,":myid"=>$identidad, ":myphone"=>$phone, ":myaddress"=>$address,
                    ":mypermits"=>$permits, ":myusername"=>$user, 
                    ":mypass"=>$passcifrado, ":mystatus"=>$status));
    
    

            } 
            catch (exception $e) {
                die("Error: " . $e->getMessage());

            }
// }


?>