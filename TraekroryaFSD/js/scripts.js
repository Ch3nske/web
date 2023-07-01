/*Плавающий хэдэр*/
var options ={
    offset: 180
}
var header = new Headhesive('.header', options);

/*jQuery кнопка "Наверх".*/
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('.scrollup').fadeIn();
        }
        else {
            $('.scrollup').fadeOut();
        }
    });
    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 1500);
        return false;
    });
});
/**/

/*Прелоадер*/
window.onload = function () {
      document.body.classList.add('loaded_hiding');
      window.setTimeout(function () {
        document.body.classList.add('loaded');
        document.body.classList.remove('loaded_hiding');
      }, 500);
    }
/**/

/*owl-carousel*/
$(function(){
    $(".slide-one").owlCarousel({
        items:4,
        loop:true,
        margin:10,
        nav: true,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            800: {
                items: 3
            },
            1100: {
                items: 4
            }
        }
    });
$(".slide-two").owlCarousel({
        items:1,
        video:true,
        loop:true, //Зацикливаем слайдер
        margin:10, //Отступ от картино если выводите больше 1
        nav:false, //Отключил навигацию
        autoplay:false, //Автозапуск слайдера
        afterAction: function(current) {
        current.find('.video').get(0).play();
    }
    });
});
/**/
