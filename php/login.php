<?php 
include ("../conexion/conexion.php");
try {
        /* Obtener valores del input */
        $login=htmlentities(addslashes($_POST["user-name"]));
        $password=htmlentities(addslashes($_POST["User-Password"]));
/*        $passwordprueba=password_verify($password,);*/
        $contador=0;
        $sql="select * from usuarios where usuario =:login AND clave =:pass AND estado= 'Activo'";
        $consultausuarios=$base->prepare($sql);
        $consultausuarios-> bindValue(":login",$login);
        $consultausuarios-> bindValue(":pass",$password);
        $consultausuarios->execute();
        $numero_registro=$consultausuarios->rowcount();
        if ($numero_registro!=0){
        
             $sql1=("SELECT * FROM usuarios WHERE usuario='$login'");
             $resultadoproducto=$base->prepare($sql1);
             $resultadoproducto->execute();
            while ($usuarios = $resultadoproducto->fetch(PDO::FETCH_ASSOC)) {
                 
                session_start();
                $_SESSION["usuario"]= $usuarios['usuario'];
            
                $_SESSION["nombre"]= $usuarios["nombre"];
            
                $_SESSION["permits"]= $usuarios["tipo_usuario"];
                header("location:../index.php");
            
        }
    }  
    else {
        $sqlclientes="select * from clientes where usuario =:login AND clave =:pass AND estatus= 'Activo'";
        $consultaclientes=$base->prepare($sqlclientes);
        $consultaclientes-> bindValue(":login",$login);
        $consultaclientes-> bindValue(":pass",$password);
        $consultaclientes->execute();
        $numero_registroclientes=$consultaclientes->rowcount();
        

        if ($numero_registroclientes!=0){
          
            $sql1clientes=("SELECT * FROM clientes WHERE usuario='$login'");
            $resultadoclientes=$base->prepare($sql1clientes);
            $resultadoclientes->execute();
            
            while ($clientes = $resultadoclientes->fetch(PDO::FETCH_ASSOC)) {
                
       
                session_start();
                $_SESSION["codigo"]= $clientes["id_cliente"];
                $_SESSION["usuario"]= $clientes['usuario'];
                $_SESSION["nombre"]= $clientes["nombre_p"];
               
       
              
                header("location:../index.php");
              
            }
            }
            else {
                header("location:../principal.php");
             }
     }   
    
          
     //   $resultado->closeCursor();

    } catch (Exception $e) {
        die ("Error:". $e->getmessage());
    }

?>
    