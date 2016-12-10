$(document).ready(function(){

   squareH();
   verticalCenter();

})

verticalCenter = function( selector ) {

   if (typeof(selector)==='undefined')
   selector = '.v-center';

   $( selector ).each(function(){
      var parent = $(this);
      parent.css({opacity:0});
      var totalH = 0;
      parent.children().each(function(){
         totalH += parseInt($(this).outerHeight(true));
      });
      parent.css({paddingTop: (( parent.outerHeight(true) - totalH ) / 2 ) });
      parent.stop().animate({ opacity: 1 });
   });

}

squareH = function( selector ) {

   if (typeof(selector)==='undefined')

   selector = '.squareH';

   $( selector ).each(function(){
      $(this).height( $(this).width() );
   });

}
