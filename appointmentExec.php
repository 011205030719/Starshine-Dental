<?php
session_start();
include ("inc/dbCon.php");

//Check if the submit button has been pressed
if(isset($_POST['btnAppt'])){
	
	//Get form data and sanitize it
	$username = mysqli_real_escape_string($db, $_POST['txtUsername']);
	$IC = mysqli_real_escape_string($db, $_POST['txtIC']);
	$gender = mysqli_real_escape_string($db, $_POST['gender']);
	$phoneNo = mysqli_real_escape_string($db, $_POST['txtPhoneNo']);
	$email = mysqli_real_escape_string($db, $_POST['txtEmail']);
	$services = implode(",", $_POST['services']); //Converts the array of services to a comma-separated string
	$appointmentDate = mysqli_real_escape_string($db, $_POST['appointmentDate']);
	$appointmentTime = mysqli_real_escape_string($db, $_POST['appointmentTime']); //Get the selected appointment time value from the form
	
	//Insert form data into the database
	$insertQuery = "INSERT INTO dtl_appointment (username, IC, gender, phoneNo, email, services, appointmentDate, appointmentTime) 
					VALUES ('$username', '$IC', '$gender', '$phoneNo', '{$_SESSION['email']}', '$services', '$appointmentDate', '$appointmentTime')";
	$result = mysqli_query($db, $insertQuery);
	
	//Check if the data was successfully inserted into the database
	if($result){
        $apptMessage = "Appointment successfully booked!";
            echo "<script>alert('{$apptMessage}');</script>"; 
            echo "<script>setTimeout(function(){ window.location.href = 'account.php'; }, 600);</script>";
            exit();
	} else {
		$error = "Appointment booking failed! Please try again!";
            echo "<script>alert('{$error}');</script>"; 
            echo "<script>setTimeout(function(){ window.location.href = 'appointment.html'; }, 600);</script>";
        exit();
	}
}
?>