var totalSum = function(kolicinaParam, idParam) {
    var total= 0, sum = 0;
    var cookie = JSON.parse($.cookie("cookieStore"));
    cookie[idParam]['kolicina'] = kolicinaParam;
    $.cookie("cookieStore", JSON.stringify(cookie), {path: '/'});
    for(var i=1; i <= cookie.length; i++) { 
        if(cookie[i]){
            id = "#total_" + i;
            sum = parseInt(cookie[i]['cena']) * parseInt(cookie[i]['kolicina']);
            total += sum;
            $(id).text(sum + ",00 din");
        }
    }
  $('#subtotal').text(total + ",00 din");
}

function modify_qty(val, object, idParam) {
    var total= 0, sum = 0;
    var new_qty = parseInt(object.value,10) + val;
    if (new_qty < 0) {
        new_qty = 0;
    }
    object.value = new_qty;
    totalSum(new_qty, idParam);
    // return new_qty;
}

function remove(idParam) {
    totalSum(0, idParam);
    $( "#cart_" + idParam ).remove();
}

$(document).ready(function () {
    if($.cookie('cookieStore')) {
        var data = JSON.parse($.cookie("cookieStore"));
        var total= 0;
        for(var i=1; i <= data.length; i++) {
            if(data[i]){
                var id = "cart_" + i,
                    idClick = "element_" + i,
                    _id = "#" + id,
                    price = "price_" + i,
                    suma = "total_" + i;
                var sum = parseInt(data[i]['cena']) * parseInt(data[i]['kolicina']);
                total += sum;
                $('.table').append("<div id='" + id + "' class='row'></div>");
                $(_id ).append("<div class='td'><img src='" + data[i]['slika'] + "'></div>");
                $(_id).append("<div class='td'><a href='http://elisa.rs/single/"+ i + "'>" + data[i]['name'] + "</a></div>");
                $(_id).append("<div class='td' id='"+ price + "'>" + data[i]['cena'] + "</div>");
                $(_id).append("<div class='td'><div class='qty'><input id='"+ idClick + "' value=" + data[i]['kolicina'] +"> <button onclick='modify_qty(-1, " + idClick + ", " + i +");'><i class='fa fa-angle-down' aria-hidden='true'></i></button><button onclick='modify_qty(1, " + idClick + ", " + i +");'><i class='fa fa-angle-up' aria-hidden='true'></i></button></div></div>");
                $(_id).append("<div class='td' id='"+ suma + "'>" + sum + ",00 din</div>");
                $(_id).append("<div class='td'><button onclick='remove("+i+");' class='delete'><i class='fa fa-times' aria-hidden='true'></i></button></div>")
                $('#subtotal').text(total + ",00 din");
            }
        }
    }

   $('#accept').click(function(){
        window.location ="/elisa/credentials";
    });

});