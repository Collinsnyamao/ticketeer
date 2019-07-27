var source = new EventSource("php/mPesa/callback.php");
source.onmessage = function(event) {
    console.log(event.data);
};