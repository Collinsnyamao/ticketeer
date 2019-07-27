<?php



$dataPOST = trim(file_get_contents('php://input'));

// print_r($dataPOST);



$myfile = fopen("testfile.txt", "w");
fwrite($myfile, $dataPOST);
fclose($myfile);


// $xml = simplexml_load_string($dataPOST);
// if ($xml === false) {
//     echo "Failed loading XML: ";
//     foreach(libxml_get_errors() as $error) {
//         echo "<br>", $error->message;
//     }
// } else {
//     print_r($xml);
// }



$host = '159.89.135.168';
$db = 'schoolprojectDB';
$username = 'collinsnyamao';
$password = 'Sonofseed5';


$conn = mysqli_connect($host,$username,$password,$db);

if ($conn->connect_error){
    echo 'failed';
}else{
    echo 'success';

    $sql = "insert into result (res1) values ('$dataPOST');";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();



}
?>



<?php
/*//Process Callback after transaction
$dataPOST = trim(file_get_contents('php://input'));
//Parse the xml data
$xml = simplexml_load_string($dataPOST);
$ns = $xml->getNamespaces(true);
$soap = $xml->children($ns['SOAP-ENV']);
$sbody = $soap->Body;
$mpesa_response = $sbody->children($ns['ns1']);
$rstatus = $mpesa_response->processCheckOutResponse;
$status = $rstatus->children();
$s_msisdn = $status->MSISDN;
$s_date = $status->{'M-PESA_TRX_DATE'};
$s_transactionid = $status->{'M-PESA_TRX_ID'};
$s_status = $status->TRX_STATUS;
$s_returncode = $status->RETURN_CODE;
$s_description = $status->DESCRIPTION;
$s_merchant_transaction_id = $status->MERCHANT_TRANSACTION_ID;
$s_encparams = $status->ENC_PARAMS;
$s_txID = $status->TRX_ID;
//Save the returned data into the database or use it to finish certain operation.

if($s_status=="Success"){
    //Perfomr X operation

    echo "this is ssid $s_msisdn";


    $servername = "localhost";
    $username = "root3";
    $password = "123";
    $dbname = "evento";


    $conn = mysqli_connect($host,$username,$password,$db);

    if ($conn->connect_error){
        echo 'failed';
    }else{
        echo 'success';

        $sql = "INSERT INTO Transactions(s_msisdn,s_date,s_transaction_id,s_status,s_return_code,s_description,s_merchant_transaction_id) VALUES ('$s_msisdn','$s_date','$s_transactionid','$s_status','$s_returncode','$s_description','$s_merchant_transaction_id');";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();



    }



}else{
    //Perform X operation
}
*/?>
