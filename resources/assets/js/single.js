function modify_qty(val) {
    var qty = document.getElementById('qty').value;
    var new_qty = parseInt(qty,10) + val;
    if (new_qty < 0) {
        new_qty = 0;
    }
    document.getElementById('qty').value = new_qty;
    return new_qty;
}

function coockieFun(id, value) {
    var cookie = JSON.parse($.cookie("cookieStore"));
    cookie[id]['kolicina'] = value;
    $.cookie("cookieStore", JSON.stringify(cookie), {path:'/'});
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
            var cookie = JSON.parse($.cookie("cookieStore"));
            if(cookie[$("#id").val()]){
                var productCookie = cookie[$("#id").val()];
                var val = $("#qty").val();;
                if(val != productCookie.kolicina) {
                    coockieFun($("#id").val(), val);
                }
            } else {
                cookie[$("#id").val()] = createObject();
                $.cookie("cookieStore", JSON.stringify(cookie), {path:'/'});
            }
        }else {
            var products = [];
            products[$("#id").val()] = createObject();
            $.cookie("cookieStore", JSON.stringify(products) , {path:'/'});
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

    $("#pop").on("click", function() {
        $('#imagepreview').attr('src', $('#img').attr('src'));
        $('#imagemodal').modal('show');
    });

});