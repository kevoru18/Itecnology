<?php



$host     = "localhost";//Ip of database, in this case my host machine    
$user     = "root";	//Username to use
$pass     = "qwerty";//Password for that user
$dbname   = "DB";//Name of the database

// try {
    $base = new PDO("sqlsrv:server=KEVORU;database=itec","kevoru","1234");
    $base ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $sql="SELECT * FROM usuarios" ;
    // $resultado=$base->prepare($sql);
    // $resultado->execute();
    // while ($a = $resultado->fetch(PDO::FETCH_ASSOC)) {
    //     echo'NOmbre'. $a['nombre'];
    //     }
    //     $resultado->closeCursor();
// }catch(Exception $e){
//     die('Error:' . $e->getMessage());
// }
// finally{
//     $base=null;
// }


function leer(){
    $base = new PDO("sqlsrv:server=KEVORU;database=itec","kevoru","1234");
    $base ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="SELECT * FROM usuarios" ;
    $resultado=$base->prepare($sql);
    $resultado->execute();
    // while ($a = $resultado->fetch(PDO::FETCH_ASSOC)) {
    //     echo'NOmbre'. $a['nombre'];
    //     }
        $resultado->closeCursor();
}
?>