<?php
$callbackJSONData=file_get_contents('php://input');
$callbackData=json_decode($callbackJSONData);
$resultCode=$callbackData->Body->stkCallback->ResultCode;
$resultDesc=$callbackData->Body->stkCallback->ResultDesc;
$merchantRequestID=$callbackData->Body->stkCallback->MerchantRequestID;
$checkoutRequestID=$callbackData->Body->stkCallback->CheckoutRequestID;

$amount=$callbackData->stkCallback->Body->CallbackMetadata->Item[0]->Value;
$mpesaReceiptNumber=$callbackData->Body->stkCallback->CallbackMetadata->Item[1]->Value;
$balance=$callbackData->stkCallback->Body->CallbackMetadata->Item[2]->Value;
$b2CUtilityAccountAvailableFunds=$callbackData->Body->stkCallback->CallbackMetadata->Item[3]->Value;
$transactionDate=$callbackData->Body->stkCallback->CallbackMetadata->Item[4]->Value;
$phoneNumber=$callbackData->Body->stkCallback->CallbackMetadata->Item[5]->Value;
//Save the returned data into the database or use it to finish certain operation.

$result=[
    "resultDesc"=>$resultDesc,
    "resultCode"=>$resultCode,
    "merchantRequestID"=>$merchantRequestID,
    "checkoutRequestID"=>$checkoutRequestID,
    "amount"=>$amount,
    "mpesaReceiptNumber"=>$mpesaReceiptNumber,
    "balance"=>$balance,
    "b2CUtilityAccountAvailableFunds"=>$b2CUtilityAccountAvailableFunds,
    "transactionDate"=>$transactionDate,
    "phoneNumber"=>$phoneNumber
];

//Perfomr X operation

echo "status: ".$resultDesc;


$servername = "localhost";
$username = "root3";
$password = "123";
$dbname = "evento";


$conn = mysqli_connect($host,$username,$password,$dbname);

if ($conn->connect_error){
    echo 'failed';
}else{
    echo 'success';

    $sql = "insert into Transactions(transactionMpesaID, transaction_resultCode, transaction_resultDesc,
                         transaction_merchantRequestID, transaction_checkoutRequestID, transaction_amount,
                         transaction_Balance, transactionDate, transaction_phoneNumber)
                          VALUES ('$mpesaReceiptNumber','$resultCode','$resultDesc','$merchantRequestID','$checkoutRequestID','$amount','$b2CUtilityAccountAvailableFunds','$transactionDate','$phoneNumber');";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();



}
