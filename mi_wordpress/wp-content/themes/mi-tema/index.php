<?php get_header(); ?>

<section id="imagen-portada" class="">

   <article class="imgLiquid imgLiquidFill">
      <img src="http://fakeimg.pl/1200x500/eee/aaa?text=portada" alt="">
   </article>
   <article class="imgLiquid imgLiquidFill">
      <img src="http://fakeimg.pl/1200x500/eee/aaa?text=portada" alt="">
   </article>
   <article class="imgLiquid imgLiquidFill">
      <img src="http://fakeimg.pl/1200x500/eee/aaa?text=portada" alt="">
   </article>

</section>


<section id="puntos" class="container">
   <!-- (#punto-$.punto.col-md-4>h2{Titular $}+p>lorem13)*3 -->
   <div id="punto-1" class="punto col-md-4">
      <h2>Titular 1</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id aperiam eveniet, sed atque.</p>
   </div>
   <div id="punto-2" class="punto col-md-4">
      <h2>Titular 2</h2>
      <p>Suscipit illum optio quod nobis dolores? Molestiae reiciendis alias, cumque porro modi asperiores.</p>
   </div>
   <div id="punto-3" class="punto col-md-4">
      <h2>Titular 3</h2>
      <p>Magnam eveniet, rem ut provident! Deleniti similique nesciunt perspiciatis esse suscipit, recusandae aut.</p>
   </div>
</section>




<!--section#entradas.container-fluid-->
<section id="entradas" class="container-fluid">



   <?php
   if( have_posts() ) {
      while ( have_posts() ) {
         the_post();
         ?>

         <!--article.entrada.col-sm-6.col-md-3.col-lg-2-->
         <article class="entrada col-sm-6 col-md-4 col-lg-3">

            <!--.imagen.h-40>img[http://fakeimg.pl/300x200]-->
            <div class="imagen h-40 h-md-30 imgLiquid imgLiquidFill">
               <?php echo get_the_post_thumbnail(); ?>
            </div>

            <!--.titulo.h-30>h5>lorem8-->
            <div class="titulo h-30 h-md-20">
               <h4>
                  <?php echo get_the_title(); ?>
               </h4>
            </div>

            <div class="fecha h-10 h-md-10 font-s">
               <?php echo get_the_date(); ?>
            </div>


            <!--.extracto.h-30.hidden-xs.hidden-md>lorem14-->
            <div class="extracto h-30 h-md-20 hidden-xs hidden-sm font-s">
               <?php echo get_the_excerpt(); ?>
            </div>


            <!--.contenedor-boton.h-20.text-right-->
            <div class="contenedor-boton h-20 h-md-20 text-right">
               <!--button.btn-primary{Ver más}-->
               <button class="btn-primary">
                  <a href="<?php echo get_the_permalink( get_the_ID() ); ?>">
                     Ver más
                  </a>
               </button>
            </div>




         </article>

         <?php
      }
   } else {
      /* No posts found */
   }
   ?>




</section>


<?php get_footer(); ?>
