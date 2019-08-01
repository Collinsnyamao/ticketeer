firebase.auth().onAuthStateChanged(function(user) {
    if (user) {
        // User is signed in.

        setTimeout(function () {
            window.location.href = 'dashboard.php';
        },1000);
    } else {
        // No user is signed in.
    }
});

function signIn(email, password) {
    firebase.auth().signInWithEmailAndPassword(email, password).then(function () {

        document.getElementById('loginAdminAlert').hidden = false;
        document.getElementById('loginAdminAlert').classList.remove('alert-danger');
        document.getElementById('loginAdminAlert').classList.add('alert-success');
        document.getElementById('loginAdminAlert').innerHTML = 'Sign in successful Admin!';
        
    }).catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        document.getElementById('loginAdminAlert').hidden = false;
        document.getElementById('loginAdminAlert').classList.remove('alert-success');
        document.getElementById('loginAdminAlert').classList.add('alert-danger');
        document.getElementById('loginAdminAlert').innerHTML = errorMessage;
        // ...
    });
}

/*
function createuser(email, password) {
    firebase.auth().createUserWithEmailAndPassword(email, password).then(function () {
        console.log('success');
    }).catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        console.log(errorMessage);
        // ...
    });
}*/


$('#loginAdminBtn').on('click',function () {

    var loginEmail = $('#laEmail').val();
    var loginPassword = $('#laPwd').val();

    if (loginEmail == '') {

        document.getElementById('loginAdminAlert').hidden = false;
        document.getElementById('loginAdminAlert').classList.remove('alert-success');
        document.getElementById('loginAdminAlert').classList.add('alert-danger');
        document.getElementById('loginAdminAlert').innerHTML = 'Email Field Empty';

    }else if (loginEmail != '') {
        if (loginPassword == '') {
            document.getElementById('loginAdminAlert').hidden = false;
            document.getElementById('loginAdminAlert').classList.remove('alert-success');
            document.getElementById('loginAdminAlert').classList.add('alert-danger');
            document.getElementById('loginAdminAlert').innerHTML = 'Password Field Empty';

        }else if (loginPassword != '') {
            if (validateEmail(loginEmail)) {
                signIn(loginEmail,loginPassword);
            }else {

            }
        }
    }
});

function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function validate() {
    var $result = $("#loginAdminAlert");
    var email = $("#laEmail").val();
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