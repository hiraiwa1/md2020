// スクロール透過
$(document).ready(function() {
  $(window).scroll(function() {
    if($(this).scrollTop() > 10) {
      $('.header_nav, .menu-item').addClass('scroll');

    } else {
      $('.header_nav, .menu-item').removeClass('scroll');
    }
  });
});

// スライダー（スマホオン、PCオフ）
var init = {
  infinite: true,
  cssEase: "linear",
  slidesToShow: 1,
  slidesToScroll: 1,
  prevArrow: '<span class="prev-arrow">&lt;</span>',
  nextArrow: '<span class="next-arrow">&gt;</span>'
};

$(function() {
  var win = $(window);
  var slider = $(".js-slider");

  win.on("load resize", function() {
    if(win.width() < 776) {
      slider.not(".slick-initialized").slick(init);
    } else if (slider.hasClass("slick-initialized")) {
      slider.slick("unslick");
    }
  });
});

// トップページスクロール
$(function(){
  var pageTop = $('.page_top');
  pageTop.hide();
  $(window).scroll(function() {
    if($(this).scrollTop() > 100) {
      pageTop.fadeIn();
    } else {
      pageTop.fadeOut();
    }
  });
  pageTop.click(function() {
    $('body, html').animate({
      scrollTop: 0
    }, 500);
    return false
  });
});


// ハンバーガーメニュー
$(function() {
  $('.toggle').on('click', function() {
    $(this).toggleClass('active');
    if($(this).hasClass('active')) {
      $('.menu').addClass('active');
    } else {
      $('.menu').removeClass('active')
    }
    return false;
  });
});

//メール送信後のメッセージ
$(function() {
  $('button[type=submit]').on('click', function() {

    // Formに入力されたデータを取得
    var name = $('#name').val();
    var tel = $('#tel').val();
    var email = $('#email').val();
    var body =$('#inquiry-body').val();

    // 連想配列化
    var postData = {"name":name, "tel":tel, "email":email, "body":body};

    // POSTで送信
    $.post(
      "confirm.php",
      postData,
    );

    // 送信完了後の処理（送信完了のメッセージ表示）
    $('.send-email').html('<p>お問い合わせありがとうございます。<br>メッセージは正常に送信されました</p>');
    $('#name').val("");
    $("#tel").val("");
    $('#email').val("");
    $('#inquiry-body').val("");
  });
});
