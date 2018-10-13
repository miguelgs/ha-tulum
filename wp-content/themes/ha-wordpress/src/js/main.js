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
  slidesToShow: 1,
  rows: 0
});

$('#about-us .collaborators .carousel').slick({
  arrows: false,
  autoplay: true,
  autoplaySpeed: 5000,
  dots: false,
  infinite: true,
  slidesToShow: 4,
  rows: 0,
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

$('#project-about .collaborators .carousel').slick({
  arrows: false,
  autoplay: true,
  autoplaySpeed: 5000,
  infinite: true,
  slidesToShow: 3,
  rows: 0,
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});