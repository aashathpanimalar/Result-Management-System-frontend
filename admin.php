<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hardcoded credentials (replace with database validation if needed)
    $valid_username = "administrator";
    $valid_password = "admin@123";

    if (empty($username) || empty($password)) {
        echo "<script>alert('Please fill in both fields.'); window.location.href='admin.html';</script>";
        exit();
    }

    if ($username === $valid_username && $password === $valid_password) {
        // Successful login - Redirect to admin panel
        header("Location: admin2.html");
        exit();
    } else {
        echo "<script>alert('Username/Password is incorrect.'); window.location.href='admin.html';</script>";
        exit();
    }
}
?>
