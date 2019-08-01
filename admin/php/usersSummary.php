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


$sql = "select * from Users;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "<tr>
                      <td>".$row['user_id']."</td>
                      <td>".$row['user_uid']."</td>
                      <td>".$row['user_Birthday']."</td>
                      <td>".$row['user_Email']."</td>
                      <td>".$row['user_Full_Names']."</td>
                      <td>".$row['user_Gender']."</td>
                      <td><a href='deleteUsers.php?id=".$row['user_id']."'><i class='fa fa-trash'></i></a></td>
                    </tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
