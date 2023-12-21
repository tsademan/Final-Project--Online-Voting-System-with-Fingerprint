<!DOCTYPE html>
<html>
<head>
    <title>Online Voting System</title>
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 100px auto;
            background-color: #fff;
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
         <h3> Voter's Login</h3>
        <!-- Login Form -->
        <form action="login.php" method="POST" id="login-form">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Login" class="btn">
            </div>
        </form>
        <p class="text-small">Don't have an account? <a href="voter_registration.php">Sign up</a></p>
        <!-- Admin Login -->
        <p class="text-center">
            <a href="Admin/admin_login.php">Admin Login</a>
        </p>
         
        <!-- Login as Guest -->
        <p class="text-center">
            <a href="guest_login.php">Login as Guest</a>
        </p>

        
    </div>

    <script>
        // Toggle between login and signup forms
        document.getElementById("signup-link").addEventListener("click", function(event) {
            event.preventDefault();
            document.getElementById("login-form").style.display = "none";
            document.getElementById("signup-form").style.display = "block";
        });
    </script>
</body>
</html>