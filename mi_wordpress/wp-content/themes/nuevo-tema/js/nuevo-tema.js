$ = jQuery.noConflict();

$(document).ready(function(){

  setup_imagenes();

})


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
