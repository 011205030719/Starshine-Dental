<?php
session_start();
$error='';
include ("inc/dbCon.php");

if (isset($_POST['btnRegister'])) {
  if (empty($_POST['txtEmail']) || empty($_POST['txtPassword'])) {
    $error = "Username, email or password is invalid! Please key in all the essential information to proceed!";
      echo "<script>alert('{$error}');</script>";
  }
  else
  {
    $username = $_POST['txtUsername'];
    $email= $_POST['txtEmail'];
    $password= $_POST['txtPassword'];
  
    $sqlQuery = "INSERT INTO dtl_user (username, email, password) VALUES ('$username', '$email', '$password')";
    
    if (mysqli_query($db, $sqlQuery)) {
      echo "<script>alert('Great job! Your account has been created successfully. You are now ready to log in to your account.');</script>";
      echo "<script>setTimeout(function(){ window.location.href = 'index.html'; }, 600);</script>";
      
      exit();
    } else {
      echo "Error: " . $sqlQuery . "<br>" . mysqli_error($db);
      exit();
    }
  }
}
?>