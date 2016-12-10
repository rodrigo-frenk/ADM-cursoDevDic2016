

$('#cabecera-principal').css({
   backgroundColor: '#def',
   fontSize: 9,
   color: '#456',
   overflow: 'hidden'
})

var headerHeight = 0;

if( $(window).width() < 992 ) {

   headerHeight = $(window).height() * 0.1;

} else {

   headerHeight = $(window).height() * 0.2;

}

$('#cabecera-principal').height(0).animate({
   height: headerHeight,
   fontSize: 16
},1000)



if( $(window).width() < 768 ) {

   $('#boton-menu').click(function(){

      // si el menú no tiene la clase "expandido"
      if( $('#menu-grande').hasClass('expandido') == false ) {

         $("#menu-grande").removeClass('hidden-xs hidden-sm');
         // $("#cabecera-principal").height('auto');
         $("#cabecera-principal").animate({
            height: $(window).height()
         }, 500 );


         $('#boton-menu').html( 'Cerrar Menú' );

         $('#menu-grande').addClass( 'expandido' );

      } else {

         $("#menu-grande").addClass('hidden-xs hidden-sm');
         // $("#cabecera-principal").height('auto');
         $("#cabecera-principal").animate({
            height: headerHeight
         }, 500 );


         $('#boton-menu').html( 'Menú' );

         $('#menu-grande').removeClass( 'expandido' );

      }

   });

}






var entrada = $(".entrada").first();

/*
var nueva_entrada = entrada.clone();

var caja_entradas = $('#entradas');

caja_entradas.append( nueva_entrada );
*/

// Versión más breve (hace lo mismo)

// for( var i = 0; i < 5; i++  ) {
//
//    entrada.clone().appendTo('#entradas');
//
// }












$(".imgLiquid.imgLiquidFill").imgLiquid();

$(".imgLiquid.imgLiquidNoFill").imgLiquid({ fill: false });

$(".imgLiquid.imgLiquidNoFillLeft").imgLiquid({
   fill: false,
   horizontalAlign: "left"
});




$("#imagen-portada").slick({
   autoplay: true,
   autoplaySpeed: 3000
});
