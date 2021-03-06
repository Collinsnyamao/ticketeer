var database = firebase.database();
const ref = firebase.storage().ref('EventImages');


function getShorter(userId, eventName, eventDate, eventTime, eventImageUrl,eventPrice, eventDescription)
{
    var accessToken = '611ae5072f8e46904913c81f8c75a8dee1db3ae9';
    var url = 'https://api-ssl.bitly.com/v3/shorten?access_token=' + accessToken + '&longUrl=' + encodeURIComponent(eventImageUrl);

    $.getJSON(
        url,
        {},
        function(response)
        {
            console.log(response.data.url);

            $.ajax({
                type: "post",
                method: "POST",
                data: {uid:userId,eventName:eventName,eventDescription:eventDescription,eventImageUrl:response.data.url,eventDate:eventDate,eventPrice:eventPrice,eventTime:eventTime},
                url: "php/addEvent.php",
                success: function (response) {
                    console.log('response3: '+ response);
                    document.getElementById('eventAlert').hidden = false;
                    document.getElementById('eventAlert').classList.remove('alert-danger');
                    document.getElementById('eventAlert').classList.remove('alert-info');
                    document.getElementById('eventAlert').classList.add('alert-success');
                    document.getElementById('eventAlert').innerHTML = 'data Added';
                }
            });


        }
    );
}



function writeUserData(userId, eventName, eventDate, eventTime, eventImageUrl,eventPrice, eventDescription) {
    firebase.database().ref('Events/' + eventName).set({
        username: userId,
        eventName: eventName,
        eventDate : eventDate,
        eventTime: eventTime,
        eventImageUrl: eventImageUrl,
        eventPrice: eventPrice,
        eventDescription: eventDescription
    }).then(function () {

        getShorter(userId,eventName,eventDate,eventTime,eventImageUrl,eventPrice,eventDescription);

        /*$.ajax({
            type: "post",
            method: "POST",
            data: {uid:userId,eventName:eventName,eventDescription:eventDescription,eventImageUrl:shorterUrl,eventDate:eventDate,eventPrice:eventPrice,eventTime:eventTime},
            url: "php/addEvent.php",
            success: function (response) {
                console.log('response3: '+ response);
            }
        });*/

    });
}

firebase.auth().onAuthStateChanged(function(user) {
    if (user) {
        // User is signed in.
        console.log(user.uid);
        $('#btnsubmitevent').on('click',function () {

            console.log('clicked');
            document.getElementById('eventAlert').hidden = false;
            document.getElementById('eventAlert').classList.remove('alert-danger');
            document.getElementById('eventAlert').classList.remove('alert-success');
            document.getElementById('eventAlert').classList.add('alert-info');
            document.getElementById('eventAlert').innerHTML = 'Loading ...';

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
                    document.getElementById('eventAlert').hidden = false;
                    document.getElementById('eventAlert').classList.remove('alert-danger');
                    document.getElementById('eventAlert').classList.remove('alert-info');
                    document.getElementById('eventAlert').classList.add('alert-success');
                    document.getElementById('eventAlert').innerHTML = 'Event Added';
                    writeUserData(user.uid,eventName,eventDate,eventTime,url,eventprice,eventdesc);
                })
                .catch(console.error);

        });
    } else {
        // No user is signed in.
        console.log('not signed in!');
    }
});