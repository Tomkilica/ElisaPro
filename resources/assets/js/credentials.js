$(document).ready(function () {
    var data;
    $('#submit').click(function (e) {
        e.preventDefault();  
        data = new FormData();
        data.append('firstname', $("[name='firstName']").val());
        data.append('lastname', $("[name='lastName']").val());
        data.append('phone', $("[name='tel']").val());
        data.append('address', $("[name='address']").val());
        data.append('zip', $("[name='zip']").val());
        data.append('user', false);
        buy_product(data);
    });

     $('#submit_user').click(function (e) {
        e.preventDefault();
        data = new FormData();
        data.append('user', true);
        buy_product(data);
    });

     function buy_product(dataParam) {
        var productsId = "", productsKolicina= "";
        var cookie = JSON.parse($.cookie("cookieStore"));
        for (var i = cookie.length - 1; i >= 0; i--) {
            if(cookie[i] !== null) {
                productsId += i + ",";
                productsKolicina += cookie[i].kolicina + ",";   
            }
        }
        dataParam.append('productsId', productsId);
        dataParam.append('productsKolicina', productsKolicina);
        dataParam.append('_token', $("[name='_token']").val());
        
        $.ajax({
            type: "post",
            url: "/credentials",
            dataType: 'JSON',
            data: dataParam,
            enctype: "multipart/form-data",
            contentType: false,
            processData: false,
            success: function(data) {
                if(!data) {
                } else {
                    for (var i = cookie.length - 1; i >= 0; i--) {
                        if(cookie[i] !== null) {
                            cookie[i] = null;
                        }
                    }
                    $.cookie("cookieStore", JSON.stringify(cookie), {path:'/'});
                    window.location ="/success";
                }
            },
            error: function (exception) {

            }
        });
     }

});