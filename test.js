function getShorter(url)
{
    var accessToken = '611ae5072f8e46904913c81f8c75a8dee1db3ae9';
    var url = 'https://api-ssl.bitly.com/v3/shorten?access_token=' + accessToken + '&longUrl=' + encodeURIComponent(url);

    $.getJSON(
        url,
        {},
        function(response)
        {
            console.log(response.data.url);
        }
    );
}

/*
Sign up for Bitly account at
 https://bitly.com/a/sign_up

and upon completion visit
https://bitly.com/a/your_api_key/
to get "login" and "api_key" values
*/
var api_key = "611ae5072f8e46904913c81f8c75a8dee1db3ae9";
var long_url = "https://firebasestorage.googleapis.com/v0/b/evento-1ec0f.appspot.com/o/EventImages%2F1563928639545-191521.jpg?alt=media&token=b5ef4464-690b-45b4-a399-44c40e6c0e7c";

getShorter(long_url)