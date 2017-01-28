<?php

/*
Este archivo sirve para configurar nuestro WP,
o para asignar funciones nuevas a ejecutarse
*/


/* incluir mis otros archivos:*/

include_once 'backend/new-post-type.php';


/* ajustes de wp */



add_theme_support( 'post-thumbnails' );

show_admin_bar( false );



/* cargar recursos utilizando un HOOK (o gancho) */

add_action( "wp_enqueue_scripts", "cargar_recursos" );

function cargar_recursos() {

  $themeDir = get_stylesheet_directory_uri();

  wp_enqueue_style( "bootstrap",
  $themeDir . "/recursos/bootstrap-3.3.7-dist/css/bootstrap.min.css" );

  wp_enqueue_style( "bootstrap-theme",
  $themeDir . "/recursos/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" );


  wp_enqueue_style( "style",
  $themeDir . "/style.css" );



  // Wp ya trae jquery integrado, poreso podemos llamarlo así:
  wp_enqueue_script( "jquery" );

  wp_enqueue_script(
    "bootstrap",
    $themeDir . "/recursos/bootstrap-3.3.7-dist/js/bootstrap.min.js"
  );



  wp_enqueue_script(
    "imgLiquid",
    $themeDir . "/recursos/imgLiquid-master/js/imgLiquid-min.js"
  );


  wp_enqueue_script(
    "nuevo-tema",
    $themeDir . "/js/nuevo-tema.js",
    // enlistar dependencias. es decir,
    // archivos que necesita para funcionar
    array( 'jquery', 'bootstrap', 'imgLiquid' )
  );


}

?>
