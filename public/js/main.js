window.addEventListener('DOMContentLoaded', () => {
  $('#menu-btn').click(function () {
    $('.header__nav ul').slideToggle(300);
    if ($(this).hasClass('not-active')) {
      $(this).addClass('is-active').removeClass('not-active');
    } else {
      setTimeout(() => $(this).addClass('not-active').removeClass('is-active'), 0);
    }
  });

  $('.project-slider').slick({
    dots: true,
    arrows: false,
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 3000
  });

  $('.parners-slider').slick({
    dots: false,
    arrows: false,
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 6,
        }
      },
      {
        breakpoint: 993,
        settings: {
          slidesToShow: 5,
        }
      },
      {
        breakpoint: 769,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 577,
        settings: {
          slidesToShow: 2,
        }
      }
    ]
  });

  $('.designer-slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.designer-slider-nav'
  });
  $('.designer-slider-nav').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.designer-slider-for',
    focusOnSelect: true,
    dots: false
  });
});