<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logbook RCA</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        body {
            background: radial-gradient(circle at bottom left, #000000, #000033, #000066);
            color: #ffffff;
        }

        .container {
            flex: 1 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .jumbotron {
            background-color: rgba(0, 0, 0, 0.8);
            padding: 3rem 2rem;
            border-radius: 10px;
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .footer {
            flex-shrink: 0;
            background-color: rgba(0, 0, 0, 0.5);
            color: #ffffff;
            padding: 20px 0;
        }
        .navbar-custom {
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-custom">
        <a class="navbar-brand" href="#">Landing Page</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main content -->
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to Our Website</h1>
            <p class="lead">This is the Logbook Registry system to manage s=intenaships for students</p>
            <hr class="my-4">
            <p>Learn more about what we offer and how we can help you.</p>
            <a class="btn btn-primary btn-lg" href="register.php" role="button">Register</a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container text-center">
            <p>&copy; 2022 Your Company</p>
        </div>
    </footer>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
