var $ = require('jquery');

var slick = require('slick-carousel');

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