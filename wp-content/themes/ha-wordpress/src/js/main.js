var $ = require('jquery');

var slick = require('slick-carousel');

var popper = require('popper.js');

var bootstrap = require('bootstrap/dist/js/bootstrap');

var fontawesome = require('@fortawesome/fontawesome-free/js/all');

// Menu

function getScreenOffset() {

  var screenSize = $(window).width();
  var offset = 0;

  if (screenSize < 992) {
    offset = 50;
  }

  return offset;
}

$('#main-navigation > ul > li > a, #main-navigation-mobile > ul > li > a').click(function (e) {
  if ($(this).attr('rel')) {
    e.preventDefault();
    if ($('#main-navigation-mobile').hasClass('opened')) {
      $('#main-navigation-mobile').removeClass('opened');
    }
    $('html, body').stop().animate({ scrollTop: $('#' + $(this).attr('rel')).offset().top - getScreenOffset() }, 500);
  }
});

$('#main-navigation-mobile .option').click(function (e) {
  e.preventDefault();
  if ($(this).hasClass('option-open')) {
    $('#main-navigation-mobile').addClass('opened');
  } else {
    $('#main-navigation-mobile').removeClass('opened');
  }
});

$('#project-navigation a, #project-navigation-mobile a').click(function (e) {
  if ($(this).attr('rel')) {
    e.preventDefault();
    $('html, body').stop().animate({ scrollTop: $('#' + $(this).attr('rel')).offset().top }, 500);
  }
});

// Modals

$('#main-footer a').click(function (e) {
  if ($(this).attr('rel')) {
    e.preventDefault();
    console.log($(this).attr('rel'));
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