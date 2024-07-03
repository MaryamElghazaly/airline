<?php
session_start();

if (isset($_SESSION['email'])) {
    header('Location: my-bookings.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Connect to the database and query for the user
    $dbhost = 'localhost';
    $dbname = 'airline';
    $dbuser = 'root';
    $dbpass = '';
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $stmt = $conn->prepare("SELECT * FROM register WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if the user exists and the password is correct
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['email'] = $email;
        header('Location: my-bookings.php');
        exit();
    } else {
        $error = 'Invalid email or password';
    }
}
?>