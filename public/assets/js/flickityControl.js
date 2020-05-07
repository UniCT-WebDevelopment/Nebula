var $carousel = $('.main-carousel').flickity({
    // options
    cellAlign: 'center',
    contain: true,
    draggable: true,
    freeScroll: true,
    wrapAround: true,
    autoPlay:2000,
    adaptiveHeight: true
  });
var clk = false;
  $('.carousel-nav').click(function(){
   /* $('.carousel .carousel-cell.hidden').css({
                        'width':'560px',
                        'height':'420px',
                       //'border':'1px solid red',
                        'position:':'relative',
                        'margin-top':'70px',
                        'margin-left':'20px',
                        'margin-right':'20px',
                        'display ':'block',
                      });*/
 
    $('.carousel-nav .carousel-cell').addClass('hidden2');
    $('.carousel .carousel-cell').addClass('hidden');
    
    $('.carousel-nav').css({
      'background':'transparent',
    })
  /*  $('.carousel-nav .carousel-cell.hidden').css({
              'width':'120px',
              'height':'120px',
              'margin-top':'460px',
              'display ':'block',
              //'border':'1px solid yellow',
              });*/
    //$('.carousel').flickity('viewFullscreen');
    $('.carousel, .carousel-nav').flickity('viewFullscreen');
  })
 //  $('.carousel, .carousel-nav').flickity('exitFullscreen');
//var car = $('.carousel-nav').on('click',function(){

//});
$(document).keyup(function(event){
  var keycode = (event.keyCode ? event.keyCode : event.which);
  if(keycode == '27'){
    $('.carousel .carousel-cell.hidden').toggleClass('hidden');
    $('.carousel-nav .carousel-cell.hidden2').toggleClass('hidden2'); 
    $('.carousel, .carousel-nav').flickity('exitFullscreen');   
  }
});
/*
$('.carousel .carousel-cell.hidden').removeClass('hidden');
$('.carousel-nav .carousel-cell.hidden2').removeClass('hidden2');*/

  $carousel.on( 'staticClick.flickity', function( event, pointer, cellElement, cellIndex ) {
    if ( typeof cellIndex == 'number' ) {
      $carousel.flickity( 'selectCell', cellIndex );
    }
  });
  
  $(document).ready(function() {
    jQuery.fn.carousel.Constructor.TRANSITION_DURATION = 2000  // 2 seconds
  });

  $(".progress-bar").css({"width":"100%","transition":"1s"});
