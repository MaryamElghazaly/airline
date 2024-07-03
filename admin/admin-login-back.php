<?php
session_start();

// Check if the user has already logged in
if (isset($_SESSION['admin'])) {
    header("Location: admin-panel.php");
    exit;
}

// Check if the login form has been submitted
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Authenticate the user
    if ($username == "admin" && $password == "admin123") {
        $_SESSION['admin'] = true;
        header("Location: admin-panel.php");
        exit;
    } else {
        $error_msg = "Invalid username or password";
    }
}
?>