firebase.auth().onAuthStateChanged(function(user) {
    if (user) {
        // User is signed in.
        console.log(user);
    } else {

        console.log('user not signed in!');
        // No user is signed in.
    }
});