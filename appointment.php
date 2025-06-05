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

    <title>StarShine | Appointment</title>

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
        <div class="apptTitle">
            Appointment Page
            <div class="apptImg">
                <img src="./img/apptImg.png" alt="appointmentImage" title="Appointment Image">
            </div>
        </div>

        <div class="appointmentForm">
            <form method="post" action="appointmentExec.php">
                <label for="username" class="formlabel">Full Name Per IC: </label>
                    <input type="text" name="txtUsername"> <br><br>
                
                <label for="IC" class="formlabel">IC: </label>
                    <input type="text" name="txtIC"> <br><br>
                
                <label for="gender" class="formlabel">Gender: </label>
                    <select name="gender" id="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="non-binary">Non-Binary</option>
                    </select> <br><br>

                <label for="phoneNo" class="formlabel">Phone Number: </label>
                    <input type="text" name="txtPhoneNo"> <br><br>

                <label for="txtEmail" class="formlabel">Email Address:</label>
                    <span class="unchangeEmail">
                        <input type="text" id="txtEmail" name="txtEmail" value="<?php echo $_SESSION['email']; ?>"> 
                            <span class="unchangeHint">The email cannot be change!</span>
                    <br><br>
                    </span>
                
                    <label for="optServices" class="formlabel">Services: </label>
                        <div class="servicesCheck">
                            <?php
                            include ("inc/dbCon.php");
                            // Retrieve services data from database.
                            $query = "SELECT servicesName, price FROM dtl_services";
                            $result = mysqli_query($db, $query);

                            // Loop through data to generate checkboxes.
                            while($row = mysqli_fetch_assoc($result)) {
                                echo '<label for="'.$row['servicesName'].'" class="servicesLabel">'.$row['servicesName'].' (RM'.$row['price'].')</label>

                                    <input type="checkbox" name="services[]" value="'.$row['servicesName'].'"><br><br>';
                            }
                            ?>
                        </div>

                <label for="appointmentDate" class="formlabel">Appointment Date:</label>
                    <input type="date" id="appointmentDate" name="appointmentDate"> <br><br>
                    
                <label for="apptTime" class="formlabel">Appointment Time:</label>
                    <select name="appointmentTime" id="timeAppt">
                           <option value="9:00">9:00</option>
                           <option value="10:00">10:00</option>
                           <option value="11:00">11:00</option>
                           <option value="12:00">12:00</option>
                           <option value="13:00">13:00</option>
                           <option value="15:00">15:00</option>
                           <option value="16:00">16:00</option>
                           <option value="17:00">17:00</option>
                           <option value="18:00">18:00</option>
                           <option value="19:00">19:00</option>
                    </select>                        

                <div class="submitBtn">
                    <input type="submit" value="Submit" name="btnAppt" class="submit"> <br><br>
                </div>
            </form>
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