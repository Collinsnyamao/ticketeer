function createNewUser(email,password,userFullName, userBirthday, userGender){
    firebase.auth().createUserWithEmailAndPassword(email, password).then(function (success) {
        console.log("signup successful");
        const newUserId = success.user.uid;
        const uid2 = newUserId.toString();
        console.table(success.user.uid);

        writeUserData(uid2,userFullName,userBirthday,userGender,email);

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

        }else if (userFullNames != '') {

            if (userBirthday == '') {
                console.log("Birthday input empty");

            }else if (userBirthday != '') {

                if (userGender == '') {
                    console.log("Gender input empty");

                }else if (userGender != '') {

                    if (userEmail == '') {
                        console.log("email input empty");

                    }else if (userEmail != '') {

                        createNewUser(userEmail,passwordInput,userFullNames,userBirthday,userGender);
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
    });
}