
<?php
$servername = "localhost";
$username = "root3";
$password = "123";
$dbname = "evento";
$mpesaID = $_POST['mpesaID'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "select * from Transactions where transactionMpesaID = '$mpesaID' AND transaction_resultCode = 0;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row['transactionMpesaID'].'%'.$row['transaction_resultCode'].'%'.$row['transaction_amount'].'%'.$row['transaction_phoneNumber'];
    }
} else {
    echo "0 results";
}
$conn->close();
?>