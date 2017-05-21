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
        dataParam.append('products',JSON.parse($.cookie("cookieStore")));
        dataParam.append('_token', $("[name='_token']").val());
         $.ajax({
            type: "post",
            url: "/elisa/credentials",
            dataType: "json",
            data: dataParam,
            enctype: "multipart/form-data",
            contentType: false,
            processData: false,
            success: function(data) {
                console.log(data); // show response from the php script.
            }
        });
     }

});