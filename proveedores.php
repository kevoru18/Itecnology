<?php
session_start();
if (isset($_SESSION["permits"])!="Administrador")
{
  header("location:./principal.php");

}else {
    if(!isset($_SESSION["usuario"])  ) {
        header("location:./principal.php");

    }else {
        
    
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>KONOHA Proveedores</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="  ">
    <meta name="author" content="Kevin Rubi">
    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cybrog.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"> <img alt="Charisma Logo" src="img/logo20.png" class="hidden-xs"/>
                <span>Konoha</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> <?php    echo  $_SESSION["nombre"] ?></span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                   
                    <li class="divider"></li>
                    <li><a href="php/logout.php">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
            <div class="btn-group pull-right theme-container animated tada">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-tint"></i><span
                        class="hidden-sm hidden-xs"> Change Theme / Skin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" id="themes">
                    <li><a data-value="classic" href="#"><i class="whitespace"></i> Classic</a></li>
                    <li><a data-value="cerulean" href="#"><i class="whitespace"></i> Cerulean</a></li>
                    <li><a data-value="cyborg" href="#"><i class="whitespace"></i> Cyborg</a></li>
                    <li><a data-value="simplex" href="#"><i class="whitespace"></i> Simplex</a></li>
                    <li><a data-value="darkly" href="#"><i class="whitespace"></i> Darkly</a></li>
                    <li><a data-value="lumen" href="#"><i class="whitespace"></i> Lumen</a></li>
                    <li><a data-value="slate" href="#"><i class="whitespace"></i> Slate</a></li>
                    <li><a data-value="spacelab" href="#"><i class="whitespace"></i> Spacelab</a></li>
                    <li><a data-value="united" href="#"><i class="whitespace"></i> United</a></li>
                </ul>
            </div>
           
        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="index.php"><i class="glyphicon glyphicon-home"></i><span> Principal</span></a>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> Compras</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="categoria.php">Registrar nueva categoria</a></li>
                                <li><a href="compras.php">Registrar nueva compra</a></li>
                            </ul>
                        </li>
                        <li><a class="ajax-link" href="ventas.php"><i
                                    class="glyphicon glyphicon-edit"></i><span> Ventas</span></a></li>
                        <li><a class="ajax-link" href="clientes.php"><i class="glyphicon glyphicon-list-alt"></i><span> Clientes</span></a>
                        </li>
                        <li><a class="ajax-link" href="proveedores.php"><i class="glyphicon glyphicon-font"></i><span> Proveedores</span></a>
                        </li>
                        <li><a class="ajax-link" href="usuarios.php"><i class="glyphicon glyphicon-picture"></i><span> Usuarios</span></a>
                        </li>
                      
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
               
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Dashboard</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Proveedores</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
       
    </div>

    <div class="box-content">
    <div class="agregar">
         <button href="#" type="button" id="nuevo_proveedor" class=" btn btn-info" data-toggle="modal">Nuevo Proveedor</button>
        </div>
    
    <table class="table table-striped table-bordered bootstrap-datatable  responsive">
    <thead>
    <tr>
        <th>No.</th>
        <th>Nombre</th>
        <th>Identidad</th>
        <th>Telefono</th>
        <th>Dirección</th>
        <th>Empresa</th>
        <th>Opciones</th>
    </tr>
    </thead>
    
  <?php
  include ("conexion/conexion.php");
    $sql="SELECT * FROM proveedor" ;
    $resultado=$base->prepare($sql);
    $resultado->execute();
  //leer();
    while ($proveedor = $resultado->fetch(PDO::FETCH_ASSOC)) {
        
       
    ?>

    <tbody>
    <tr>
    
        <td> <?php  echo $proveedor['Id_proveedor'];?></td>
        <td> <?php  echo $proveedor['nombre'];?></td>
        <td class="center"><?php  echo $proveedor['identidad'];?></td>
        <td class="center"><?php  echo $proveedor['telefono'];?></td>
        <td class="center"><?php  echo $proveedor['direccion'];?></td>
        <td class="center"><?php  echo $proveedor['empresa'];?></td>
        
        <td class="center">
            <button class="btn btn-info editar" id="editar" type="button" name="editar" data-target= "modalmodificar" data-toggle="modal" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </button>
            
        </td>
    </tr>
    <?php } 
        $resultado->closeCursor();
        ?>
    </tbody>
    </table>
    
    </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->

    <hr>


    <footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="#" target="_blank">Kevin Rubi</a> 2021</p>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                href="https://www.linkedin.com/in/kevin-rubi/">Kevin Rubi</a></p>
    </footer>

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>

<!-- application script for Charisma demo -->
<script src="js/proveedores.js"></script>

<!-- Modal Proveedor-->
<div class="modal fade" id="modalagregar"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bmodal-header-success">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form id="mAgregar">
        <div class="modal-body ">
          <label>Nombre</label><input type="text" class="form-control input-sm" id="nameprovee" >
          <label >Identidad</label><input type="text" class="form-control input-sm" id="idaprovee" >
          <label >Teléfono</label><input type="text" class="form-control input-sm" id="phoneaprovee" >
          <label >Dirección</label><input type="text" class="form-control input-sm" id="addressprovee" >
          <label >Empresa</label><input type="text" class="form-control input-sm" id="empresaprovee" >
         
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <input type="submit" class="btn btn-primary" href="#" value="Guardar"></input>
        </div>
        </form>
      </div>
    </div>
  </div>




<!--Modal Modificar Proveedor-->
<div class="modal fade" id="modalmodificar"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modificar Proveedor?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
      <form id="mModificarproveedor">
        <div class="modal-body">Selecciona el campo a modificar Acontinuación si está listo para terminar presione guardar.
        <div class="modal-body">
         <input type="text" class="form-control input-sm" id="iduserumodi" name="iduserumodi" >
          <label>Nombre</label><input type="text" class="form-control input-sm" id="nameumodi" name="nameumodi" >
          <label >Identidad</label><input type="text" class="form-control input-sm" id="idau" name="idau">
          <label >Teléfono</label><input type="text" class="form-control input-sm" id="telefonomodificarpro" name="telefonomodificarpro">
          <label >Dirección</label><input type="text" class="form-control input-sm" id="addressupro" name="addressupro" >
          <label >Empresa</label><input type="text" class="form-control input-sm" id="empresampro" name="empresampro" >
    
          
        </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <input class="btn btn-success" type="submit" href="#" value="Actualizar"></input>
        </div>
      </form>

      </div>
    </div>
  </div>





</body>
</html>
<?php
}}
?>