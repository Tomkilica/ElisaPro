$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop:true,
        autoplay: true,
        margin:20,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });

    var counted = false;
    $(window).scroll(function() {
        var scrollTop = $(this).scrollTop();
        var elementPos = $('#counter')[0].offsetTop - 200;
        if(elementPos < scrollTop && !counted){
            counted = true;
            $('.count').each(function () {
                $(this).prop('Counter',0).animate({
                    Counter: $(this).attr('count-data')
                }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
        }
    });
});