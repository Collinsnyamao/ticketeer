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
                data: {mpesaID:code},
                url: "php/confirmPayment.php",
                success: function (response) {
                    console.log(response);
                    var values = response.split("%");
                    console.log(values[0]);
                    if (values[1] == 0) {
                        console.log('Affirmative!');
                        document.getElementById('confirmAlert').classList.add('alert-success');
                        document.getElementById('confirmAlert').classList.remove('alert-danger');
                        document.getElementById('confirmAlert').innerHTML = 'PAYMENT RECIEVED! hold on...';

                        setTimeout(function () {
                            document.getElementById('beforeC').hidden = true;
                            document.getElementById('afterC').hidden = false;
                        },1000);

                        $('#mpesaCodeBtnC').on('click',function () {
                            var ticketFname = $('#ticketFname').val();
                            var ticketLname = $('#ticketLname').val();
                            var ticketEmail = $('#ticketEmail').val();
                            var ticketParking = $('#parkingSelector').val();
                            var ticketFood = $('#foodSelector').val();
                            var ticketDrinks = $('#drinkSelector').val();
                            var ticketPreference = $('#preferenceSelector').val();


                            validate();

                            if (validateEmail(ticketEmail)){
                                console.log(ticketEmail,ticketFname,ticketLname);

                                $.ajax({
                                    type: "post",
                                    method: "POST",
                                    data: {ticketFname:ticketFname,ticketLname:ticketLname,ticketEmail:ticketEmail,ticketPurchaseCode:code,ticketEventName:eventName,ticketQuantity:quantity,ticketParking:ticketParking,ticketFood:ticketFood,ticketDrinks:ticketDrinks,ticketPreferences:ticketPreference},
                                    url: "php/createTicket.php",
                                    success: function (response3) {
                                        console.log(response3);
                                        document.getElementById('ticketAlert').innerHTML = "ticket sent! check your email within the next 5 minutes!";
                                    }
                                });
                            } else {
                            }
                        });

                    }else {
                        console.log('Negative' + values[1]);
                    }
                    
                    
                }
            });


        }
    }


});

function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function validate() {
    var $result = $("#ticketAlert");
    var email = $("#ticketEmail").val();
    $result.text("");

    if (validateEmail(email)) {
        $result.text(email + " is valid :) "+'sending tickets ...');
        $result.css("color", "green");
    } else {
        $result.text(email + " is not valid :(");
        $result.css("color", "red");
    }
    return false;
}