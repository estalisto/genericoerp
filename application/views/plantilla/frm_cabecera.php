<?php
if (!isset($this->session->userdata['logged_in'])) {

header("location: http://localhost:82/genericoerp/index.php/login");
}
?>

<!DOCTYPE html>
<html>
<!--/******************************************************************************************
 Nombre: cabecera.php
 Copyright de la Empresa: Veolia Ecuador
 Fecha de puesta en produccion:
 Fecha fin de la programacion: 16-11-2018 
 Autor: Roberto Castro Baus
 Referencia: PORTAL DE LIQUIDACIONES PARA SUBCONTRATISTAS MANTA
 Descripción General: pagina que forma la cabecera de la plantilla
 ******************************************************************************************/ -->
<head>
 <!--  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <title>Veolia System</title>
  <link rel="shortcut icon" href="<?php echo $base_url2;?>dist/img/veolia.ico" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo $base_url2;?>bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.css" />
  
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $base_url2;?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo $base_url2;?>dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo $base_url2;?>plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo $base_url2;?>plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo $base_url2;?>plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo $base_url2;?>plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo $base_url2;?>plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo $base_url2;?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Grafico -->
  <script type="text/javascript" src="<?php echo $base_url2;?>assets/js/loader.js"></script>
  <!-- datatable -->
  <link rel="stylesheet" href="<?php echo $base_url2;?>plugins/datatables/dataTables.bootstrap.css">
  
  <style>
    tr:hover td{background:#EDEDA0;}
    body:not(.modal-open){padding-right: 0px !important;} 
    #WindowLoad
        {
            position:fixed;
            top:0px;
            left:0px;
            z-index:3200;
            filter:alpha(opacity=65);
           -moz-opacity:65;
            opacity:0.65;
            background:#999;
        }
  </style>

</head>
<body class="hold-transition skin-black-light sidebar-mini">
<div class="wrapper" id="principal">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo $base_url2;?>" class="logo" style="align-content: center">
      <span class="logo-mini " >
          <img src="<?php echo $base_url2;?>dist/img/veolia_min.png" class="img-responsive">
      </span>
            <!--<img src="dist/img/veolia2.png"  width="150" height="50" class="img-responsive "> -->
            <img src="<?php echo $base_url2;?>dist/img/veolia1.png"  class="img-responsive "> 
     
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">            
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo $base_url2;?>dist/img/veolia_min.png" class="user-image img-circle" alt="User Image">
              <span class="hidden-xs">Stalyn Granda</span>
		<input type="hidden" id="usuarioSession" value="Stalyn Granda" />
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo $base_url2;?>dist/img/veolia_min.png" class="img-circle" alt="User Image">

                <p>
                  Stalyn Granda
                  <small></small>
                </p>
              </li>
              <li class="user-footer">
                  <div class="pull-right">
                  <a href="<?php echo $base_url2;?>index.php/login/logout" ><i class="fa fa-sign-out text-blue"></i>
                      <span>Salir</span>               
                  
                  </a>
                </div>
                <div class="pull-left">
                  <a id="changePass" href="cambiarContrasenia.php"><i class="fa fa-key text-blue"></i> 
		  <span>Cambiar contraseña</span></a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
