<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styles.css">
    <title>Dashboard</title>
</head>
<style>
    body {
        background-color: #f8f9fa;
        color: #495057;
    }
    .dashboard-container {
        margin-top: 50px;
        padding: 30px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .dashboard-header {
        border-bottom: 2px solid #007bff;
        padding-bottom: 15px;
        margin-bottom: 30px;
    }
    .btn-custom {
        background-color: #007bff;
        color: #ffffff;
        border: none;
    }
    .btn-custom:hover {
        background-color: #0056b3;
    }
</style>
<body>
    <div class="container">
        <div class="dashboard-container">
            <div class="dashboard-header">
                <h2>Welcome to Your Dashboard</h2>
                <p>You are logged in successfully!</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h4>Quick Links</h4>
                    <ul class="list-unstyled">
                        <li><a href="#" class="btn btn-custom">View Profile</a></li>
                        <li><a href="#" class="btn btn-custom">Edit Profile</a></li>
                        <li><a href="#" class="btn btn-custom">Settings</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h4>Recent Activity</h4>
                    <p>No recent activity.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>





