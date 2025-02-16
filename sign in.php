<?php
include("connection.php");
// Login
if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
   $email = $_POST['email'];
   $password = $_POST['password'];

   try {
       $stmt = $pdo->prepare("SELECT * FROM sign_up WHERE LOWER(email) = LOWER(?)");
       $stmt->execute([$email]);
       $user = $stmt->fetch(PDO::FETCH_ASSOC);

       if ($user) {
           if ($user['password'] == $password){

               $_SESSION['user_id'] = $user['id'];
           $_SESSION['username'] = $user['username']; 
           header("Location: book_now.html");
               exit();
           } else {
               echo "<script>alert('Incorrect password. Please try again.');</script>";
           }
       } else {
           echo "<script>alert('User not found. Please sign up.');</script>";
       }
   } catch (PDOException $e) {
       echo "Error: " . $e->getMessage();
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
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
    <div class="container">
        <h2>log in</h2>
        <form action="book_now.html" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="log in">
        </form>
    </div>
</body>
</html>