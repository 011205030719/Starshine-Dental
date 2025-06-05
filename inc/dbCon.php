<?php
// Database & Login Credentials.
$dbHost = "localhost";
$dbUsername = "starshine";
$dbPassword = "starshine@2023";
$dbDatabase = "starshine";

// Connect to MySQL Server
$db = mysqli_connect($dbHost, $dbUsername, $dbPassword);
if (!$db) {
    die("<br><center><font face='arial'>Unable to connect to MySQL Server.<br>" . mysqli_connect_error() . "</font></center>");
}

// Select Database
if (!mysqli_select_db($db, $dbDatabase)) {
    die("<br><center><font face='arial'>Unable to connect to database.<br>" . mysqli_error($db) . "</font></center>");
}
?>
