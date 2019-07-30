<?php
$servername = "127.0.0.1";
$username = "root3";
$password = "123";
$dbname = "evento";
$merchID = $_POST['merchID'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select transaction_resultCode,transaction_amount,transaction_merchantRequestID from Transactions where transaction_merchantRequestID = '$merchID'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $result->num_rows;
    }
} else {
    echo "0 results";
}
$conn->close();
?>