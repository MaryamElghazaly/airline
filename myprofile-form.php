<?php
// Start the session
session_start();

// Check if the user is logged in, otherwise redirect to the login page
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

// Connect to the database
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "airline";
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $dob = $_POST["dob"];
    $reg_date = $_POST["reg_date"];

    // Validate the form data
    $errors = array();
    if (empty($name)) {
        $errors["name"] = "Name is required";
    }
    if (empty($email)) {
        $errors["email"] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Invalid email format";
    }
    if (empty($dob)) {
        $errors["dob"] = "Date of Birth is required";
    }
    if (empty($reg_date)) {
        $errors["reg_date"] = "Registration Date is required";
    }

    // Check if there are any errors
    if (count($errors) == 0) {
        // Update the user profile in the database
        $email = $_SESSION["email"];
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $query = "UPDATE register SET name='$name', email='$email', password='$password_hash', date_of_birth='$dob', registration_date='$reg_date' WHERE email='$email'";
        if (mysqli_query($conn, $query)) {
            // Update the session variables
            $_SESSION["name"] = $name;
            $_SESSION["dob"] = $dob;
            $_SESSION["reg_date"] = $reg_date;

            // Redirect to the my-profile page
            header("Location: my-profile.php");
            exit();
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
}

// Close the database connection
mysqli_close($conn);
?>
