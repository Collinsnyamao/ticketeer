function loginByFirebase(email,password){
    firebase.auth().signInWithEmailAndPassword(email, password).then(function (user) {
        console.log(user.user.uid);
        console.log('signed in!');

        document.getElementById('alertlogin').hidden = false;
        document.getElementById('alertlogin').innerHTML = 'Successful Login';
        document.getElementById('alertlogin').classList.add('alert-success');

    }).catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        // ...

        document.getElementById('alertlogin').hidden = false;
        document.getElementById('alertlogin').innerHTML = errorMessage;
        document.getElementById('alertlogin').classList.add('alert-danger');
    });

}


$('#loginBtn').on('click',function () {
   console.log('clicked');

   const loginEmail = $('#loginEmail').val();
   const loginpwd = $('#loginPassword').val();

   console.log(loginEmail,loginpwd);


   if (loginEmail == '') {
       console.log('Email field is empty!');
   }else if (loginEmail != ''){
       if (loginpwd == '') {
           console.log('Password field is empty!');
       }else if (loginpwd != ''){
           loginByFirebase(loginEmail,loginpwd);
       }
   }

});