<!DOCTYPE html>
<html>
<head>
    <title>Voter Registration</title>
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #F6C3D0; /* Pink */
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 100px auto;
            background-color: #E0E9F0; /* Blue */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
        }
        .square-box {
            width: 150px;
            height: 150px;
            background-color: #f0f0f0;
            border: 1px solid #000;
        }
        .left-section,
        .right-section {
            flex-basis: 45%;
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
        input[type="password"],
        input[type="email"],
        input[type="number"],
        input[type="tel"]
         {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        

        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #0000FF;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: green;
        }
        .btn2 {
            display: inline-block;
            padding: 10px 20px;
            background-color: #0000FF;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .btn2:hover {
            background-color: red;
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
        <div class="left-section">
            <h2>Voter Registration</h2>

            <!-- Voter Registration Form -->
            <form action="voter_registration.php" method="POST" id="voter-registration-form">
                <div class="form-group">
                    <label for="first-name">First Name</label>
                    <input type="text" id="first-name" pattern="[A-Za-z]+" name="first-name" required>
                </div>
                <div class="form-group">
                    <label for="last-name">Last Name</label>
                    <input type="text" id="last-name" pattern="[A-Za-z]+" name="last-name" required>
                </div>
                <div class="form-group">
                    <label for="id">voter's ID</label>
                    <input type="text" id="id" name="id" required>
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" id="age" name="age" required min="18" max="100" pattern="[0-9]+" placeholder="18 and above" required>
                </div>
                <div class="form-group">
                    <label for="department">Department</label>
                    <input type="text" id="department" name="department" required>
                </div>
                <div class="form-group">
                    <label for="education-year">Year of Education at University or Batch</label>
                      <select id="batch" name="gender">
                         <option value="6th">6th</option>
                         <option value="5th">5th</option>
                         <option value="4th">4th</option>
                         <option value="3rd">3rd</option>
                         <option value="2nd">2nd</option>
                         <option value="1st">1st</option>
                      </select>
                </div>
              
                <div>
                    <label>Gender:</label>
                <label>
              <input type="radio" name="gender" value="male">
            Male
               </label>
               <label>
              <input type="radio" name="gender" value="female">
            Female
               </label>
               </div>
            </form>
        </div>
        <div class="right-section">
            <div class="form-group">
            <br><br><br><br>
                <label for="phone">Phone</label>
                <input type="tel" id="phone"  pattern="[+]\d{1,3}\s?\d{1,14}" name="phone" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="date-of-default">Date</label>
                <input type="date" id="date-of-default" name="date-of-default" required>
            </div>
            <div class="form-group">
                <label for="fingerprint">Fingerprint Scanner</label>
                <div class="square-box"></div>
            </div>

            <div class="form-group">
            <input type= "submit" value="Save" class="btn"  style="margin-right: 100px";> 
            <input type="reset" value="Clear" class="btn2">
          
        </div>
    
    </form>
</div>
    </body>
    </html>
