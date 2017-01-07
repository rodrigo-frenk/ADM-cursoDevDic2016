<?php

// arreglos asociativos
global $gente;

$gente = array();


$persona = array(
   'id'        => 100,
   'nombres'   => 'Roberto',
   'apellidos' => 'Jiménez García',
   'foto'      => 'https://www.bbvacontinental.pe/fbin/mult/bbva_continental_persona_naturales_tcm1105-452188.png',
   'edad'      => 43,
   'ocupacion' => 'Carpintero',
   'hijos'     => array( 102 )
);

// utilizaremos el ID de la persona,
// para almacenarlo en un arreglo
$gente[ $persona['id'] ] = $persona;


$persona = array(
   'id'        => 102,
   'nombres'   => 'María',
   'apellidos' => 'Jiménez Torres',
   'foto'      => 'http://0www.ecestaticos.com/imagestatic/clipping/0f3/7a8/0f37a8a49e36ada206892a57a579ee7a/la-mujer-que-ha-conseguido-que-en-singapur-se-ponga-de-moda-el-espanol.jpg?mtime=1424436505',
   'edad'      => 28,
   'ocupacion' => 'estudiante',
   'hijos'     => array( 103 )
);

$gente[ $persona['id'] ] = $persona;



$persona = array(
   'id'        => 103,
   'nombres'   => 'Roberto Jr',
   'apellidos' => 'Jiménez Torres',
   'foto'      => 'http://cdn3.upsocl.com/wp-content/uploads/2014/08/Captura-de-pantalla-2014-08-01-a-las-15.33.07.jpg',
   'edad'      => 13,
   'ocupacion' => 'estudiante',
   'hijos'     => array()
);

$gente[ $persona['id'] ] = $persona;




function obtener_persona( $id ) {

   global $gente;

   if( array_key_exists( $id, $gente ) ) {

      return $gente[ $id ];

   } else {

      return 0;

   }


}

function mostrar_persona( $persona ) {

   ?>

   <!-- article.persona -->
   <article class="persona" style="padding: 16px; border: 1px solid #eee;">

      <dl>

         <dt>
            Nombres:
         </dt>
         <dd>
            <?php echo $persona['nombres'];  ?>
         </dd>

         <dt>
            Apellidos:
         </dt>
         <dd>
            <?php echo $persona['apellidos'];  ?>
         </dd>

         <dt>
            Fotografía:
         </dt>
         <dd>
            <img src="<?php echo $persona['foto'];  ?>" alt="" />
         </dd>

         <dt>
            Ocupación:
         </dt>
         <dd>
            <?php echo $persona['ocupacion'];  ?>
         </dd>

         <dt>
            Edad:
         </dt>
         <dd>
            <?php echo $persona['edad'];  ?>
         </dd>

         <?php if( count( $persona['hijos'] ) > 0 ) : ?>

            <dt>
               Hijos:
            </dt>
            <dd>
               <?php
               foreach( $persona['hijos'] as $hijo_id ):


                  $hijo = obtener_persona( $hijo_id );

                  if( $hijo ) {

                     mostrar_persona( $hijo );

                  }

               endforeach;
               ?>
            </dd>

         <?php endif; ?>

      </dl>

   </article>

   <?php

}



foreach( $gente as $id => $una_persona ) :

   // echo "Persona con id:" . $una_persona['id'];
   //
   // echo '<br />';

   $persona = obtener_persona( $id );

   if( $persona ) {
      mostrar_persona( $persona );
   }


endforeach;

?>
