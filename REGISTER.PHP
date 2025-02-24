<?php
session_start();
include('config.php'); // Include database connection settings

$message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        $message = "Username or Password cannot be empty!";
    } else {
        // Check if username already exists
        $stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $message = "Username already taken!";
        } else {
            // Hash the password
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);

            // Prepare the SQL statement to prevent SQL injection
            $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
            $stmt->bind_param("ss", $username, $hashed_password);

            if ($stmt->execute()) {
                echo "<script>alert('Registration successful!'); window.location.href='login.php';</script>";
                exit;
            } else {
                $message = "Error: " . $stmt->error;
            }

            $stmt->close();
        }

        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <style>
        p{
            color: wheat;
        }
        a{
            color:blue;
        }
        body {
            font-family: Arial, sans-serif;
            background-image:linear-gradient(PINK,PURPLE);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-image: linear-gradient(PINK, rgba(0, 0, 0, 0));
            padding: 20px;
            border-radius: 8px;
           box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border: 2px solid black;
        }
        .container h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .container label {
            display: block;
            margin-bottom: 8px;
        }
        .container input[type="text"],
        .container input[type="password"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 45px;
        }
        .container button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .container button:hover {
            background-color: #45a049;
        }
    </style>
    <script>
        window.onload = function() {
            <?php if (!empty($message)): ?>
                alert("<?php echo $message; ?>");
            <?php endif; ?>
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        <form method="POST" action="">
           

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <label for="username">ROLL#</label>
            <input type="text" id="username" name="username">
            <label for="username">ADDRESS:</label>
            <input type="text" id="username" name="username">
            <button type="submit">Register</button>
          <p>  Do have an account ? <a href="login.php">Login</a></p>
          
        </form>
    </div>
</body>
</html>
