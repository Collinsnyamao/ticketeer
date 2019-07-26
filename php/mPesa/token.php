<?php
$url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);

	$app_consumer_key = 'umej4q7yZW5uRy8apJAntTrZKlcbGraA';
    $app_consumer_secret = 'LYpZgGVv4ePwSzOs';
	$credentials = base64_encode($app_consumer_key.':'.$app_consumer_secret);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Basic '.$credentials)); //setting a custom header
curl_setopt($curl, CURLOPT_HEADER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$curl_response = curl_exec($curl);

$resp=json_decode($curl_response);

?>