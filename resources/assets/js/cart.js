function modify_qty(val, object, id) {
    var total= 0, sum = 0;
    var qty = object.value;
    var new_qty = parseInt(qty,10) + val;

    if (new_qty < 0) {
        new_qty = 0;
    }

    object.value = new_qty;
    var cookie = JSON.parse($.cookie("cookieStore"));
    cookie[id]['kolicina'] = new_qty;
    
    $.cookie("cookieStore", JSON.stringify(cookie), {path: '/'});
    $('#subtotal').text(total + ",00 din");
    return new_qty;
}

$(document).ready(function () {
    if($.cookie('cookieStore')) {
        var data = JSON.parse($.cookie("cookieStore"));
        var total= 0;
        for(var i=1; i <= data.length; i++) {
            if(data[i]){
                var id = "cart_" + i,
                    idClick = "cartClick_" + i,
                    _id = "#" + id,
                    price = "price_" + i,
                    suma = "total_" + i;
                var sum = parseInt(data[i]['cena']) * parseInt(data[i]['kolicina']);
                total += sum;
                $('.table').append("<tr id='" + id + "' class='row'></tr>");
                $(_id ).append("<td><img src='" + data[i]['slika'] + "'></td>");
                $(_id).append("<td>" + data[i]['name'] + "</td>");
                $(_id).append("<td id='"+ price + "'>" + data[i]['cena'] + "</td>");
                $(_id).append("<td><div class='qty'><input id='"+ idClick + "' value=" + data[i]['kolicina'] +"> <button onclick='modify_qty(-1, " + idClick + ", " + i +");'><i class='fa fa-angle-down' aria-hidden='true'></i></button><button onclick='modify_qty(1, " + idClick + ", " + i +");'><i class='fa fa-angle-up' aria-hidden='true'></i></button></div></td>");
                $(_id).append("<td id='"+ suma + "'>" + sum + ",00 din</td>");
                $('#subtotal').text(total + ",00 din");
            }
        }
    }

   $('#accept').click(function(){
        window.location ="/elisa/credentials";
    });

});