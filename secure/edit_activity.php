<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "logbook";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];

$sql = "SELECT * FROM activities WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Activity</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h2 class="mt-5">Edit Activity</h2>
    <form action="update_activity.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="form-group">
            <label for="start_date">Starting Date:</label>
            <input type="date" class="form-control" id="start_date" name="start_date" value="<?php echo $row['start_date']; ?>" required>
        </div>
        <div class="form-group">
            <label for="end_date">Ending Date:</label>
            <input type="date" class="form-control" id="end_date" name="end_date" value="<?php echo $row['end_date']; ?>" required>
        </div>
        <div class="form-group">
            <label for="week">Week:</label>
            <input type="number" class="form-control" id="week" name="week" value="<?php echo $row['week']; ?>" required>
        </div>
        <div class="form-group">
            <label for="day">Day:</label>
            <select class="form-control" id="day" name="day" required>
                <option <?php if ($row['day'] == "Monday") echo "selected"; ?>>Monday</option>
                <option <?php if ($row['day'] == "Tuesday") echo "selected"; ?>>Tuesday</option>
                <option <?php if ($row['day'] == "Wednesday") echo "selected"; ?>>Wednesday</option>
                <option <?php if ($row['day'] == "Thursday") echo "selected"; ?>>Thursday</option>
                <option <?php if ($row['day'] == "Friday") echo "selected"; ?>>Friday</option>
                <option <?php if ($row['day'] == "Saturday") echo "selected"; ?>>Saturday</option>
                <option <?php if ($row['day'] == "Sunday") echo "selected"; ?>>Sunday</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Activity Description:</label>
            <textarea class="form-control" id="description" name="description" rows="3" required><?php echo $row['description']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="working_hours">Working Hours/Day:</label>
            <input type="number" class="form-control" id="working_hours" name="working_hours" value="<?php echo $row['working_hours']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

<?php
$conn->close();
?>
