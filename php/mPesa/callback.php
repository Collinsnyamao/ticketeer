<?php
$callbackJSONData=file_get_contents('php://input');
$callbackData=json_decode($callbackJSONData);
/*$transactionType=$callbackData->TransactionType;
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
$lastName=$callbackData->LastName;*/
//Save the returned data into the database or use it to finish certain operation.

$myfile = fopen("testfile.txt", "w");
fwrite($myfile, $callbackJSONData);
fclose($myfile);

//Perfomr X operation
/*
echo "status: ".$lastName;


$servername = "localhost";
$username = "root3";
$password = "123";
$dbname = "evento";


$conn = mysqli_connect($host,$username,$password,$dbname);

if ($conn->connect_error){
    echo 'failed';
}else{
    echo 'success';

    $sql = "insert into Transactions(transactionMpesaID, transactionTime, transactionAmount, businessShortCode, billRefNumber, invoiceNumber, orgAccountBalance, thirdPartyTransID, MSISDN, firstName, middleName, lastName,transactionType) VALUES ('$transID','$transTime','$transAmount','$businessShortCode','$billRefNumber','$billRefNumber','$orgAccountBalance','$thirdPartyTransID','$MSISDN','$firstName','$middleName','$lastName','$transactionType')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();



}*/
