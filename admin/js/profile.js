function createuser(email, password,uid,adminFname,adminLname) {
    firebase.auth().createUserWithEmailAndPassword(email, password).then(function () {
        console.log('success');
        document.getElementById('profileAlert').hidden = false;
        document.getElementById('profileAlert').classList.remove('alert-danger');
        document.getElementById('profileAlert').classList.add('alert-success');
        document.getElementById('profileAlert').innerHTML = 'User Signed up!';



        $.ajax({
            type: "post",
            method: "POST",
            data: {adminUid:uid,adminFname:adminFname,adminLname:adminLname,adminEmail:email},
            url: "php/createAdminProfile.php",
            success: function (response3) {
                console.log(response3);
                document.getElementById('profileAlert').innerHTML = "Data Added";
            }
        });


    }).catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        console.log(errorMessage);
        // ...
        document.getElementById('profileAlert').hidden = false;
        document.getElementById('profileAlert').classList.remove('alert-success');
        document.getElementById('profileAlert').classList.add('alert-danger');
        document.getElementById('profileAlert').innerHTML = errorMessage;
    });
}

var user1 = firebase.auth().currentUser;



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




firebase.auth().onAuthStateChanged(function(user) {
    if (user) {
        // User is signed in.
        console.log(user.uid);
        $('#createProfileBtn').on('click',function () {
            var  pFname= $('#profileFname').val();
            var  pLname= $('#profileLname').val();
            var  pEmail= $('#profileEmail').val();
            var  pPwd= $('#profilePassword').val();
            var  pConfirmPwd= $('#profileConfirmPassword').val();


            if (pFname == '') {
                document.getElementById('profileAlert').hidden = false;
                document.getElementById('profileAlert').classList.remove('alert-success');
                document.getElementById('profileAlert').classList.add('alert-danger');
                document.getElementById('profileAlert').innerHTML = 'First name field empty';

            }else if (pFname != '') {
                if (pLname == '') {

                    document.getElementById('profileAlert').hidden = false;
                    document.getElementById('profileAlert').classList.remove('alert-success');
                    document.getElementById('profileAlert').classList.add('alert-danger');
                    document.getElementById('profileAlert').innerHTML = 'Last name field empty';

                }else if (pLname != '') {
                    if (pEmail == '') {
                        document.getElementById('profileAlert').hidden = false;
                        document.getElementById('profileAlert').classList.remove('alert-success');
                        document.getElementById('profileAlert').classList.add('alert-danger');
                        document.getElementById('profileAlert').innerHTML = 'Email field empty';

                    }else if (pEmail != '') {
                        if (pPwd == '') {
                            document.getElementById('profileAlert').hidden = false;
                            document.getElementById('profileAlert').classList.remove('alert-success');
                            document.getElementById('profileAlert').classList.add('alert-danger');
                            document.getElementById('profileAlert').innerHTML = 'Password field empty';

                        }else if (pPwd != '') {
                            validate();
                            if (pPwd == pConfirmPwd) {

                                if (validateEmail(pEmail)) {
                                    createuser(pEmail,pPwd,user.uid,pFname,pLname);
                                }else {

                                }
                            }else if (pPwd != pConfirmPwd) {

                                document.getElementById('profileAlert').hidden = false;
                                document.getElementById('profileAlert').classList.remove('alert-success');
                                document.getElementById('profileAlert').classList.add('alert-danger');
                                document.getElementById('profileAlert').innerHTML = 'Passwords do not match!';
                            }
                        }
                    }
                }
            }


        });
    } else {
        // No user is signed in.
    }
});