<!DOCTYPE html>
<?php
include('lang.php');
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/img/favicon.ico">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <link href="assets/bootstrap3.3.7/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">

    <!-- Libs -->
    <link rel="stylesheet" href="assets/fontawesome4.7.0/css/font-awesome.css">
    <!--<script src="assets/js/jquery-1.12.3.min.js"></script>-->
     <script src="assets/js/jquery.min.js"></script>
     <!--<script>
       var carouselhdlgp = jQuery.noConflict();
       carouselhdlgp(document).ready(function(){
         carouselhdlgp(".modal").click(function(){
           carouselhdlgp(".modal").removeClass("carousel");
         });
       });
     </script>-->

    <script src="assets/js/jquery.validate.js"></script>
    <script src="assets/js/validations.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="">
        <img id="iconavbar" src="assets/img/icons/logofullcolor.svg">WebEmpresa</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#">Sobre WebEmpresa<span class="sr-only">(current)</span></a></li>
          <li><a href="#instalaciones">Nuestro trabajo</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Servicios<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="servicios.php#riego">Riego</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="servicios.php#semillas">Semillas</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="servicios.php#cultivos">Protección de cultivos</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="servicios.php#plagas">Control de plagas</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Tecnología a mediada</a></li>
            </ul>
          </li>

          <li><a href="#contacto-home">Contacto</a></li>

        </ul>

      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
