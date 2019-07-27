<?php
$callbackJSONData=file_get_contents('php://input');
$callbackData=json_decode($callbackJSONData);
$transactionType=$callbackData->TransactionType;
$transID=$callbackData->TransID;
$transTime=$callbackData->TransTime;
$transAmount=$callbackData->TransAmount;
$businessShortCode=$callbackData->BusinessShortCode;
$billRefNumber=$callbackData->BillRefNumber;
$invoiceNumber=$callbackData->InvoiceNumber;
$orgAccountBalance=$callbackData->OrgAccountBalance;
$thirdPartyTransID=$callbackData->ThirdPartyTransID;
$MSISDN=$callbackData->MSISDN;
$firstName=$callbackData->FirstName;
$middleName=$callbackData->MiddleName;
$lastName=$callbackData->LastName;
//Save the returned data into the database or use it to finish certain operation.


//Perfomr X operation

echo "this is ssid ".$lastName;


$servername = "localhost";
$username = "root3";
$password = "123";
$dbname = "evento";


$conn = mysqli_connect($host,$username,$password,$db);

if ($conn->connect_error){
    echo 'failed';
}else{
    echo 'success';

    $sql = "INSERT INTO Transactions(s_msisdn,s_date,s_transaction_id,s_status,s_return_code,s_description,s_merchant_transaction_id) VALUES ('$MSISDN','$transAmount','$lastName','$firstName','$middleName','$businessShortCode','$transactionType');";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();



}
