<?php

$servername = "localhost";
$username = "root3";
$password = "123";
$dbname = "evento";

$ticketFname = $_POST['ticketFname'];
$ticketLname = $_POST['ticketLname'];
$ticketEmail = $_POST['ticketEmail'];
$ticketPurchaseCode = $_POST['ticketPurchaseCode'];
$ticketQuantity = $_POST['ticketQuantity'];
$ticketEventName = $_POST['ticketEventName'];

date_default_timezone_set('Africa/Nairobi');
$dateTime = date('m/d/Y h:i:s a', time());
echo $dateTime;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT into tickets(ticketOwnerFname, ticketOwnerLname, ticketOwnerEmail, ticketSentDate, ticketPurchaseCode,ticketQuantity,ticketEventName) VALUES ('$ticketFname','$ticketLname','$ticketEmail','$dateTime','$ticketPurchaseCode','$ticketQuantity','$ticketEventName');";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);




?>