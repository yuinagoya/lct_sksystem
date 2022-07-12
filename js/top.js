// スライド
$(function () {
  $("#about-slide").slick({
    useCSS: true,
    speed: 500,
    autoplay: true,
    autoplaySpeed: 4000,
    infinite: true,
    dots: true,
    arrows: false,
    fade: true,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          dots: false,
        },
      },
    ],
  });
  var width = $(window).width();
  if (width <= 767) {
  }
});

// ローディング
$(function () {
  $(window).on("load", function () {
    $("#loading__img").fadeOut(2000, function () {
      $("#loading").addClass("complete");
      $(".loading__splash").css("border-width", "1920px");
      $(".mv__txt").delay(1500).fadeIn(2000);
    });
  });
});
