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

        echo "<div>
                        <div class='row'>
                            <div class='col-md-3'>
                                <img src='".$row['eventImageUrl']."' id='recepientTag' style='height: 100px;'>
                            </div>
                            <div class='col-md-9'>
                                <h6><a href='news.html?ename=".$row['eventName']."&eventDate=".$row['eventDate']."&eventTime=".$row['eventTime']."&eventPrice=".$row['eventPrice']."&".$row['eventName']."&eventDesc=".$row['eventDescription']."&eventImageUrl=".$row['eventImageUrl']."&eventUID=".$row['eventUid']."'>".$row['eventName']."</a></h6>
                                <strong><i>".$row['eventDate']." - ".$row['eventTime']."</i></strong>
                                <p>".$row['eventDescription']."</p>
                                Price : KES ".$row['eventPrice']."<strong> </strong>
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
