<?php

$mobilenumer = $_POST['mobilenumer'];
$password = $_POST['password'];


$servername = "localhost";
$username = "root";
$password = "ameex";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `test` WHERE `mobilenumber`='".$mobilenumber."' AND `password`='".$password."'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "success";
} else {
    echo "Failed";
}

mysqli_close($conn);
?>