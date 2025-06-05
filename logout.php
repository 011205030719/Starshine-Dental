<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["email"]);

$logout = "You are logout successful! Thank you for visit us!";
echo "<script>alert('{$logout}');</script>"; 
echo "<script>setTimeout(function(){ window.location.href = 'index.html'; }, 600);</script>";
?>