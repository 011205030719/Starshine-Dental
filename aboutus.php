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

    <title>StarShine | AboutUs</title>

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
            <div class="about">
              
                 <!--ABout us content of home page-->
       <div class="about-content">
        <container id="About">
            <div class="info">
                <h1>About Us</h1>
                <p>Choose Starshine Dental for exceptional dental cared!</p>
            
            <div class="about-row">
                <div class="left-col">
                    <img src="./img/Dental-Concerns-page-1024x683.jpeg">
                </div>
                <div class="right-col">
                    <h1> Developer<span>& Designer</span></h1>
                    <p style="color: #834a00">Welcome to Starshine Dental, where we strive to provide our patients with the highest quality dental care. 
                        Our website was built by a talented team of developers, including Lim Chee Ying, Ng Mui Jing, and Mak Jin Yuan, 
                        who share our passion for dental health.
                    </p>
                </div>
            </div>
        </container>
    </div> 

    <br>
    <hr>
        <!---Start---->
    <body>
      <div class="team-area">
         <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-container">
                        <h2>Our Team</h2>
                        <p>MEET OUR TELENTED TEAM MEMBER</p>
                    </div>
                </div>
            </div>
            <!--1st member-->
            <div class="col-md-3">
                <div class="single-team">
                    <div class="team-img">
                        <img src="./img/team1.jpg">
                    </div>
                    <div class="team-content">
                    <div class="team-info">
                        <h3>Ng Mui Jing</h3>
                        <p>Web Developer</p>
                    </div>
                    <p class="team-text"> Good Day! My Name Is Ng Mui Jing this is my semester 5.</p>
                </div>
            </div>
         </div>
         <!---2nd  member-->
         <div class="col-md-3">
            <div class="single-team">
                <div class="team-img">
                    <img src="./img/team3.jpg">
                </div>
                <div class="team-content">
                <div class="team-info">
                    <h3>Lim Chee Ying</h3>
                    <p>Web Developer</p>
                </div>
                <p class="team-text"> Good Day! My Name Is Lim Chee Ying this is my semester 6.</p>
            </div>
        </div>
     </div>
       
         <!--3rd  member--------------->
         <div class="col-md-3">
            <div class="single-team">
                <div class="team-img">
                    <img src="./img/team2.jpg">
                </div>
                <div class="team-content">
                <div class="team-info">
                    <h3>Mak Jin Yuan</h3>
                    <p>Web Developer</p>
                </div>
                <p class="team-text"> Good Day! My Name Is Mak Jin Yuan this is my semester 5.</p>
            </div>
        </div>
     </div>
    </div>
</div>
    
      </div>
    </div>
</div>
               </body> 
<!----------------------------------Close----------------------------------------------->
<br><br>
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