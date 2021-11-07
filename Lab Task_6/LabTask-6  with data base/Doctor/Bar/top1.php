<!DOCTYPE html>
<html>
<head>
</head>
<body>
	
<header>
<div class="left">
	<img class="logo" src="Uploads/Digital_medical.jpg" alt="Profile Picture"> 
</div>	
<br><br>
<div class="right">
	<?php echo "Logged in as ".$_SESSION['username']."  "; ?><br>
	<a href="welcome.php">Home</a><?php echo "  ||  " ?>
	<a href="viewProfile.php">View Profile</a><?php echo "  ||  " ?>
	<a href="patient_booked.php"> Request form</a> <?php echo "  ||  " ?>
	<a href="Patient_booking.php">Appointment list</a> <?php echo "  ||  " ?>
	<a href="approved_requests.php">Approved Requests</a> <?php echo "  ||  " ?>
	<a href="Controller/logout.php">Logout</a><?php echo "  ||  " ?>
</div>
</header> 
<br><br>
<hr>

</body>
</html>