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


$sql = "select * from Events;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "<tr>
                      <td><img src='".$row['eventImageUrl']."' style='height: 45px; width: 45px;'></td>
                      <td>".$row['eventUid']."</td>
                      <td>".$row['eventName']."</td>
                      <td>".$row['eventDate']."</td>
                      <td>".$row['eventPrice']."</td>
                      <td>".$row['eventTime']."</td>
                    </tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
