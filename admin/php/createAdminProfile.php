<?php
$servername = "localhost";
$username = "root3";
$password = "123";
$dbname = "evento";

$adminUid = $_POST['adminUid'];
$adminFname = $_POST['adminFname'];
$adminLname = $_POST['adminLname'];
$adminEmail = $_POST['adminEmail'];

date_default_timezone_set('Africa/Nairobi');
$dateTime = date('m/d/Y h:i:s a', time());

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO Administrators(adminFname, adminLname, adminEmail, admin_uid, creation_date) VALUES ('$adminFname','$adminLname','$adminEmail','$adminUid','$dateTime');";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



?>
