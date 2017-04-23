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


    // function isOnScreen(element)
    // {
    //     var elementPos = element[0].offsetTop;
    //     var screenHeight = $(window).scrollY;
    //     return (elementPos > screenHeight) ? false : true;
    //
    //
    // }
    //
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

function modify_qty(val) {
    var qty = document.getElementById('qty').value;
    var new_qty = parseInt(qty,10) + val;

    if (new_qty < 0) {
        new_qty = 0;
    }

    document.getElementById('qty').value = new_qty;
    return new_qty;
}