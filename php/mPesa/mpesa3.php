<?php
/**
 * Created by PhpStorm.
 * User: collinsnyamao
 * Date: 11/7/18
 * Time: 6:23 PM
 */
$mpesa= new \Safaricom\Mpesa\Mpesa();

$timestamp =date('YmdHis');
//        dd($timestamp);
$passkey = "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
$short_code = "174379";
$amount = 3;
$phone = '254715024545';
$app_consumer_key = 'umej4q7yZW5uRy8apJAntTrZKlcbGraA ';
$app_consumer_secret = 'LYpZgGVv4ePwSzOs';
$password = base64_encode($short_code . $passkey . $timestamp);




$BusinessShortCode =$short_code;
$LipaNaMpesaPasskey =$passkey;

$TransactionType ="CustomerPayBillOnline";
$Amount = 3;
$PartyA = $phone;
$PartyB = $short_code;
$PhoneNumber = $phone;
$CallBackURL = "http://159.89.135.168/projects/ISproject/web/admin/php/mPesa/callback2.php";
$AccountReference = "Order 43";
$TransactionDesc = "Paybill Online";
$Remarks = "remark";
$stkPushSimulation=$mpesa->STKPushSimulation($BusinessShortCode, $LipaNaMpesaPasskey, $TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remarks);
?>