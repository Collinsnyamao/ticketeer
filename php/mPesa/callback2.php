<?php
/**
 * Created by PhpStorm.
 * User: collinsnyamao
 * Date: 11/7/18
 * Time: 6:31 PM
 */

$mpesa= new \Safaricom\Mpesa\Mpesa();

$callbackData=$mpesa->getDataFromCallback();


echo "this is ssid $s_msisdn";


$host = '159.89.135.168';
$db = 'schoolprojectDB';
$username = 'collinsnyamao';
$password = 'Sonofseed5';


$conn = mysqli_connect($host,$username,$password,$db);

if ($conn->connect_error){
    echo 'failed';
}else{
    echo 'success';

    $sql = "insert into result (res1) values ('$callbackData');";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();



}


?>