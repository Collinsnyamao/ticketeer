<?php
/**
 * Created by PhpStorm.
 * User: collinsnyamao
 * Date: 2/21/18
 * Time: 3:29 PM
 */

$user_ID = $_POST['userID'];


$host = '159.89.135.168';
$db = 'schoolprojectDB';
$username = 'collinsnyamao';
$password = 'Sonofseed5';


$conn = mysqli_connect($host,$username,$password,$db);

$sql = "select user_Full_Names from Users where user_uid = '$user_ID'";
$result = mysqli_query($conn,$sql);
$dat = 'full name holder';
if (mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
        $dat=$row['user_Full_Names'];
    }
}
echo json_encode($dat);
?>
