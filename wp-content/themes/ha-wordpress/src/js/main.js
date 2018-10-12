var $ = require('jquery');

var slick = require('slick-carousel');

var popper = require('popper.js');

var bootstrap = require('bootstrap/dist/js/bootstrap');

// Menu

$('#main-navigation > ul > li > a').click( function( e ) {
  if( $( this ).attr( 'rel' ) ) {
    e.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#' + $(this).attr('rel')).offset().top }, 500);
  }
});

$('#project-navigation a').click( function( e ) {
  if( $( this ).attr( 'rel' ) ) {
    e.preventDefault();
      $( 'html, body' ).stop().animate({ scrollTop: $('#' + $(this).attr('rel')).offset().top }, 500);
  }
});

// Modals

$('#main-footer a').click( function( e ) {
  if( $( this ).attr( 'rel' ) ) {
    e.preventDefault();
    console.log( $( this ).attr( 'rel' ) );
    $('#' + $(this).attr('rel')).modal('show');
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