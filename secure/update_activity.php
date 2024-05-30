<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "logbook";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$week = $_POST['week'];
$day = $_POST['day'];
$description = $_POST['description'];
$working_hours = $_POST['working_hours'];

$sql = "UPDATE activities SET start_date='$start_date', end_date='$end_date', week='$week', day='$day', description='$description', working_hours='$working_hours' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
