<?php
session_start();
require_once "database.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['repeat_password'];

    $errors = array();
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

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        array_push($errors, "Email already exists!");
    }

    if (count($errors) > 0) {
        echo json_encode(['success' => false, 'message' => $errors[0]]); // Return the first error
    } else {
        $passwordhash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "sss", $fullname, $email, $passwordhash);
            mysqli_stmt_execute($stmt);
            echo json_encode(['success' => true, 'message' => 'You are registered successfully.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Something went wrong.']);
        }
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}
?>