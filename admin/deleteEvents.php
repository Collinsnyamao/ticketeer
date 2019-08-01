<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>404 HTML Template by Colorlib</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:900" rel="stylesheet">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<?php

$id = $_GET['id'];
//Connect DB
//Create query based on the ID passed from you table
//query : delete where Staff_id = $id
// on success delete : redirect the page to original page using header() method
$dbname = "evento";
$conn = mysqli_connect("localhost", "root3", "123", $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM Events WHERE eventId = $id";

if (mysqli_query($conn, $sql)) {
mysqli_close($conn);
?>

<div id="notfound">
    <div class="notfound">
        <div class="notfound-404">
            <h3>Record Deleted</h3>
            <h4>Redirecting back...</h4>
        </div>
    </div>
</div>
<?php
exit;
} else {
?>

<div id="notfound">
    <div class="notfound">
        <div class="notfound-404">
            <h3>Error deleting record </h3>
            <h4>Redirecting back...</h4>
        </div>
    </div>
</div>

<?php
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    setTimeout(function() {
        window.location.href = 'dashboard.php'
    },2000);
</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
