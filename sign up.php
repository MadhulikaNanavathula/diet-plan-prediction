<?php
include("connection.php");


if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
    $username=$_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
    $stmt = $pdo->prepare("INSERT INTO sign_up (username, email, password) VALUES (?, ?, ?)");

    $stmt->bindParam(1, $username);
    $stmt->bindParam(2, $email);
    $stmt->bindParam(3, $password);
   $stmt->execute();
   $_SESSION['user_id'] = $pdo->lastInsertId();
   $_SESSION['username'] = $username;
   header("Location: sign in.php");
} catch (PDOException $e) {
   echo "Error: " . $e->getMessage();
}
}
?>



<html>
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>signin</title>
        <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('sign_img.avif');
            background-size: cover; /* Adjust background size */
            background-position: center; /* Adjust background position */
            height: 100vh; /* Set body height to viewport height */
            display: flex; /* Use flexbox for vertical centering */
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
        }
        .container {
            width: 300px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 40px; /* Move the box down */
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            width: 100%;
            background-color: #4caf50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> " >
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">email</label>
            <input type="text" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Sign Up">
                <div class="signup-link">
                    Already have an account? <a href="sign in.php">log in</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>