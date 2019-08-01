<?php
$servername = "localhost";
$username = "root3";
$password = "123";
$dbname = "evento";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "select * from Transactions;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "<tr>
                        <td>".$row['transaction_id']."</td>
                      <td>".$row['transactionMpesaID']."</td>
                      <td>".$row['transaction_resultDesc']."</td>
                      <td>".$row['transaction_amount']."</td>
                      <td>".$row['transactionDate']."</td>
                      <td>".$row['transaction_phoneNumber']."</td>
                    </tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
