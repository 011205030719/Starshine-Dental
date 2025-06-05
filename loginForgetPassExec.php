<?php
session_start();
include ("inc/dbCon.php");

if (isset($_POST['btnUpdate'])) {
    // Ensure the user key in their username and email before proceeding to the next step.
    if (empty($_POST['txtUsername']) || empty($_POST['txtEmail'])) {
        $error = "Please provide your username and email to verify your identity for password change.";
            echo "<script>alert('$error');</script>";
    }
    else{
        $username = $_POST['txtUsername'];
        $email= $_POST['txtEmail'];
        $password= $_POST['txtPassword'];

        // Check if user with given username and email exists in database.
        $sqlQuery = "SELECT * FROM dtl_user WHERE username = '$username' && email = '$email'";
        $result = mysqli_query($db, $sqlQuery);
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            // User exists, update password.
            $sqlQuery = "UPDATE dtl_user SET password = '$password' WHERE username = '$username' && email = '$email'";

            if (mysqli_query($db, $sqlQuery)) {
                echo "<script>alert('Great job! Your password has been changed successfully. You are now ready to log in to your account.');</script>";
                echo "<script>setTimeout(function(){ window.location.href = 'index.html'; }, 600);</script>";
                
                exit();
            } else{
                echo "<script>alert('Failed to update!');</script>";
                exit();
            }
        } else {
            // User does not exist, display error message.
            $error = "Invalid username or email, please try again!";

            echo "<script>alert('{$error}');</script>"; 
            echo "<script>setTimeout(function(){ window.location.href = 'loginForgetPassword.html'; }, 600);</script>";
            exit();
        }
    }
}
?>