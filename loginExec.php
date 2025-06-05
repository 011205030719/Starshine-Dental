<?php
session_start();
include ("inc/dbCon.php");

if (isset($_POST['btnFormSubmit'])) {

    if (empty($_POST['txtEmail']) || empty($_POST['txtPassword'])) {
        $error = "Invalid username or email! Please key in both detail information to proceed!";
        echo "<script>alert('{$error}');</script>";
    }
    else
    {
        $email = $_POST['txtEmail'];
        $password= $_POST['txtPassword'];
                            
        $query_user = mysqli_query($db, "SELECT * from dtl_user where email='$email' and password= '$password'");                 
        $login_user = mysqli_fetch_array($query_user,MYSQLI_ASSOC);

        if ($login_user) {

            extract($login_user);

            $_SESSION['name'] = $login_user['username'];
            $_SESSION['email'] = $login_user['email'];
            $_SESSION['password'] = $login_user['password'];
            
            header ('Location: homepage.php');
            exit();
        }
        else
        {
            $error = "Invalid username or email, please try again!";

            echo "<script>alert('{$error}');</script>"; 
            echo "<script>setTimeout(function(){ window.location.href = 'index.html'; }, 600);</script>";
            exit();
        }
    }
}
?>