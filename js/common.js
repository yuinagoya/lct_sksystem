
//フェードイン
$(function () {
  var $window = $(window),
    breakPoint = 640, //ブレイクポイントの設定
    wid = $window.width(),
    height = $window.height(),
    visibleArea = height,
    $delayInSpeed = 400;

  $(window).scroll(function () {
    var scroll = $(window).scrollTop();

    //　通常
    $('.scrollin, .scrollin-2col:nth-child(odd)').each(function () {
      var elemPos = $(this).offset().top;
      if (scroll > elemPos - visibleArea) {
        $(this).addClass('is-visible');
      } else {
        $(this).removeClass('is-visible');
      }
    });
    //　時間差
    if (wid > breakPoint) { //pc
      // 2カラム（偶数）
      $('.scrollin-2col:nth-child(even)').each(function () {
        var elemPos = $(this).offset().top;
        if (scroll > elemPos - visibleArea) {
          $(this).delay($delayInSpeed).queue(function () {
            $(this).addClass('is-visible').dequeue();
          });
        } else {
          $(this).stop().removeClass('is-visible');
        }
      });
      // 3カラム
      for (var i = 0; i <= 2; i++) {
        var num = (i - 2);
        $('.scrollin-3col:nth-child(3n' + num + ')').each(function () {
          var elemPos = $(this).offset().top;
          if (scroll > elemPos - visibleArea) {
            $(this).delay($delayInSpeed * i).queue(function () {
              $(this).addClass('is-visible').dequeue();
            });
          } else {
            $(this).stop().removeClass('is-visible');
          }
        });
      }
      // 4カラム
      for (var i = 0; i <= 3; i++) {
        var num = (i - 3);
        $('.scrollin-4col:nth-child(4n' + num + ')').each(function () {
          var elemPos = $(this).offset().top;
          if (scroll > elemPos - visibleArea) {
            $(this).delay($delayInSpeed * i).queue(function () {
              $(this).addClass('is-visible').dequeue();
            });
          } else {
            $(this).stop().removeClass('is-visible');
          }
        });
      }
    } else { //sp
      $('.scrollin-2col, .scrollin-3col, .scrollin-4col').each(function () {
        var elemPos = $(this).offset().top;
        if (scroll > elemPos - visibleArea) {
          $(this).addClass('is-visible');
        } else {
          $(this).removeClass('is-visible');
        }
      });
    }
  });
})

// ドロワー
$(function () {
  $body = $("body");
  $icon = $("#drawer-trigger span");
  $("#drawer-trigger").on("click", function (event) {
    if ($body.hasClass("drawer-active")) {
      $icon.text("menu");
    } else {
      $icon.text("close");
    }
    $body.toggleClass("drawer-active");
  });

  $(document).on("click", function (e) {
    if (!$(e.target).closest("#drawer, #drawer-trigger").length) {
      $body.removeClass("drawer-active");
      $icon.text("menu");
    }
  });
});

//ドロワーアコーディオンSP時のみ
$(function () {
  if (window.matchMedia("(max-width: 768px)").matches) {
    $(".drawer-nav-list .trigger").on("click", function (event) {
      event.preventDefault();
      $(this).toggleClass("active");
      $(this).siblings(".drawer-nav-sublist").slideToggle();
    });
  }
});

// スクロールアニメーション
$(function () {
  $(".scroll-link a").on("click", function (event) {
    event.preventDefault();

    var $this = $(this);
    var linkTo = $this.attr("href");
    var $target = $(linkTo);
    var offset = 0;
    var pos = $target.offset().top - offset;
    $("html,body").animate(
      {
        scrollTop: pos,
      },
      400
    );
  });
});

// ヘッダー＆固定バナー
$(function () {
  // PCの横幅狭くなったときにスクロール表示
  $(window).on("scroll", function () {
    $("#header").css("left", -$(window).scrollLeft());
    $(".pc-fixed-bnr").css("left", -$(window).scrollLeft());
  });
});
