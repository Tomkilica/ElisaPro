function modify_qty(val) {
    var qty = document.getElementById('qty').value;
    var new_qty = parseInt(qty,10) + val;

    if (new_qty < 0) {
        new_qty = 0;
    }

    document.getElementById('qty').value = new_qty;
    return new_qty;
}

$(document).ready(function () {

    if($.cookie("cookieStore")) {
        var dataExist = JSON.parse($.cookie("cookieStore"));
        if(dataExist[$("#id").val()]){
            $("#qty").val(dataExist[$("#id").val()].kolicina);
        }
    }

    $("#insert").click(function(){
        if($.cookie('cookieStore')){
            var data = JSON.parse($.cookie("cookieStore"));
            if(data[$("#id").val()]){
                var productCookie = data[$("#id").val()];
                if($("#qty").val() != productCookie.kolicina) {
                    data[$("#id").val()].kolicina = $("#qty").val();
                    $.removeCookie("cookieStore");
                    $.cookie("cookieStore", JSON.stringify(data));
                }
            } else {
                data[$("#id").val()] = createObject();
                $.cookie("cookieStore", JSON.stringify(data), { path: '/' });
            }
        }else {
            var products = [];
            products[$("#id").val()] = createObject();
            $.cookie("cookieStore", JSON.stringify(products), { path: '/' });
        }
    });

    function createObject() {
        var product = new Object();
        product.name = $("#title").text();
        product.slika = $("#img").attr("src");
        product.kolicina = $("#qty").val();
        product.cena =  $("#price").text();
        return product;
    }

});