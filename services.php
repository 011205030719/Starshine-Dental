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

    <title>StarShine | Services</title>

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
        <div class="text">
            <div class="Service">
                <div class="title">
                    <title>Our Service</title>
                    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
                    <div class="wrapper">
                        <h1>Our Service Are Best</h1>

                        <?php
                        include ("inc/dbCon.php");

                        // Retrieve services data from database.
                        $query = "SELECT servicesName, price FROM dtl_services";
                        $result = mysqli_query($db, $query);

                        // Initialize an array to store service data.
                        $services = array();

                        // Loop through data.
                        while($row = mysqli_fetch_assoc($result)) {
                            $services[] = array("name" => $row['servicesName'], "price" => $row['price']);
                        }
                        ?>

                        <!-- Display services in HTML -->
                        <div class="content-box">
                            <?php foreach ($services as $service) { ?>
                                <div class="card">
                                    <i class="bx bx-laptop bx-md"></i>
                                    <h2><?php echo $service['name']; ?></h2>
                                    <p><?php echo 'RM'.$service['price']; ?></p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!---start sticks bottom bar--->
            <div class="sticks-bottom">
                <head>
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                </head>
                <body>
                    <section class="footer">
                        <div class="social">
                            <a href="https://www.facebook.com/profile.php?id=100030025741665" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="https://www.instagram.com/c_ying02/" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://twitter.com/Cember0000" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="https://wa.me/01136655598" target="_blank"><i class="fab fa-whatsapp"></i></a>
                            <a href="mailto: cember0000@gmail.com" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                        </div>
                        <ul class="list">
                            <li>
                                <a href="homepage.html" target="_blank">Home</a>
                            </li>
                            <li>
                                <a href="aboutus.html" target="_blank">About Us</a>
                            </li>
                            <li>
                                <a href="services.php" target="_blank">Services</a>
                            </li>
                            <li>
                                <a href="appointment.php" target="_blank">Appointment</a>
                            </li>
                        </ul>
                        <p class="copyright">
                            Starshine Dental @2023
                        </p>
                    </section>
                </body>
</div>
            </div>
        </div>
    </section>
        </div>
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