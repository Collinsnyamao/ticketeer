<?php
$servername = "localhost";
$username = "root3";
$password = "123";
$dbname = "evento";

$uid = $_POST['uid'];
$eventName = $_POST['eventName'];
$eventDescription = $_POST['eventDescription'];
$eventImageUrl = $_POST['eventImageUrl'];
$eventDate = $_POST['eventDate'];
$eventPrice = $_POST['eventPrice'];
$eventTime = $_POST['eventTime'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO Events(eventUid,eventName,eventDescription,eventImageUrl,eventDate,eventPrice,eventTime) VALUES ('$uid', '$eventName', '$eventDescription', '$eventImageUrl', '$eventDate', '$eventPrice', '$eventTime');";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



?>
