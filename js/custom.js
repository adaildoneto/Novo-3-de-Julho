jQuery(document).ready(function ($) {
  $('.sl1der').slick({
  dots: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  speed: 1800,
  arrows: false,
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

jQuery(document).ready(function ($) {
  $('.flash').slick({
  dots: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  speed: 1800,
  arrows: false,
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

jQuery(document).ready(function ($) {
  $('.gofibra').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  speed: 1800,
  autoplay: true,
  fade: true,
  cssEase: 'linear',
  arrows: false,
  autoplaySpeed: 10000,
  responsive: [
  {
  breakpoint: 1024,
  settings: {
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: false
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


  });

  jQuery(document).ready(function ($) {
  $('.colunas').slick({
    dots: true,
    speed: 300,
    autoplay: true,
    autoplaySpeed: 9000,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [

    {
    breakpoint: 600,
    settings: {
    slidesToShow: 2,
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
  });

jQuery(document).ready(function($) {
    $(".nav-item-dropdown-button").dropdown({constrainWidth: false, hover: false, coverTrigger:false,});
    $(".side-menu-nav-item-dropdown-button").dropdown({constrainWidth: false, hover: false,});
    $(".sidenav").sidenav();
    $('iframe[src*="youtube"]').parent().fitVids();
    $('.wp_pagination').find('ul').addClass('pagination');
    $('.pagination').find('li').addClass('waves-effect');
    $('.current').addClass('btn-flat red darken-4 white-text');

});
