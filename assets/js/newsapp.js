firebase.auth().onAuthStateChanged(function(user) {
    if (user) {
        // User is signed in.
        console.log(user);



        $('#sendAmount').on('click',function () {
           var payPhone = $('#phoneInput').val();
           var payAmount = getQueryVariable("eventPrice");

           console.log(payPhone,' ',payAmount);

        });



    } else {

        console.log('user not signed in!');
        // No user is signed in.
    }
});