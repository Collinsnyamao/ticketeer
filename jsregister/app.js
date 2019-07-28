function createNewUser(email,password,userFullName, userBirthday, userGender){
    firebase.auth().createUserWithEmailAndPassword(email, password).then(function (success) {
        console.log("signup successful");
        const newUserId = success.user.uid;
        const uid2 = newUserId.toString();
        console.table(success.user.uid);

        writeUserData(uid2,userFullName,userBirthday,userGender,email);
        document.getElementById('regAlert').hidden = false;
        document.getElementById('regAlert').innerHTML = 'Successful signup';
        document.getElementById('regAlert').classList.add('alert-success');

        setTimeout(function () {
            window.location.href = 'events.php';
        },2000);



    }).catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        // ...

        console.log(errorMessage);
    });
}


$('#submitbtn').on('click',function () {


    const userFullNames = $('#usernames').val();
    const userBirthday = $('#birthdatepicker').val();
    const userGender = $('#genderselector').val();
    const userEmail = $('#useremail').val();
    const passwordInput = $('#userpwd').val();
    const confirmpwd = $('#confirmpwd').val();
    console.log('clicked ', userFullNames , userBirthday,userGender,userEmail,passwordInput,confirmpwd);



    if (passwordInput !== confirmpwd) {
        console.log("passwords do not match");
    }else if (passwordInput === confirmpwd) {
        console.log("passwords match");

        if (userFullNames == '') {
            console.log("name input empty");
            document.getElementById('regAlert').hidden = false;
            document.getElementById('regAlert').classList.remove('alert-success');
            document.getElementById('regAlert').classList.add('alert-danger');
            document.getElementById('regAlert').innerHTML = 'name input empty!';
        }else if (userFullNames != '') {

            if (userBirthday == '') {
                console.log("Birthday input empty");
                document.getElementById('regAlert').hidden = false;
                document.getElementById('regAlert').classList.remove('alert-success');
                document.getElementById('regAlert').classList.add('alert-danger');
                document.getElementById('regAlert').innerHTML = 'Birthday input empty!';

            }else if (userBirthday != '') {

                if (userGender == '') {
                    console.log("Gender input empty");
                    document.getElementById('regAlert').hidden = false;
                    document.getElementById('regAlert').classList.remove('alert-success');
                    document.getElementById('regAlert').classList.add('alert-danger');
                    document.getElementById('regAlert').innerHTML = 'Gender input empty!';

                }else if (userGender != '') {

                    if (userEmail == '') {
                        console.log("email input empty");
                        document.getElementById('regAlert').hidden = false;
                        document.getElementById('regAlert').classList.remove('alert-success');
                        document.getElementById('regAlert').classList.add('alert-danger');
                        document.getElementById('regAlert').innerHTML = 'email input empty!';

                    }else if (userEmail != '') {

                        createNewUser(userEmail,passwordInput,userFullNames,userBirthday,userGender);
                        document.getElementById('regAlert').hidden = false;
                        document.getElementById('regAlert').classList.remove('alert-success');
                        document.getElementById('regAlert').classList.add('alert-info');
                        document.getElementById('regAlert').innerHTML = 'Loading ...';

                    }
                }
            }
        }


    }

});


function writeUserData(userId, userFullName, userBirthday, userGender, userEmail) {
    firebase.database().ref('Users/' + userId).push({
        userFullName: userFullName,
        userBirthday: userBirthday,
        userGender : userGender,
        userEmail: userEmail
    }).then(function (success) {
        console.log("data added");

        $.ajax({
            type: "post",
            method: "POST",
            data: {uid:userId,bday:userBirthday,uemail:userEmail,userFullNames:userFullName,userGender:userGender},
            url: "php/addUsers.php",
            success: function (response) {
                console.log('response3: '+ response);
            }
        });

    });
}