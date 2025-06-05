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

    <title>StarShine | HomePage</title>

    <!-- External CSS style sheet: styles.css -->
    <link rel="stylesheet" href="./css/styles.css">

    <!-- Import CSS from external source: Boxicon -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">

    <!-- JavaScript function that pops up a message box when a user visits our website -->
    <script>
        window.onload = function() {
            alert("Welcome to Starshine Dental System!");
        };
    </script>

    <!-- Website icon that will be displayed in the browser tab -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>    
<body>
    <!-- Navigation Side Bar -->
    <?php include "navigationSideBar.php"; ?>
    
    <!-- Main Content of the website -->
    <section class="content">
        <div class="text">
            <div class="home">
    
        <!---Blog Post Card----->
        <div class="blog-body">
            <div class="blog-post">
                <div class="blog-post_img">
                    <img src="./img/blog-img.jpg" alt="">
                </div>
                <div class="blog-post_info">
                    <div class="blog.post_date">
                        <span id="datetime"></span>
                    </div>
                    <script>
                        // Get the element to display the date and time.
                        var datetimeElement = document.getElementById("datetime");

                        // Update the clock every second.
                        setInterval(function() {
                        var currentDateTime = new Date();

                        // Formatting the date and time.
                        var format = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric', second: 'numeric'};
                        var formattedDateTime = currentDateTime.toLocaleString('en-US', format);

                        datetimeElement.innerHTML = formattedDateTime;
                        }, 1000);
                    </script>
                    <h1 class="blog-post_title">StarShine Dental</h1>
                    <p class="blog-post_text">At Starshine Dental, we believe that a healthy smile is a key component of overall well-being. Our team of experienced dental professionals is dedicated to providing comprehensive dental care in a warm and welcoming environment. From routine cleanings to advanced restorative procedures, we are committed to helping our patients achieve optimal oral health.</p>
                    <a href="#" class="blog-post_cta">Read More </a>
                </div>
            </div>
    
            
        </div><!---body close of blog card-->
        <hr>
        <br>
    
        <!----ZigZagLayout start---------------->
        <div class="z-body">
    
            <div style="text-align:center">
              <h2>STARSHINE DETNTAL SYSTEM</h2>
              <p>Welcome to our <em>StarShine</em>  Dental</p>
            </div>
            <!----our dental website intro section------------------->
            <br>
            <div class="z-conatiner">
                <div class="row">
                    <div class="column-66">
                        <h1 class="xlarge-font"><b>StarShine Dental</b></h1>
                        <h1 class="large-font" style="color: MediumSeaGreen;"><b>Who we are</b></h1>
                        <p>As a full-service dental practice, we offer a wide range of services to meet the needs of our patients. Our team includes skilled dentists, hygienists, and support staff who are all committed to delivering exceptional care. We understand that visiting the dentist can be stressful for some people, which is why we strive to create a relaxing and comfortable experience for our patients. Whether you need a routine checkup, cosmetic dentistry services, or more complex restorative work, we are here to help. At Starshine Dental, our goal is to help you achieve a healthy, beautiful smile that you can be proud of.</p>
                        <br>
                        <button class="z-button"><a href="aboutus.html">Read More About Us</a></button>
                    </div>
    
                    <div class="column-33">
                        <embed type="image/jpg" src="./img/HomeAboutUs-img.jpg" width="451" height="481">
                    </div>
                </div>
            </div>
    
            <!---Service information section-->
            <br><br>
            <div class="z-conatiner" style="background-color:#e4edf7">
                <div class="row">
                  <div class="column-33">
                    <embed type="image/jpg" src="./img/HomeService-img.jpg" width="451" height="481">
                  </div>
                  <div class="column-66">
                    <h1 class="xlarge-font"><b>Service</b></h1>
                    <h1 class="large-font" style="color:red;"><b>Why Choose our service</b></h1>
                    <p>Don't let dental issues hold you back from living your best life. Choosing a dental clinic can be overwhelming, but with Starshine Dental Service, you can rest assured that you're making the right choice. Our commitment to excellence, personalized care, and state-of-the-art technology make us the go-to dental clinic for individuals and families alike. Experience the Starshine difference today!</p>
                    <br>
                    <button class="z-button"><a href="services.php">Read More Service</a></button>
                  </div>
                </div>
              </div>
              <!------Appointment section--------------------------->
              <br><br>
              <div class="z-conatiner">
                <div class="row">
                    <div class="column-66">
                        <h1 class="xlarge-font"><b>Appointment</b></h1>
                        <h1 class="large-font" style="color: MediumSeaGreen;"><b>Let's Book Appointment</b></h1>
                        <p>Book your next dental appointment with Starshine Dental today! Our friendly staff and experienced dental professionals will provide high-quality care in a comfortable and relaxing environment. With flexible scheduling options available, taking care of your dental needs has never been easier. Don't wait any longer to achieve optimal oral health and a beautiful smile schedule your appointment now!</p>
                        <br>
                        <button class="z-button"><a href="appointment.php">Book Appointment</a></button>
                    </div>
    
                    <div class="column-33">
                        <embed type="image/jpg" src="./img/HomeAppoint-img" width="451" height="481">
                    </div>
                </div>
            </div>
    
        </div>
        <br>
    <!-----ZigZagLayout close--------------->
    
    <!-----user rating start-->
    </div>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <div class="u-body">
                <span class="u-heading">User Rating</span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        <p>4.1 average based on 254 reviews.</p>
                             <hr style="border:3px solid #f1f1f1">
    
               <div class="u-row">
                    <div class="side">
                         <div>5 star</div>
              </div>
             <div class="middle">
             <div class="bar-container">
             <div class="bar-5"></div>
        </div>
      </div>
    
            <div class="side right">
            <div>150</div>
      </div>
            <div class="side">
            <div>4 star</div>
      </div>
            <div class="middle">
            <div class="bar-container">
           <div class="bar-4"></div>
        </div>
      </div>
           <div class="side right">
          <div>63</div>
      </div>
          <div class="side">
          <div>3 star</div>
      </div>
          <div class="middle">
          <div class="bar-container">
          <div class="bar-3"></div>
        </div>
      </div>
           <div class="side right">
           <div>15</div>
      </div>
            <div class="side">
            <div>2 star</div>
      </div>
            <div class="middle">
        <div class="bar-container">
          <div class="bar-2"></div>
        </div>
      </div>
      <div class="side right">
        <div>6</div>
      </div>
      <div class="side">
        <div>1 star</div>
      </div>
      <div class="middle">
        <div class="bar-container">
          <div class="bar-1"></div>
        </div>
      </div>
      <div class="side right">
        <div>20</div>
      </div>
    </div>
    </div>
    <!-----user rating close-->
            
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