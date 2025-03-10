<?php
$hostname = "localhost";
$dbusers = "root";
$dbpassword = "";
$dbName = "login_register";

try {
    // Enable exception handling for mysqli
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    // Attempt to connect to the database
    $conn = new mysqli($hostname, $dbusers, $dbpassword, $dbName);

    // If the connection is successful, you can proceed with your database operations
    echo "Connected successfully!";

} catch (mysqli_sql_exception $e) {
    // Handle the exception
    die("Connection failed: " . $e->getMessage());
}

// You can now use the $conn object to interact with the database
?>