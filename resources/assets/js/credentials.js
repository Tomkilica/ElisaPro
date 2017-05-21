$(document).ready(function () {

    $('#submit').click(function (e) {
        e.preventDefault();

            // var data = new AddressData();
            // data.append('firstname', $("[name='firstName']").val());
            // data.append('lastname', $("[name='lastName']").val());
            // data.append('phone', $("[name='tel']").val());
            // data.append('address', $("[name='address']").val());
            // data.append('zip', $("[name='zip']").val());
        $.ajax({
            type: "post",
            url: "/elisa/credentials",
            dataType: "json",
            data: $("#newAddress").serialize(),
            enctype: "multipart/form-data",
            contentType: false,
            processData: false,
            success: function(data) {
                console.log(data); // show response from the php script.
            }
        });





    });


});


