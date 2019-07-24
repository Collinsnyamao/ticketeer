<?php
$servername = "localhost";
$username = "root3";
$password = "123";
$dbname = "evento";

$uid = $_POST['uid'];
$bday = $_POST['bday'];
$uemail = $_POST['uemail'];
$uFullNames = $_POST['userFullNames'];
$userGender = $_POST['userGender'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO Users(user_uid,user_Birthday,user_Email,user_Full_Names,user_Gender) VALUES ('$uid', '$bday', '$uemail', '$uFullNames', '$userGender');";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



?>
