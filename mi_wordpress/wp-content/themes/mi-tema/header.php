<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Mi Tema con Bootstrap</title>

   <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/recursos/bootstrap-3.3.7-dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/recursos/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">

   <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/recursos/slick-1.6.0/slick/slick.css">
   <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/recursos/slick-1.6.0/slick/slick-theme.css">

   <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/alturas.css">
   <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/maqueta.css">

   <?php wp_head(); ?>

</head>
<body>


   <!-- header#cabecera-principal.container-fluid -->
   <header id="cabecera-principal" class="container-fluid h-10 h-md-20">

      <!-- div#logotipo.col-xs-6 -->
      <div id="logotipo" class="col-xs-6 col-md-4 col-lg-2 h-100 imgLiquid imgLiquidNoFillLeft">

         <!-- img[src=http://fakeimg.pl/200x100/eee/aaa?text=logotipo] -->
         <img src="http://fakeimg.pl/200x100/eee/aaa?text=logotipo" alt="">

      </div>

      <!-- #boton-menu.col-xs-6.col-md-4.col-lg-2.text-right -->
      <div id="boton-menu" class="col-xs-6 hidden-md hidden-lg text-right">
         Menú
      </div>


      <!-- nav#menu-grande.col-xs-12.col-md-8.col-lg-10 -->
      <nav id="menu-grande" class="col-xs-12 col-md-8 col-lg-10 hidden-xs hidden-sm">
         <!-- ul>(li.col-md-3>a{Menú $})*4 -->
         <ul>
            <li class="col-md-3 text-center"><a href="">Menú 1</a></li>
            <li class="col-md-3 text-center"><a href="">Menú 2</a></li>
            <li class="col-md-3 text-center"><a href="">Menú 3</a></li>
            <li class="col-md-3 text-center"><a href="">Menú 4</a></li>
         </ul>
      </nav>



   </header>



   <main id="contenedor-principal" class="container-fluid h-80 h-md-70 scroll-h">
