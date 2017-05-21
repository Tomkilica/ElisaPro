

function add(id) {
    if($.cookie('cookieStore')) {
        var data = JSON.parse($.cookie("cookieStore"));
            if (data[id]) {
                window.location = "/elisa/cart";
            } else {
                data[id] = createObject();
                $.cookie("cookieStore", JSON.stringify(data), {path: '/'});
            }

    } else {
        var products = [];
        products[id] = createObject();
        $.cookie("cookieStore", JSON.stringify(products), {path: '/'});
    }


}
function createObject() {
    var product = new Object();
    product.name = $("#title").text();
    product.slika = $("#img").attr("src");
    product.cena =  $("#price").text();
    product.kolicina = 1;
    return product;
}

$(window).load(function(){
    var $container = $('.portfolioContainer');
    $container.isotope({
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
    });

    $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');

        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        return false;
    });
});