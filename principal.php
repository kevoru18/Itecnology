<?php
session_start();
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>KONOHA Compras</title>
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
                    <a class="nav-link disabled fixed-bottom navbar-brand" > 
                    <span></span></a>
    
                <!-- user dropdown starts -->
                <div class="btn-group pull-right">
                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> <?php 
                        if (!isset($_SESSION["usuario"])) {
                            echo 'Ingresa con tu Usuario','</span>
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                        <li><a href="login.html">Ingresa</a></li>
                        
                            <li class="divider"></li>
                            <li><a href="crear.php">Registrate</a></li>
                        </ul>' ;
                        }else {
                            echo  $_SESSION["nombre"],'</span>
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                           
                            <li class="divider"></li>
                            <li><a href="php/logout.php">Logout</a></li>
                        </ul>' ;
                        }
                        ?>
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
                <a id="bienvenido" href="#">Bienvenido</a>
            </li>
            
        </ul>
    </div>
    
    
    
    <div class="row">
        <div class="box col-md-12">
        <div class="box-inner">
        <div class="box-header well" data-original-title="">
            <h2><i class="glyphicon glyphicon-user"></i> Existencia de productos</h2>
    
            <div class="box-icon">
                <a href="#" class="btn btn-minimize btn-round btn-default"><i
                        class="glyphicon glyphicon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
            </div>
           
        </div>
    
        <div class="box-content">
            
        
        
    
    
    
    
    
        <td class="center">
                    
                    <a class="btn btn-danger" href="terminarventa.php">
                        <i class="glyphicon glyphicon-shopping-cart icon-white"></i>
                        Terminar compra
                    </a>
                </td>
    
    
             <table class="table table-striped table-bordered bootstrap-datatable  responsive">
               
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Codigo</th>
                        <th>Descripcion</th>
                        <th>precio</th>
                        <th>Categoria</th>
                      
                        <th>Opciones</th>
                       
                    </tr>
                </thead>
        
                 <?php
                      include ("conexion/conexion.php");
                     $sqlproducto="SELECT * FROM producto" ;
                     $resultadoproducto=$base->prepare($sqlproducto);
                     $resultadoproducto->execute();
      
                     while ($aproducto = $resultadoproducto->fetch(PDO::FETCH_ASSOC)) {
            
           
                     ?>
    
                     <tbody>
                     <tr>
        
                    <td> <?php  echo $aproducto['Id_producto'];?></td>
                    <td> <?php  echo $aproducto['codigo_producto'];?></td>
                    <td class="center"><?php  echo $aproducto['descripcion_producto'];?></td>
                    <td class="center"><?php  echo $aproducto['precio'];?></td>
                    <td class="center"><?php  echo $aproducto['categoria'];?></td>
                   
                    
                    <td class="center">
                       
                        <a class="btn btn-info" href="./php/ventas.php?Id='<?php echo $aproducto['codigo_producto'];?>'">
                          <i class="glyphicon  glyphicon-shopping-cart icon-white"></i>
                          Comprar
                        </a>

                       </td>
                    </tr>
                     <?php
                    } 
                   // $resultado->closeCursor();
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
    <script src="js/principal.js"></script>
    
    
    
    
    
    </body>
    </html>
    