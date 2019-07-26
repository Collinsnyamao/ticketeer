firebase.auth().onAuthStateChanged(function(user) {
    if (user) {
        // User is signed in.
        console.log(user);



        $('#sendAmount').on('click',function () {
           var payPhone = $('#phoneInput').val();
           var quantity = $('#quantityInput').val();
           var payAmount = getQueryVariable("eventPrice");
           var totalAmount = quantity * payAmount;

           console.log(payPhone,' ',payAmount);


            $.ajax({
                type: "post",
                method: "POST",
                data: {phoneNumber:payPhone,totalAmount:totalAmount},
                url: "php/mPesa/payMpesa2.php",
                success: function (response) {
                    console.log('response3: '+ response);

                    var obj2 = JSON.parse(response);

                    console.log('after ', obj2["CustomerMessage"]);

                    /*var obj = JSON.parse(response);*/

                    document.getElementById('mpesaProgress').hidden = false;
                    document.getElementById('mpesaProgress').innerHTML = response["CustomerMessage"];
                }
            });



        });



    } else {

        console.log('user not signed in!');
        // No user is signed in.
    }
});