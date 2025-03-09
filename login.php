<?php 
session_start();
require_once "database.php"; // Ensure database connection is included
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <?php
        if (isset($_POST["login"])) {
            $email = trim($_POST["email"]);
            $password = $_POST["password"];

            // Secure the SQL query using prepared statements
            $sql = "SELECT * FROM users WHERE email = ?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $users = mysqli_fetch_array($result, MYSQLI_ASSOC);

            if ($users) {
                if (password_verify($password, $users["password"])) { 
                    $_SESSION["user"] = $users["full_name"]; // Store user data
                    header("Location: Index2.php");
                    exit;
                } else {
                    echo "<div class='alert alert-danger'>Incorrect password.</div>";
                }
            } else {
                echo "<div class='alert alert-danger'>Email does not exist.</div>";
            }

            mysqli_stmt_close($stmt); // Close statement
        }
        ?>
        
        <h2 style="text-align: center;">LOGIN FORM</h2>
        <form action="login.php" method="post">
            <div class="form-group">
                <input type="email" name="email" placeholder="Enter your email" class="form-control" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <input class="btn" type="submit" value="Login" name="login">
            </div>
        </form>
        <div> <p>Not registered yet? <a href="registration.php">Register Here</a></p></div>
    </div>
</body>
</html>
