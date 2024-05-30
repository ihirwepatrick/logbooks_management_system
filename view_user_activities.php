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

// Check if user_id parameter is set in the URL
if (!isset($_GET['user_id'])) {
    $_SESSION['error'] = "User ID parameter missing.";
    header("Location: admin_dashboard.php"); // Redirect admin to dashboard if user_id is not provided
    exit();
}

$user_id = mysqli_real_escape_string($conn, $_GET['user_id']);

// Fetch user details
$user_query = "SELECT * FROM users WHERE id='$user_id'";
$user_result = mysqli_query($conn, $user_query);
if (!$user_result || mysqli_num_rows($user_result) == 0) {
    $_SESSION['error'] = "User not found.";
    header("Location: admin_dashboard.php"); // Redirect admin to dashboard if user not found
    exit();
}

$user_row = mysqli_fetch_assoc($user_result);
$username = $user_row['username'];

// Fetch activities for the specified user
$activities_query = "SELECT * FROM activities WHERE user_id='$user_id'";
$activities_result = mysqli_query($conn, $activities_query);

// Check if activities query executed successfully
if (!$activities_result) {
    $_SESSION['error'] = "Error fetching activities: " . mysqli_error($conn);
    header("Location: admin_dashboard.php"); // Redirect admin to dashboard if error fetching activities
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Activities</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>User Activities - <?php echo $username; ?></h2>
        <?php
        if (mysqli_num_rows($activities_result) > 0) {
            echo '<table class="table">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Activity ID</th>';
            echo '<th>Starting Date</th>';
            echo '<th>Ending Date</th>';
            echo '<th>Week</th>';
            echo '<th>Day</th>';
            echo '<th>Description</th>';
            echo '<th>Working Hours/Day</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            while ($activity_row = mysqli_fetch_assoc($activities_result)) {
                echo '<tr>';
                echo '<td>' . $activity_row['id'] . '</td>';
                echo '<td>' . $activity_row['starting_date'] . '</td>';
                echo '<td>' . $activity_row['ending_date'] . '</td>';
                echo '<td>' . $activity_row['week'] . '</td>';
                echo '<td>' . $activity_row['day'] . '</td>';
                echo '<td>' . $activity_row['description'] . '</td>';
                echo '<td>' . $activity_row['working_hours_per_day'] . '</td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
        } else {
            echo '<p>No activities found for this user.</p>';
        }
        ?>
        <a href="admin_dashboard.php" class="btn btn-primary">Back to Dashboard</a>
    </div>
</body>
</html>
