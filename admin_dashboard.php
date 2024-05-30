<?php
session_start();
include('includes/db.php');

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Check if user is an admin
if ($_SESSION['role_id'] != 1) {
    header("Location: user_dashboard.php"); // Redirect non-admin users to another page
    exit();
}

// Fetch list of all users
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Welcome, <?php echo $_SESSION['username']; ?> (Admin)</h2>
        <h3>List of Users:</h3>
        <ul class="list-group">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li class='list-group-item'>{$row['username']} - {$row['email']} <a href='view_user_activities.php?user_id={$row['id']}' class='btn btn-primary btn-sm ml-2'>View Activities</a></li>";
            }
            ?>
        </ul>
        <a href="logout.php" class="btn btn-danger mt-3">Logout</a>
    </div>
</body>
</html>
