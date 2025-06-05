<?php
session_start();
include ("inc/dbCon.php");

if (isset($_POST['saveChanges'])) {

    $username = $_POST['txtUsername'];
    $password= $_POST['txtPassword'];
    $email= $_SESSION['email']; 

    $sqlQuery = "UPDATE dtl_user SET username = '$username', password = '$password' WHERE email = '$email'";

    if (mysqli_query($db, $sqlQuery)) {
        // Update the session variables with the new user information.
        $_SESSION['name'] = $username;
        $_SESSION['password'] = $password;

        $message = "Information updated successfully!";
        echo "<br>";
        
        echo "<script>alert('{$message}');</script>"; 
        echo "<script>setTimeout(function(){ window.location.href = 'account.php'; }, 600);</script>";
        exit();
    } else {
        echo "Error: " . $sqlQuery . "<br>" . mysqli_error($db);
        exit();
    }
}
?>