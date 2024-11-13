<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .welcome-message {
            font-size: 24px;
            color: #333;
        }
        .dashboard {
            display: flex;
            justify-content: space-around;
            margin-top: 40px;
        }
        .dashboard-item {
            width: 30%;
            padding: 20px;
            text-align: center;
            background-color: #f8f8f8;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .dashboard-item h2 {
            color: #555;
        }
        .dashboard-item a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #333;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: absolute;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

<header>
    <h1>Welcome to Admin Dashboard</h1>
</header>

<div class="container">
    <div class="welcome-message">
        <h2>Hello, Admin! Welcome back.</h2>
        <p>Here are some quick links to manage the system:</p>
    </div>

    <div class="dashboard">
        <div class="dashboard-item">
            <h2>Manage Users</h2>
            <p>View and manage all registered users.</p>
            <a href="admin/users">Go to Users</a>
        </div>
        <div class="dashboard-item">
            <h2>Site Settings</h2>
            <p>Update website settings and configurations.</p>
            <a href="admin/settings">Go to Settings</a>
        </div>
        <div class="dashboard-item">
            <h2>Reports</h2>
            <p>View reports and analytics of the site.</p>
            <a href="admin/reports">Go to Reports</a>
        </div>
    </div>
</div>

<footer>
    <p>&copy; 2024 LavaLust | All Rights Reserved</p>
</footer>

</body>
</html>
