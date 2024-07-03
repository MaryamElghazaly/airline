<?php

    $connection = mysqli_connect('localhost', 'root', '', 'airline');
    if(isset($_POST['submit'])){
        // Get the user's information from the form
        $name = mysqli_real_escape_string($connection, $_POST['name']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        $confirm_password = mysqli_real_escape_string($connection, $_POST['confirm-password']);
        $date_of_birth = mysqli_real_escape_string($connection, $_POST['dob']);
        $reg_date = mysqli_real_escape_string($connection, $_POST['reg_date']);


        // Check if the passwords match
        if($password != $confirm_password){
            echo "Passwords do not match.";
        } else {
            // Hash the password for security
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Create a SQL query to insert the user's information into the database
            $sql = "INSERT INTO register(name, email, password, date_of_birth, registration_date) VALUES ('$name', '$email', '$hashed_password', '$date_of_birth', '$reg_date')";

            // Execute the query and check if it was successful
            if(mysqli_query($connection, $sql)){
                echo "Registration successful.";
                header('location:Login.php');
            } else {
                echo "Registration failed. Please try again later.";
            }
        }
    }
?>
