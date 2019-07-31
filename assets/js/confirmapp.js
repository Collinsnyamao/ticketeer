$('#mpesaCodeBtn').on('click',function () {

    var code = $('#mpesaCode').val().toUpperCase();
    console.log('confirm code is: ' + code);



    if (code == '') {
        console.log(code.length);
        document.getElementById('confirmAlert').classList.remove('alert-success');
        document.getElementById('confirmAlert').classList.add('alert-danger');
        document.getElementById('confirmAlert').innerHTML = 'this field cannot be empty!';
    }else if (code != '') {


        if (code.length != 10) {
            console.log(code.length);
            document.getElementById('confirmAlert').classList.remove('alert-success');
            document.getElementById('confirmAlert').classList.add('alert-danger');
            document.getElementById('confirmAlert').innerHTML = 'the code is not correctly formated!';

        }else if (code.length == 10){
            console.log(code.length);
            document.getElementById('confirmAlert').classList.add('alert-success');
            document.getElementById('confirmAlert').classList.remove('alert-danger');
            document.getElementById('confirmAlert').innerHTML = 'Code is being confirmed! Loading ...';



            $.ajax({
                type: "post",
                method: "POST",
                data: {phoneNumber:payPhone,totalAmount:totalAmount,eventName:realTitle},
                url: "php/mPesa/payMpesa2.php",
                success: function (response) {

                }
            });


        }
    }


});