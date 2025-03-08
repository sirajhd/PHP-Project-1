<?php 
session_start();
if(isset($_SESSION["users"])){
    header("Locaction:index2.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div class="container">
        <?php
        if (isset($_POST["submit"])) {
            $fullname = $_POST["fullname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $passwordRepeat = $_POST["repeat_password"];
            $passwordhash = password_hash($password, PASSWORD_DEFAULT);

            $errors = array();
          

            // Validation
            if (empty($fullname) || empty($email) || empty($password) || empty($passwordRepeat)) {
                array_push($errors, "All fields are required");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "Email is not valid");
            }
            if (strlen($password) < 8) {
                array_push($errors, "Password must be at least 8 characters long");
            }
            if ($password !== $passwordRepeat) {
                array_push($errors, "Password does not match");
            }



            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $rowCount = mysqli_num_rows($result);
          if($rowCount>0){
              array_push($errors, "Email already exist!");
          }


            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    echo "<div class='alert alert-danger'>$error</div>";//change
                }
            } else {




                //to insert data into database
              $sql = "INSERT INTO users (full_name, email, password) VALUES (?,?,?)";
              $stmt = mysqli_stmt_init($conn);
              $preparestmt = mysqli_stmt_prepare($stmt,$sql);
              if($preparestmt){
                mysqli_stmt_bind_param($stmt,"sss",$fullname,$email,$passwordhash);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are registered successfully.</div>";
              }else{
                die ("Something went wrong");
              }

            }
        }
        ?>
        <h2>REGISTRATION FORM</h2>
        <form action="registration.php" method="post">
            <div class="form-group">
                <input class="form-control" type="text" name="fullname" placeholder="Full Name">
            </div>
            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="repeat_password" placeholder="Repeat Password">
            </div>
            <div class="form-group">
                <input class="btn" type="submit" value="Register" name="submit">
            </div>
        </form>
        <div> <p>Already Registered <a href="login.php">Login Here</a> </p></div>
    </div>
</body>
</html>