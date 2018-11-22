jQuery(document).ready(function ($) {
  $('.sl1der').slick({
  dots: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  speed: 1800,
  autoplay: true,
  autoplaySpeed: 10000,
  responsive: [
  {
  breakpoint: 1024,
  settings: {
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: true
  }
  },
  {
  breakpoint: 600,
  settings: {
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false
  }
  },
  {
  breakpoint: 480,
  settings: {
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false
  }
  }
  // You can unslick at a given breakpoint now by adding:
  // settings: "unslick"
  // instead of a settings object
  ]
  });
  // FIM Slick Slider

});

jQuery(document).ready(function($) {
    jQuery(".nav-item-dropdown-button").dropdown({constrainWidth: false, hover: false, coverTrigger:false,});
    jQuery(".side-menu-nav-item-dropdown-button").dropdown({constrainWidth: false, hover: false,});
    jQuery(".button-collapse").sideNav();
});
