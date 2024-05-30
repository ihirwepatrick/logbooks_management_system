<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logbook System</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            background: radial-gradient(at bottom left, #000000 60%, #000046 100%);
            color: #ffffff; /* White text color */
            font-family: Arial, sans-serif; /* Optional: Choose a suitable font-family */
        }
        
        .container {
            padding: 50px 15px; /* Adjust as needed */
            min-height: calc(100vh - 150px); /* Adjust to keep footer at the bottom */
        }
        
        .footer {
            background-color: #1CB5E0; /* Dark blue footer */
            color: #ffffff; /* White text color for footer */
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
            opacity: 0.9; /* Footer opacity */
            height: 150px;
        }
        
        .btn {
            color: #ffffff; /* White text color for buttons */
        }
        
        .btn-primary {
            background-color: #1CB5E0; /* Primary button background color */
            border-color: #1CB5E0; /* Border color for primary button */
        }
        
        .btn-primary:hover {
            background-color: #0056b3; /* Primary button background color on hover */
            border-color: #0056b3; /* Border color for primary button on hover */
        }

        .view-records {
            color: #000000;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="mt-5">Welcome to the Student Logbook System</h1>
    <p class="lead">Use the links below to navigate through the system.</p>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title view-records">Record Weekly Activity</h5>
                    <p class="card-text view-records">Click the button below to record your weekly activities.</p>
                    <a href="record.php" class="btn btn-primary">Go to Logbook Entry Form</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title  view-records">View Recorded Activities</h5>
                    <p class="card-text  view-records">Click the button below to view all your recorded activities.</p>
                    <a href="view_activities.php" class="btn btn-primary">View Activities</a>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <p class="text-center mb-0">This is a footer message. © 2024 Student Logbook System</p>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
