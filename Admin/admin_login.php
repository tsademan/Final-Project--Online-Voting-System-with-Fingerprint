<!DOCTYPE html>
<html>
<head>
    <title>Online Voting System</title>
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #F6C3D0; /* Pink */
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 100px auto;
            background-color: #E0E9F0; /* Blue */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .btn-container {
            text-align: center;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #45a049;
        }

        .text-center {
            text-align: center;
        }

        .text-small {
            font-size: 12px;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Online Voting System</h2>

        <!-- Admin Login Form -->
        
        <form action="Admin/admin_login.php" method="POST" id="admin-login-form">
            <div class="form-group">
                <label for="admin-username">Username</label>
                <input type="text" id="admin-username" name="admin-username" required>
            </div>
            <div class="form-group">
                <label for="admin-password">Password</label>
                <input type="password" id="admin-password" name="admin-password" required>
            </div>
            <div class="form-group btn-container">
                <input type="submit" value="Login" class="btn">
            </div>
        </form>
    </div>
</body>
</html>