<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "logbook";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
