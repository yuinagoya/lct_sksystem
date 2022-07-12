
// ローディング
$(function () {
  $(window).on("load", function () {
    $("#loading__img").fadeOut(600, function () {
      $("#loading").addClass("complete");
      $(".loading__splash").css("border-width", "1920px");
    });
  });
});
