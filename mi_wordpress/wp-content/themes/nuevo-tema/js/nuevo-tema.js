$ = jQuery.noConflict();

$(document).ready(function(){

  setup_imagenes()

  setup_categorias()

})


function setup_categorias() {

   $('#abrir-categorias').click(function(){

      $('#categorias').css({ opacity: 0 })

      $('#categorias').removeClass('hidden')

      $('#categorias').animate({ opacity: 1 })

   })

   $('#cerrar-categorias').click(function(){

      $('#categorias').animate({ opacity: 0 }, 400,
         // funcion a ejecutar al terminar la animacion
         function(){

            $('#categorias').addClass('hidden')

         }
      )

   })

}


function setup_imagenes() {

  $('.imgLiquidFill').imgLiquid();

  $('.imgLiquidNoFill').imgLiquid({
    fill: false,
  });

  $('.imgLiquidNoFillLeft').imgLiquid({
    fill: false,
    horizontalAlign: "left"
  });

  $('.imgLiquidNoFillRight').imgLiquid({
    fill: false,
    horizontalAlign: "right"
  });

}
