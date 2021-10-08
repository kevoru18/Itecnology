<?php
include('../conexion/conexion.php');

$codigo=$_POST['codigoprov'];
$cadena="SELECT descripcion_producto, costo, precio FROM producto WHERE codigo_producto='$codigo'";

$producto=$base->prepare($cadena);
$producto->execute();

while ($aprovee= $producto->fetch(PDO::FETCH_ASSOC)) {
    echo json_encode($aprovee);
    // echo "<option value='".$aprovee['Id_producto']."'>".$aprovee['Id_producto']."-".$aprovee['descripcion_producto']."</option>";
  } 
  $provee->closeCursor();


// $exe=mysqli_query($db,$cadena);
//  if(mysqli_num_rows($exe)>0){
//    $array=array();
//     while($re=mysqli_fetch_array($exe)){
//       $array=$re;
//     }
//     echo json_encode($array);
//  }else{
//       echo "0";
//  }



?>