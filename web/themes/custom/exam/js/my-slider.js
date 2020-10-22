

document.addEventListener("DOMContentLoaded", function(event) {
  jQuery('.slider').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 7,
  slidesToScroll: 1,
  rows: 0,
  arrows: false,
    autoplay: true,
    autoplaySpeed: 3000,
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        rows: 0,
        arrows: false
      }
    },
    {
      breakpoint: 770,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        rows: 0,
        arrows: false
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        rows: 0,
        arrows: false
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
});

