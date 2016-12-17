<h1>
  Basicos de PHP
</h1>

<?php // esto es PHP ?>

<!-- esto es HTML -->



<!-- estilo interacalado de php -->
<h2>

  <?php echo "Subtitulo!"; ?>

</h2>


<?php

// estilo concatenado:

echo '<h2>Subtitulo!</h2>';

// operador de concatenacion:

echo '<h2>' . 'Subtitulo!' .  '</h2>';

?>


<?php

// Variables:

// pueden almacenar cualquier tipo de dato


$variable = 0;


// var dump: Muestra el contenido de una variable

var_dump( $variable );

echo '<br />';

$variable = "cero";

var_dump( $variable );

echo '<br />';


$variable = 0.8996;

var_dump( $variable );

echo '<br />';


$variable = array( 1, 2, 3 );

var_dump( $variable );

echo '<br />';

?>



<?php

$a = 18;

if( $a > 17 ) {
  // hacer algo
}

$condicion = true;

// manera alternativa de escribir una estructura de control
// nos ayuda con la orientación

if( $condicion ) : //abrimos con dos puntos

endif; //cerramos con endif;


$dato = 1;

switch( $dato ) {
  case 0:
    // hacer algo
    break;
  case 1:
    // hacer algo
    break;
  default:
    // hacer algo
}




// Arreglos

// podemos incializar el arreglo desde aquí
$nombrearreglo = array( 1, 2, 3 );

// dos modos de declarar un array vacio
$nombrearreglo = array();
$nombrearreglo = [];

$nombrearreglo[ 0 ] = "primer elemento";
$nombrearreglo[ 1 ] = "segundo elemento";

array_push( $nombrearreglo, "elemento adicional" );
array_push( $nombrearreglo, "otro elemento adicional" );

//var_dump( $nombrearreglo );



// BUCLES
echo "<h4>enlistar elementos de arreglo:</h4>";

for ($i=0; $i < count( $nombrearreglo ); $i++) {
  echo $nombrearreglo[ $i ] . '<br />';
}

for ($i=0; $i < count( $nombrearreglo ); $i++) :
  // hacer algo...
endfor;


foreach( $nombrearreglo as $elemento ) :

  echo $elemento;
  echo '<br />';

endforeach;


$a = 0;
while ($a <= 10) :
  $a++;
endwhile;



?>
