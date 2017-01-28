<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Mi Nuevo Tema</title>

   <!--
   Usualmente, hubieramos incorporado estilos así:
   En WP, lo haremos desde functions.php
   <link rel="stylesheet" href="/css/master.css">
-->
<?php wp_head(); ?>

</head>
<body class="">


   <!-- header#cabecera.container-fluid -->
   <header id="cabecera" class="container-fluid h-1x color-black-bg">

      <!-- #logotipo.col-xs-4.col-md-3.col-lg-2>img -->
      <div id="logotipo" class="col-xs-4 col-md-3 col-lg-2 h-1x imgLiquidNoFillLeft">
         <img src="http://fakeimg.pl/300x200?text=LOGO" alt="">
      </div>

      <!-- nav#menu.col-xs-8.col-md-9.col-lg-10 -->
      <nav id="menu" class="col-xs-8 col-md-9 col-lg-10 text-center">

         <!-- ul>(li.col-xs-4>a{Menú $})*3 -->
         <ul>
            <li class="col-xs-4">
               <a href="" class="color-white">
                  Menú 1
               </a>
            </li>
            <li class="col-xs-4">
               <a href="" class="color-white">
                  Menú 2
               </a>
            </li>
            <li class="col-xs-4">
               <a href="" class="color-white">
                  Menú 3
               </a>
            </li>
         </ul>

      </nav>

   </header>

   <!-- main#principal.container-fluid -->
   <main id="principal" class="container-fluid relative">
