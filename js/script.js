jQuery(function () {

  //ページ内スクロール
  var navHeight = $(".header").outerHeight();

  $('a[href^="#"]').on("click", function () {
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top - navHeight;
    $("html, body").animate({ scrollTop: position, }, 300, "swing");
    return false;
  });

  //ページトップ
  $("#js-page-top").on("click", function () {
    $("body,html").animate({ scrollTop: 0, }, 300);
    return false;
  });

});

$(window).on('scroll load', function(){        /* ページロード時、またはスクロールされた時*/
var scroll = $(this).scrollTop();            /* 現在のスクロール量を測定 */
var windowHeight = $(window).height();       /* ウィンドウの高さを測定 */
$('.fadeIn').each(function(){                /* 「fadeIn」のクラスがついているものを1つずつ確認し・・・ */
  var cntPos = $(this).offset().top;         /* 対象の要素の上からの距離を測定 */
  if(scroll > cntPos - windowHeight + windowHeight / 3){  /* 要素がある位置までスクロールされていたら */
    $(this).addClass('active');              /* 「active」のクラスを付与 */
  }
});
$('.fadeLeft').each(function(){                /* 「fadeIn」のクラスがついているものを1つずつ確認し・・・ */
  var cntPos = $(this).offset().top;         /* 対象の要素の上からの距離を測定 */
  if(scroll > cntPos - windowHeight + windowHeight / 3){  /* 要素がある位置までスクロールされていたら */
    $(this).addClass('activeLeft');              /* 「active」のクラスを付与 */
  }
});
$('.fadeRight').each(function(){                /* 「fadeIn」のクラスがついているものを1つずつ確認し・・・ */
  var cntPos = $(this).offset().top;         /* 対象の要素の上からの距離を測定 */
  if(scroll > cntPos - windowHeight + windowHeight / 3){  /* 要素がある位置までスクロールされていたら */
    $(this).addClass('activeRight');              /* 「active」のクラスを付与 */
  }
});
});

const swiper = new Swiper(".swiper", {
  pagination: {
    el: ".swiper-pagination"
  },

  autoplay: true,
  loop: true,

  slidesPerView: 3,
  // ナビボタンが必要なら追加
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  }
});