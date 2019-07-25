<?php
$servername = "localhost";
$username = "root3";
$password = "123";
$dbname = "evento";
include_once('php/BitlyPHP/bitly.php');
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

        $params = array();
        $params['access_token'] = '611ae5072f8e46904913c81f8c75a8dee1db3ae9';
        $params['longUrl'] = $row['eventImageUrl'];
        $params['domain'] = 'j.mp';
        $results2 = bitly_get('shorten', $params);
        var_dump($results2);

        echo "<div class='event_box'>
            <img src='".$row['eventImageUrl']."' style='height: 500px; width: 1110px;' alt='event'>
            <div class='event_info'>
                <div class='event_title'>
                    ".$row['eventName']."
                </div>
                <div class='speakers'>
                    <strong>Speakers</strong>
                    <span>Maria Smith,  Gabriel Hernandez,  Michael Williams</span>
                </div>
                <div class='event_date'>
                    ".$row['eventDate']." - ".$row['eventTime']."
                </div>
            </div>
            <div class='event_word'>
                <div class='row justify-content-center'>
                    <div class='col-md-12 col-12'>
                        ".$row['eventDescription']."
                    </div>
                </div>
            </div>
            <div class='row' style='margin-top: 25px;'>
                <a href='news.php?ename=".$row['eventName']."&eventDate=".$row['eventDate']."&eventTime=".$row['eventTime']."&eventPrice=".$row['eventPrice']."&".$row['eventName']."&eventImageUrl=".$results2."&eventUID=".$row['eventUid']."' class='btn btn-primary btn-rounded'>Buy Tickets</a>
            </div>
        </div>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
