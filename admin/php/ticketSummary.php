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


$sql = "select * from tickets;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "<tr>
                      <td>".$row['ticketOwnerFname'].' '. "".$row['ticketOwnerLname'].""."</td>
                      <td>".$row['ticketOwnerEmail']."</td>
                      <td>".$row['ticketSentDate']."</td>
                      <td>".$row['ticketPurchaseCode']."</td>
                      <td>".$row['ticketEventName']."</td>
                      <td>".$row['ticketQuantity']."</td>
                    </tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
