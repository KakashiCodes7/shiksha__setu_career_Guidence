<?php
session_start();

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "student"; // Updated database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['register'])) { // Registration
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password1'], PASSWORD_BCRYPT);

        // Check if username or email exists
        $checkQuery = "SELECT * FROM users WHERE email = ? OR username = ?"; // ✅ Fixed table name
        $stmt = $conn->prepare($checkQuery);
        $stmt->bind_param("ss", $email, $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "<script>alert('Username or Email already exists!'); window.location.href='login.php';</script>";
        } else {
            $sql = "INSERT INTO users (fullname, email, username, password) VALUES (?, ?, ?, ?)"; // ✅ Fixed table name
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $fullname, $email, $username, $password);

            if ($stmt->execute()) {
                echo "<script>alert('Registration successful! Please login.'); window.location.href='login.php';</script>";
            } else {
                echo "<script>alert('Error: Could not register.'); window.location.href='login.php';</script>";
            }
        }
    } elseif (isset($_POST['login'])) { // Login
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Fetch user from database
        $sql = "SELECT * FROM users WHERE username = ?"; // ✅ Fixed table name
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();
            
            // Verify password
            if (password_verify($password, $user['password'])) {
                $_SESSION['username'] = $user['username'];
                echo "<script>alert('Login successful!'); window.location.href='dashboard.php';</script>";
            } else {
                echo "<script>alert('Invalid password!'); window.location.href='login.php';</script>";
            }
        } else {
            echo "<script>alert('User not found!'); window.location.href='login.php';</script>";
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>
    <style>
        /* General Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right,rgb(246, 250, 252), #1E3A5F);
        }

        .container {
            width: 400px;
            background: rgba(80, 151, 231, 0.51);
            backdrop-filter: blur(10px);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        h2 {
            color: #1E3A5F;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            outline: none;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.2);
            color: #1E3A5F;
            transition: 0.3s;
        }

        input::placeholder {
            color: #4A708B;
        }

        input:focus {
            background: rgb(235, 230, 230);
        }

        button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background: linear-gradient(45deg, #1E90FF, #104E8B);
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            transform: scale(1.05);
            background: linear-gradient(45deg,rgb(76, 235, 235),rgb(54, 158, 144));
        }

        p {
            color:rgb(7, 7, 7);
            margin-top: 10px;
        }

        a {
            color:rgb(240, 245, 250);
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        a:hover {
            color:rgb(125, 182, 240);
            text-decoration: underline;
        }

        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-box" id="login-box">
            <h2>Login</h2>
            <form action="home.php" method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="login">Login</button>
                <p>Don't have an account? <a href="#" onclick="toggleForm()">Register</a></p>
            </form>
        </div>
        <div class="form-box hidden" id="register-box">
            <h2>Register</h2>
            <form action="login.php" method="POST" >
                <input type="text" name="fullname" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password1" placeholder="Password" required>
                <button type="submit" name="register">Register</button>
                <p>Already have an account? <a href="#" onclick="toggleForm()">Login</a></p>
            </form>
        </div>
    </div>

    <script>
        function toggleForm() {
            document.getElementById('login-box').classList.toggle('hidden');
            document.getElementById('register-box').classList.toggle('hidden');
        }

        function validateForm(event, formType) {
        event.preventDefault(); // Prevent form submission if validation fails

        let passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

        if (formType === 'register') {
            let fullname = document.forms["registerForm"]["fullname"].value.trim();
            let email = document.forms["registerForm"]["email"].value.trim();
            let username = document.forms["registerForm"]["username"].value.trim();
            let password = document.forms["registerForm"]["password1"].value.trim();

            let nameRegex = /^[A-Za-z\s]{3,}$/;
            let usernameRegex = /^[A-Za-z0-9_]{4,}$/;

            if (!nameRegex.test(fullname)) {
                alert("Full name must contain only letters and be at least 3 characters long.");
                return false;
            }

            if (!usernameRegex.test(username)) {
                alert("Username must be at least 4 characters long and can contain letters, numbers, and underscores.");
                return false;
            }

            if (!passwordRegex.test(password)) {
                alert("Password must be at least 8 characters long and include one uppercase letter, one lowercase letter, one number, and one special character.");
                return false;
            }

            document.forms["registerForm"].submit(); // Submit if validation passes
        } 
        else if (formType === 'login') {
            let username = document.forms["loginForm"]["username"].value.trim();
            let password = document.forms["loginForm"]["password"].value.trim();

            if (username === "" || password === "") {
                alert("Both username and password are required.");
                return false;
            }

            if (!passwordRegex.test(password)) {
                alert("Invalid password! Ensure it is at least 8 characters long and includes one uppercase letter, one lowercase letter, one number, and one special character.");
                return false;
            }

            document.forms["loginForm"].submit(); // Submit if validation passes
        }
    }
    </script>
</body>
</html>