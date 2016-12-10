<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Ejercicio Colores</title>

   <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Bitter:700|Montserrat|Roboto+Slab:100,400" rel="stylesheet">

   <link rel="stylesheet" href="css/colores.css">
   <link rel="stylesheet" href="css/estilos.css">

</head>
<body>



   <?php
      // pegar aqui php del gist

      $colorList = [

      "color-background",
      "color-background",
      "color-background",
      "color-background",
      "color-background",
      "color-text",
      "color-text",
      "color-text",
      "color-text",
      "color-text",
      "color-primary-0",
      "color-primary-1",
      "color-primary-2",
      "color-primary-3",
      "color-primary-4",
      "color-secondary-1-0",
      "color-secondary-1-1",
      "color-secondary-1-2",
      "color-secondary-1-3",
      "color-secondary-1-4",
      "color-secondary-2-0",
      "color-secondary-2-1",
      "color-secondary-2-2",
      "color-secondary-2-3",
      "color-secondary-2-4",
      "color-tertiary-1-0",
      "color-tertiary-1-1",
      "color-tertiary-1-2",
      "color-tertiary-1-3",
      "color-tertiary-1-4",
      "color-tertiary-2-0",
      "color-tertiary-2-1",
      "color-tertiary-2-2",
      "color-tertiary-2-3",
      "color-tertiary-2-4",
      "color-complement-0",
      "color-complement-1",
      "color-complement-2",
      "color-complement-3",
      "color-complement-4",
      "color-neutral-0",
      "color-neutral-1",
      "color-neutral-2",
      "color-neutral-3",
      "color-neutral-4",
      "color-accent-0",
      "color-accent-1",
      "color-accent-2",
      "color-accent-3",
      "color-accent-4",

      ];

      ?>

      <!-- <link rel="stylesheet" href="css/micrositio/micrositio-1.css" media="screen" title="no title"> -->

      <?php

      foreach($colorList as $color) {

         ?>
         <h2 class="<?php echo $color; ?> font-1"><?php echo $color; ?></h2>
         <?php
         for ($i=0; $i < ( floor(count($colorList)/5)); $i++) {

         ?>

         <div class="columns w-20 h-a p-0-1">
         <h6 class="<?php echo $colorList[($i*5)]; ?> font-2"><?php echo $colorList[($i*5)]; ?></h6>
         <div class="w-100 h-15-v squareH v-center text-center font-4 <?php echo $color . "-bg"; ?>">

         <?php

            for ($j=0; $j < 5; $j++) {
         ?>
         <span class="columns text-center <?php echo $colorList[($i*5)+$j]; ?>">texto</span>
         <?php
            }

         ?>
         </div>
         </div>
         <?php
         }

      }

   ?>

   <script src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>

   <script src="js/app.js"></script>


</body>
</html>
