<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "logbook";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$week = $_POST['week'];
$day = $_POST['day'];
$description = $_POST['description'];
$working_hours = $_POST['working_hours'];

$sql = "INSERT INTO activities (start_date, end_date, week, day, description, working_hours)
VALUES ('$start_date', '$end_date', '$week', '$day', '$description', '$working_hours')";

if ($conn->query($sql) === TRUE) {
    header("Location: view_activities.php"); // Redirect to view_activities.php after successful submission
    exit(); // Ensure no further code is executed after redirection
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
