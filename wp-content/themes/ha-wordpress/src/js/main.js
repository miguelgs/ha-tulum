var $ = require('jquery');

var fancybox = require('@fancyapps/fancybox')($);

var slick = require('slick-carousel');

var popper = require('popper.js');

var bootstrap = require('bootstrap/dist/js/bootstrap');

var fontawesome = require('@fortawesome/fontawesome-free/js/all');

//var fancybox = require('@fancyapps/fancybox');

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
    $('#' + $(this).attr('rel')).modal('show');
  }
});

$('.modal .modal-content .close').click(function (e) {
  if ($(this).attr('rel')) {
    e.preventDefault();
    $('#' + $(this).attr('rel')).modal('hide');
  }
});

// Carousels

$('#slider .slider-container').slick({
  arrows: true,
  autoplay: true,
  dots: false,
  autoplaySpeed: 5000,
  infinite: true,
  slidesToShow: 1,
  rows: 0,
  /*customPaging: function (slider, i) {
    var number = ((i + 1) < 0) ? ('0' + i + 1) : (i + 1);
    var total = (slider.slideCount < 0) ? ('0' + slider.slideCount) : slider.slideCount;
  },*/
  prevArrow: $('#slider .slides-counter .arrow-prev'),
  nextArrow: $('#slider .slides-counter .arrow-next')
});

$('#slider .slider-container').on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
  var slide_index = ((currentSlide + 1) < 10) ? '0' + (currentSlide + 1) : (currentSlide + 1);
  $('#slider .slides-counter .number-current').text(slide_index);
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

// Fancybox

$('[data-fancybox="gallery"]').fancybox({
	// Options will go here
});