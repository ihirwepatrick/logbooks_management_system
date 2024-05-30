<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logbook Entry</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="index.php">
        <img src="./assets/2.png" width="70" height="70" class="d-inline-block align-top" alt="">
        Home
    </a>
</nav>
<div class="container">
    <h2 class="mt-5">Logbook Entry</h2>
    <form action="submit_activity.php" method="post">
        <div class="form-group">
            <label for="start_date">Starting Date:</label>
            <input type="date" class="form-control" id="start_date" name="start_date" required>
        </div>
        <div class="form-group">
            <label for="end_date">Ending Date:</label>
            <input type="date" class="form-control" id="end_date" name="end_date" required>
        </div>
        <div class="form-group">
            <label for="week">Week:</label>
            <input type="number" class="form-control" id="week" name="week" required>
        </div>
        <div class="form-group">
            <label for="day">Day:</label>
            <select class="form-control" id="day" name="day" required>
                <option>Monday</option>
                <option>Tuesday</option>
                <option>Wednesday</option>
                <option>Thursday</option>
                <option>Friday</option>
                <option>Saturday</option>
                <option>Sunday</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Activity Description:</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="working_hours">Working Hours/Day:</label>
            <input type="number" class="form-control" id="working_hours" name="working_hours" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
