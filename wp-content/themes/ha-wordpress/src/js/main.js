var $ = require('jquery');

var slick = require('slick-carousel');

// Menu

$( '#main-navigation > ul > li > a').click( function( e ) {
  console.log($( this ).attr( 'rel' ));
  if( $( this ).attr( 'rel' ) ) {
    e.preventDefault();
      $( 'body' ).animate({ scrollTop: $('#' + $( this ).attr( 'rel' ) ).offset().top }, 1000);
  }
});

// Carousels

$('#slider .slider-container').slick({
  arrows: false,
  autoplay: false,
  autoplaySpeed: 5000,
  infinite: true,
  slidesToShow: 1
});

$('#about-us .collaborators .carousel').slick({
  arrows: false,
  autoplay: true,
  autoplaySpeed: 5000,
  infinite: true,
  slidesToShow: 4
});

$('#project-about .collaborators .carousel').slick({
  arrows: false,
  autoplay: true,
  autoplaySpeed: 5000,
  infinite: true,
  slidesToShow: 3
});