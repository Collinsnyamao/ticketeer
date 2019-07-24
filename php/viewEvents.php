<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "evento";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select * from Users;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div>
                        <div class='row'>
                            <div class='col-md-3'>
                                <img src='".$row['eventImageUrl']."' id='recepientTag' style='height: 100px;'>
                            </div>
                            <div class='col-md-9'>
                                <h6>".$row['eventName']."</h6>
                                <strong><i>".$row['eventDate']." - ".$row['eventTime']."</i></strong>
                                <p>".$row['eventDescription']."</p>
                                Price : <strong> ".$row['eventPrice']."</strong>
                            </div>
                        </div>
                        <hr>
                    </div>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
