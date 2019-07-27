if(typeof(EventSource) !== "undefined") {
    var source = new EventSource("php/mPesa/callback.php");
    source.onmessage = function(event) {
        console.log(event.data);
    };
} else {
    console.log("Sorry, your browser does not support server-sent events...");
}