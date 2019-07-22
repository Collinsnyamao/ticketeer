var database = firebase.database();
const ref = firebase.storage().ref('EventImages');




function writeUserData(userId, eventName, eventDate, eventTime, eventImageUrl,eventPrice, eventDescription) {
    firebase.database().ref('Events/' + userId).set({
        username: userId,
        eventName: eventName,
        eventDate : eventDate,
        eventTime: eventTime,
        eventImageUrl: eventImageUrl,
        eventPrice: eventPrice,
        eventDescription: eventDescription
    });
}

$('#btnsubmitevent').on('click',function () {


    var eventprice = document.getElementById('ticketprice').value;
    var eventName = document.getElementById('eventname').value;
    var eventDate = document.getElementById('datepick').value;
    var eventTime = document.getElementById('timepick').value;
    var eventdesc = document.getElementById('eventdesc').value;

    const file = document.querySelector('#filepick').files[0];
    const name = (+new Date()) + '-' + file.name;
    const metadata = {
        contentType: file.type
    };
    const task = ref.child(name).put(file, metadata);
    task
        .then(snapshot => snapshot.ref.getDownloadURL())
        .then((url) => {
            console.log(url);
            console.log("done with upload!");
            document.querySelector('#recepientTag').src = url;
        })
        .catch(console.error);

});