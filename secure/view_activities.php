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

// Handle update
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $week = $_POST['week'];
    $day = $_POST['day'];
    $description = $_POST['description'];
    $working_hours = $_POST['working_hours'];

    $sql = "UPDATE activities SET start_date='$start_date', end_date='$end_date', week='$week', day='$day', description='$description', working_hours='$working_hours' WHERE id=$id";
    $conn->query($sql);
}

// Handle delete
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM activities WHERE id=$id";
    $conn->query($sql);
}

// Fetch all records
$sql = "SELECT * FROM activities";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Activities</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="record.php">
                            Record Activity
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_activities.php">
                            View Activities
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <h2 class="mt-5">Weekly Activities</h2>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Week</th>
                    <th>Day</th>
                    <th>Description</th>
                    <th>Working Hours</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <form method='post' action='view_activities.php'>
                                <td>{$row['id']}<input type='hidden' name='id' value='{$row['id']}'></td>
                                <td><input type='date' class='form-control' name='start_date' value='{$row['start_date']}' required></td>
                                <td><input type='date' class='form-control' name='end_date' value='{$row['end_date']}' required></td>
                                <td><input type='number' class='form-control' name='week' value='{$row['week']}' required></td>
                                <td>
                                    <select class='form-control' name='day' required>
                                        <option " . ($row['day'] == "Monday" ? "selected" : "") . ">Monday</option>
                                        <option " . ($row['day'] == "Tuesday" ? "selected" : "") . ">Tuesday</option>
                                        <option " . ($row['day'] == "Wednesday" ? "selected" : "") . ">Wednesday</option>
                                        <option " . ($row['day'] == "Thursday" ? "selected" : "") . ">Thursday</option>
                                        <option " . ($row['day'] == "Friday" ? "selected" : "") . ">Friday</option>
                                        <option " . ($row['day'] == "Saturday" ? "selected" : "") . ">Saturday</option>
                                        <option " . ($row['day'] == "Sunday" ? "selected" : "") . ">Sunday</option>
                                    </select>
                                </td>
                                <td><textarea class='form-control' name='description' rows='2' required>{$row['description']}</textarea></td>
                                <td><input type='number' class='form-control' name='working_hours' value='{$row['working_hours']}' required></td>
                                <td>
                                    <button type='submit' name='update' class='btn btn-warning'>Update</button>
                                    <button type='submit' name='delete' class='btn btn-danger'>Delete</button>
                                </td>
                            </form>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>No records found</td></tr>";
                }
                ?>
                </tbody>
            </table>
        </main>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
<?php
$conn->close();
?>
