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

    <!-- External CSS style sheet: styles.css -->
    <link rel="stylesheet" href="./css/styles.css">

    <!-- Import CSS from external source: Boxicon -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">

    <!-- Website icon that will be displayed in the browser tab -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>    
<body>
    
<!-- Navigation sidebar logo & system Name-->
<nav class="navsidebar close">
        <header>
            <div class="logo">
                <span class="logoImg">
                    <a href="homepage.php"><img src="./img/websitelogo.png" alt="website logo" title="StarShine Logo"></a>
                </span>

                <div class="text logoHeaderText"> 
                    <span class = "systemName navText"> StarShine </span>
                    <span class = "systemType navText"> Dental System </span>
                </div>
            </div>

            <i class='bx bx-chevron-left menuToggle' ></i>
        </header>

        <!-- Navigation sidebar menu links -->
        <div class="menuBar">
            <div class="manu">
                <ul class="menuLinks">
                    <!-- Page 1 (Main Page): Home Page Navigation Link -->
                    <li class="navLink">
                        <a href="homepage.php">
                            <i class='bx bx-home-smile navIcon'></i>
                            <span class="navText navText">Home Page</span>
                        </a>
                    </li>

                    <!-- Page 2: About Us Page Navigation Link -->
                    <li class="navLink">
                        <a href="aboutus.php">
                            <i class='bx bx-info-circle navIcon'></i>
                            <span class="navText navText">About Us</span>
                        </a>
                    </li>

                    <!-- Page 3: Appointment Page Navigation Link -->
                    <li class="navLink">
                        <a href="appointment.php">
                            <i class='bx bx-calendar navIcon'></i>
                            <span class="navText navText">Appointment</span>
                        </a>
                    </li>
                    
                    <!-- Page 4: Services Page Navigation Link -->
                    <li class="navLink">
                        <a href="services.php">
                            <i class='bx bxs-color navIcon'></i>
                            <span class="navText navText">Services</span>
                        </a>
                    </li>
                </ul>
            </div>
            
            <div class="bottomSideBar">
                <ul>
                <!-- Page 5: Account Page Navigation Link -->
                <li class="navLink">
                    <a href="account.php">
                        <i class='bx bxs-user-detail navIcon'></i>
                        <span class="navText navText">Account</span>
                    </a>
                </li>

                <li class="navLink">
                    <span class="logout">
                        <a href="logout.php">
                            <i class='bx bx-log-out-circle navIcon'></i>
                            <span class="navText navText">Logout</span>
                        </a>
                    </span>                    
                </li>

                <li class="mode">                    
                    <div class="switchToggle"></div>
                </li>
                </ul>
            </div>
        </div>
</nav>

    <!-- External JavaScript file: styles.css -->
    <script src="./js/script.js"></script>

</body>
</html>