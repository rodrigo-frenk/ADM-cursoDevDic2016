<?php

// Abrimos un "Loop" de Wordpress:

if( have_posts() ) :
  while( have_posts() ) :
    the_post();

    ?>

    <!-- article#post_0.post.col-md-6 -->
    <article id="post_0" class="post col-md-6">

      <section class="imagen imgLiquidFill h-3x">
        <?php echo get_the_post_thumbnail(); ?>
      </section>

      <h4>
        <?php echo get_the_title(); ?>
      </h4>

      <small>
        <?php echo get_the_date( 'd/F/Y', get_the_ID() ); ?>
      </small>
      <section class="contenido">
        <?php echo get_the_content(); ?>
      </section>
    </article>



    <?php


  endwhile;
else:

  echo "No hay posts."

endif;

?>
