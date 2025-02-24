<?php
session_start();
include('config.php');  
$message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        $message = "Username or Password cannot be empty!";
    } else {
         
        $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $hashed_password);
            $stmt->fetch();

            if (password_verify($password, $hashed_password)) {
                $_SESSION['user_id'] = $id;
                header('Location: index.php');  
                exit;
            } else {
                $message = "Invalid password!";
            }
        } else {
            $message = "User not found!";
        }

        $stmt->close();
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
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
            border:2px solid black;
             
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
            margin: 30px;
            padding: 10px;
            width:150px;
            background-color: #4CAF50;
            color: #fff;
             border: none;
            border-radius: 10px;
            cursor: pointer;
            text-align: center;
             
        }
        .container button:hover {
            background-color: #45a049;
        }
        p{
            color: wheat;
        }
        a{
            color:blue;
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
        <h1>Login</h1>
        <form method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password"><br>
                 <button id="login1"   type="submit"  >Login</button><br>
          <p>  Don,t have an account ? <a href="register.php">Register</a></p>
        </form>
    </div>
</body>
</html>
