

/*
 $(document).ready(function () {
        jQuery("#form1").submit(function () {
          var formNm = jQuery('#form1');
          var formData = new FormData(this);
          jQuery.ajax({
            type: "POST"
                    , url: "/templates/Potboiler/PostFile.php"
                    , cache: false
                    , contentType: false
                    , processData: false
                    , data: formData
                    , success: function (data) {
                        jQuery(formNm).html(data);
                    }
                    , error: function (jqXHR, text, error) {
                        jQuery(formNm).html(error);
                    }
          }).done(function () {
            $(this).find("input").val("");
            jQuery("#form1").trigger("reset");
        });
          return false;
        });
      });
      */

/*
//фикс меню
      jQuery(document).ready(function(){
        jQuery(function(jQuery){
          var content_height = jQuery('#me').offset().top;
          jQuery(window).scroll(function() {
            var top = jQuery(document).scrollTop();
            if (top > content_height) jQuery('#me').addClass('fixed');
            else jQuery('#me').removeClass('fixed');

          });
        });
      })
      */
      // плавное меню :D
      //например stroyzem.kz
 /*     jQuery(document).ready(function( $ ){
        $("#me, #fmenu").on("click","a", function (event) {
          //отменяем стандартную обработку нажатия по ссылке
          event.preventDefault();

          //забираем идентификатор бока с атрибута href
          var id  = $(this).attr('href'),

              //узнаем высоту от начала страницы до блока на который ссылается якорь
              top = $(id).offset().top;

          //анимируем переход на расстояние - top за 1500 мс
          $('body,html').animate({scrollTop: top}, 1500);
        });
      });
      */
      // маска
   /*       $(function () {
                    $("#te").mask("+7 (999) 999-9999");
                  });*/

                  var swiper = new Swiper('.swiper-container', {
                    slidesPerView: 3,
                    spaceBetween: 30,
                    navigation: {
                      nextEl: '.swiper-button-next',
                      prevEl: '.swiper-button-prev',
                    },
                    breakpoints: {
    // when window width is >= 320px
    200: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    // when window width is >= 480px
    768: {
      slidesPerView: 2,
      spaceBetween: 30
    },
    // when window width is >= 640px
    1024: {
      slidesPerView: 3,
      spaceBetween: 40
    }
  },
                  });

                  var swiper2 = new Swiper('.swiper-container2', {
                    slidesPerView: 3,
                    spaceBetween: 30,
                    pagination: {
                      el: '.swiper-pagination',
                      clickable: true,
                    },
                    breakpoints: {
    // when window width is >= 320px
    200: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    // when window width is >= 480px
    768: {
      slidesPerView: 2,
      spaceBetween: 30
    },
    // when window width is >= 640px
    1024: {
      slidesPerView: 3,
      spaceBetween: 40
    }
  },
});

jQuery(function($){
    $('#phone').mask('+7 (999) 999-9999');
});

                  window.onscroll = function() {scrollFunction()};

                  function scrollFunction() {
                    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                      document.getElementById("header").style.background = "rgba(0,0,0,0.8)";
                      document.getElementById("logo").style.width = "70px";
                    } else {
                      document.getElementById("header").style.background = "transparent";
                      document.getElementById("logo").style.width = "96px";
                    }
                  }

                  $(function(){
                    $('a[data-target^="anchor"]').bind('click.smoothscroll', function(){
                      var target = $(this).attr('href'),
                      bl_top = $(target).offset().top - 90;
                      $('body, html').animate({scrollTop: bl_top}, 700);
                      return false ;

                    })

                  })
