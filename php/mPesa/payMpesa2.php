<?php

$url2 = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url2);

$app_consumer_key2 = 'umej4q7yZW5uRy8apJAntTrZKlcbGraA';
$app_consumer_secret2 = 'LYpZgGVv4ePwSzOs';
$credentials2 = base64_encode($app_consumer_key2.':'.$app_consumer_secret2);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Basic '.$credentials2)); //setting a custom header
// curl_setopt($curl, CURLOPT_HEADER, true);

// curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$curl_response = curl_exec($curl);

$token_info=json_decode($curl_response,true);

$token = $token_info['access_token'];



$url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer '.$token.'')); //setting custom header

$timestamp =date('YmdHis');
//        dd($timestamp);
$passkey = "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
$short_code = "174379";
$amount = $_POST['totalAmount'];
$phone = $_POST['phoneNumber'];
$reference = $_POST['eventName'];
$app_consumer_key = 'umej4q7yZW5uRy8apJAntTrZKlcbGraA ';
$app_consumer_secret = 'LYpZgGVv4ePwSzOs';
$password = base64_encode($short_code . $passkey . $timestamp);

$curl_post_data = array(
    //Fill in the request parameters with valid values
    "BusinessShortCode" => $short_code,
    "Password" => $password,
    "Timestamp" => $timestamp,
    "TransactionType" => "CustomerPayBillOnline",
    "Amount" => $amount,
    "PartyA" => $phone,
    "PartyB" => $short_code,
    "PhoneNumber" => $phone,
    "CallBackURL" => "http://165.22.215.186/ticketeer/php/mPesa/callback.php",
    "AccountReference" => $reference,
    "TransactionDesc" => "Paybill Online"
);

$data_string = json_encode($curl_post_data);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);

$curl_response = curl_exec($curl);
print_r($curl_response);

echo $curl_response;



?>