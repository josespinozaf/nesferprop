<!DOCTYPE html >
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Néstor Fernández Propiedades</title><!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=9,chrome=1"><![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <!-- Loading Source Sans Pro font that is used in this theme-->
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7cSource+Sans+Pro:200,400,600,700,900,400italic,700italic&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <!-- Boostrap and other lib styles-->
    <!-- build:cssvendor-->
    <link rel="stylesheet" href="assets/css/vendor.css">
    <!-- endbuild-->
    <!-- Font-awesome lib-->
    <!-- build:cssfontawesome-->
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <!-- endbuild-->
    <!-- Theme styles, please replace "default" with other color scheme from the list available in template/css-->
    <!-- build:csstheme-default-->
    <link rel="stylesheet" href="assets/css/theme-dark_blue-dark_yellow.css">
    <!-- endbuild-->
    <!-- Your styles should go in this file-->
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- Fixes for IE-->
    <!--[if lt IE 11]>
    <link rel="stylesheet" href="assets/css/ie-fix.css"><![endif]-->
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
</head>
<body class="index_projects menu-default hover-default scroll-animation">
    <!--
    SVG icons from sprite-inline.svg
    They are inlined in order to make them work,
    when the template is opened directly, without
    web-server
    
    If you are loading theme files using a webserver,
    you can remove this code and set loadSvgWithAjax: true
    at the beginning of the file.
    
    Or you can use sprite.svg directly.
    All you need to do is to add "img/sprite.svg" before the icon name
    and connect svg4everybody (https://github.com/jonathantneal/svg4everybody) plugin for IE support
    
    For example:
    <use xlink:href="#icon-area"></use>
    becomes
    <use xlink:href="img/sprite.svg#icon-area"></use>
    
--><!-- endinject -->
<div class="box js-box">
 <!-- BEGIN HEADER-->
  <header class="header header--brand">
    <div class="container">
      <div class="header__row"><a href="index.php" class="header__logo">
        <img src="assets/img/logo.png" alt=""> 
        </a>
       <div class="header__settings">
           

          <!-- end of block .header__settings-column-->
          
          <!-- end of block .header__settings-column-->
          
      </div>            
      <div class="header__settings">
          <div class="header__settings-column">
            <div class="header__social">
             <div class="social social--header social--circles">
                 <a href="https://www.facebook.com/nestorfernandezpropiedades" class="social__item"><i class="fa fa-facebook"></i></a>
                 <a href="https://www.linkedin.com/in/nestor-fernandez-6b380334/" class="social__item"><i class="fa fa-linkedin"></i></a>                        
             </div>
         </div>                
     </div>
     <!-- end of block .header__settings-column-->
     <!-- end of block .header__settings-column-->
     
 </div>

 <div class="header__contacts"><a href="tel:+56982346784" class="header__phone">
    <svg class="header__phone-icon">
      <use xlink:href="#icon-phone"></use>
  </svg><span class="header__span">+56 9 82346784</span></a></div>
  
  <div class="header__contacts"><a href="tel:+56991629961" class="header__phone">
    <svg class="header__phone-icon">
      <use xlink:href="#icon-phone"></use>
  </svg><span class="header__span">+56 9 91629961</span></a></div>
  <!-- end of block .header__contacts-->
  
  
<!-- end of block .auth header-->
</div>
<button type="button" class="header__navbar-toggle js-navbar-toggle">
  <svg class="header__navbar-show">
    <use xlink:href="#icon-menu"></use>
</svg>
<svg class="header__navbar-hide">
    <use xlink:href="#icon-menu-close"></use>
</svg>
</button>
<!-- end of block .header__navbar-toggle-->
</div>
</div>
</header>
<!-- END HEADER-->
<!-- BEGIN NAVBAR-->
<div id="header-nav-offset"></div>
<nav id="header-nav" class="navbar navbar--header">
    <div class="container">
      <div class="navbar__row js-navbar-row"><a href="index.php" class="navbar__brand">
          <img class="navbar__brand-logo" src="assets/img/logo.png" alt=""> 
          </a>
            <!--
             <svg class="navbar__brand-logo">
             <use xlink:href="assets/img/logo.png"></use>
             </svg>
             -->
        
        <div id="navbar-collapse-1" class="navbar__wrap">
          <ul class="navbar__nav">
            <li class="navbar__item js-dropdown active"><a href="index.php" class="navbar__link">Principal
                <svg class="navbar__arrow">
                    <use xlink:href="#icon-arrow-right"></use>
                </svg></a>                
            </li>
            <li class="navbar__item"><a href="feature_grid_large.php" class="navbar__link">Propiedades
                <svg class="navbar__arrow">
                    <use xlink:href="#icon-arrow-right"></use>
                </svg></a>                
            </li>
            <li class="navbar__item"><a href="contacts.php" class="navbar__link">Contacto
                <svg class="navbar__arrow">
                    <use xlink:href="#icon-arrow-right"></use>
                </svg></a>                
            </li>            
          </ul>
<!-- end of block  navbar__nav-->
        </div>
       </div>
    </div>
</nav>
<!-- END NAVBAR-->
                  <div class="site-wrap js-site-wrap">
                    <!-- BEGIN BREADCRUMBS-->
                   <div class="center">
                      <div class="container">
                        <div class="widget js-widget widget--landing">
                          <div class="widget__header">
                          <h2 class="widget__title">Modificar Fotos</h2>
                          <h5 class="widget__headline">Aquí puede agregar o eliminar propiedades.</h5><br><br><br>
                           
                            <?php 
                            include("php/connect.php");
                            if(isset($_POST['Agregar'])){
                              
                            if ( !isset($_FILES["imagen"]) || $_FILES["imagen"]["error"] > 0){
  echo "ha ocurrido un error";
  }                           
  else {
  //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
  //y que el tamano del archivo no exceda los 16MB
  $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
  $limite_kb = 16384;
  
    if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){

            //este es el archivo temporal
            $imagen_temporal  = $_FILES['imagen']['tmp_name'];
            //este es el tipo de archivo
            $tipo = $_FILES['imagen']['type'];
            //leer el archivo temporal en binario
                $fp = fopen($imagen_temporal, 'r+b');
                $data = fread($fp, filesize($imagen_temporal));
                fclose($fp);

                        //escapar los caracteres
               $data = mysql_escape_string($data);
              
                            $direccion=$_POST['direccion'];
                                              
                            $resultado = mysql_query("INSERT INTO imagenes(direccion, imagen, tipo_imagen) VALUES ('".$direccion."','".$data."', '".$tipo."')", $db); 
                             
                            if ($resultado){
                                    echo "Felicitaciones, la imagen ha sido subida exitosamente. Esta pagina se redireccionará<br>";
                                  } 
                            else {
                                    echo "Oh, ocurrió un error al copiar el archivo de la imagen.<br>";
                                  }
                      
                    }
                      else {
                        echo "Cuidado, archivo no permitido, es tipo de archivo prohibido o excede el tamaño de $limite_kb Kilobytes, imagen<br>";
                      }
  }}
  else {
                          $direccion=$_REQUEST['direccion'];
                          $id=$_REQUEST['id'];
                          $resultado = mysql_query("DELETE FROM `imagenes` WHERE `imagen_id`=".$id."",$db); 
                             
                            if ($resultado){
                                    echo "La imagen fue borrada";
                                  } 
                            else {
                                    echo "Oh, ocurrió un error no se borró la foto";
                                  }
                      }

                      ?><br>
                      <a href="../../editarfoto.php"> Volver</a>

                