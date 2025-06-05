<?php session_start(); 
if (isset($_SESSION['email'])){

$name = $_SESSION['name'];
$email =$_SESSION['email'];
?>

<!-- 
     This website is creator by Lim Chee Ying, Ng Mui Jing, and Mak Jin Yuan.
	 Date: 27 February 2023
	 This website is created for a dental management system, which develops using HTML, CSS, JavaScript, PHP, and MySQL.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Web Designing Assignment">
    <meta name="keyword" content="startshine, dental, dental clinic, dental management system">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>StarShine | Account</title>

    <!-- External CSS style sheet: styles.css -->
    <link rel="stylesheet" href="./css/styles.css">

    <!-- Import CSS from external source: Boxicon -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">

    <!-- Website icon that will be displayed in the browser tab -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>    
<body>
    <!-- Navigation Side Bar -->
    <?php include "navigationSideBar.php"; ?>
    
    <!-- Main Content of the website -->
    <section class="content">
        <div class="accTitle">
            Account Information
            <span class="logout">
                <a href="logout.php"><img src="./img/logout.gif" alt="logouticon" title="Click here to logout"></a>
            </span>
        </div>

        <div class="accWelcome">
            <div class="welcomeImg">
                <img src="./img/accLogo.png" alt="OurWebsiteLogo" title="Our Website Logo">
            </div>

            <div class="welcomeText">
                <span class="welText">
                    Welcome to your personal account page, <span class="userNameDisplay"><?php echo $_SESSION['name']; ?></span> !
                    <span class="nextWel">At Starshine Dental, we believe that personalized dental care is the key to maintaining optimal oral health.</span> 
                    <span class="nextWel">
                        With your account, you can easily access your appointment history, view your treatment plans, 
                        and communicate with our team to ensure that you receive the best possible care. 
                    </span> 
                    <span class="nextWel">  
                        Take control of your dental health and let Starshine Dental be your partner on your journey to a healthy smile.
                    </span> 
                </span>
            </div>
        </div>

        <div class="accForm">
            <form method="post" action="editAccountInfoExec.php">
                <span id="accFormRemard">Good Day, <span class="userNameDisplay"><?php echo $_SESSION['name']; ?></span>
                    Here you can view and edit your personal details. 
                <span class="specialRemark"> ** Please note that your email address is a unique identifier that cannot be changed. </span>     
                <span class="specialRemark"> 
                    ** If you need to update any other information, simply make the changes in the corresponding fields below 
                    and click the <strong>'Save Changes'</strong> button. 
                </span>    
                </span>
                
                <div class="accInfo">
                    <fieldset>
                        <legend class="accFormTitle">Account Information:</legend>
                        <div class="accFormContent">
                            <label for="txtUsername" class="accFormLabel">Username:</label>
                            <input type="text" id="txtUsername" name="txtUsername" value="<?php echo $_SESSION['name']; ?>"> <br><br>
                            
                            <label for="txtEmail" class="accFormLabel">Email Address:</label>
                                <span class="unchangeEmail">
                                    <input type="text" id="txtEmail" name="txtEmail" value="<?php echo $_SESSION['email']; ?>" disabled> 
                                    <span class="unchangeHint">The email cannot be change!</span>
                                    <br><br>
                                </span>

                            <label for="txtPassword" class="accFormLabel">Password: </label>
                                <input type="password" name="txtPassword" value="<?php echo $_SESSION['password']; ?>">
                        </div>
                    </fieldset>
                </div>
                
                <div class="saveBtn">
                    <button id="saveChanges" name="saveChanges">Save Changes</button>
                </div>
            </form>
        </div> <br>
    </section>

    <!-- External JavaScript file: styles.css -->
    <script src="./js/script.js"></script>

</body>
</html>
<?php  
}
	else {
	
		header ('Location:index.html');
		exit();
		}
?>