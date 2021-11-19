<!-- <!DOCTYPE html>
<html>
<head>
</head> -->
<!-- <body> -->
	

<!-- <div class="left">
	<img class="logo" src="Uploads/Digital_medical.jpg" alt="Profile Picture"> 
</div>	
<br><br> -->
<div class="container-fluid">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary padding" style="padding: 15px 15px">
      <div class="col-xl-5 col-lg-2 col-12"><img class="logo" style="width: 120px" src="Uploads/Digital_medical.jpg" alt="Profile Picture">
	  </div>
  <div class="col-xl-7 col-lg-10 col-12">
    <div class="navbar-nav">
<div class="right">
	<?php echo "Logged in as "."<p style='color:Tomato;'>".$_SESSION['username']." </p> "; ?><br>
	<!-- <a class="nav-link"  href="welcome.php" style="color:Tomato;">Home </a><?php echo "  ||  " ?>
	<a class="nav-link" href="viewProfile.php"  style="color:Tomato;" >View Profile</a><?php echo "  ||  " ?>
	<a  class="nav-link" href="patient_booked.php" style="color:Tomato;" > Request form</a> <?php echo "  ||  " ?>
	<a class="nav-link"  href="Patient_booking.php"style="color:Tomato;" >Appointment list</a> <?php echo "  ||  " ?>
	<a class="nav-link" href="approved_requests.php"  style="color:Tomato;">Approved Requests </a> <?php echo "  ||  " ?>
	<a class="nav-link" href="Controller/logout.php" style="color:Tomato;">Logout </a><?php echo "  ||  " ?> -->
</div>
</div>
</nav>
</div>
</div>
</div>
</div>

<br><br>
<hr>
<!-- 
</body> -->
<!-- </html>  -->





 <!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the side navigation */
.sidenav {
  height: 100%;
  width: 175px;
  /* position:   sticky; */
  position: fixed;
  /* position: relative; */
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
}


/* Side navigation links */
.sidenav a {
  color: white;
  padding: 16px;
  text-decoration: none;
  display: block;
}

/* Change color on hover */
.sidenav a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the content */
.content {
  margin-left: 200px;
  padding-left: 20px;
}
</style>
</head>
<body>

<div class="sidenav">
<a class="nav-link"  href="welcome.php" style="color:Tomato;">Home </a>
	<a class="nav-link" href="viewProfile.php"  style="color:Tomato;" >View Profile</a>
	<a  class="nav-link" href="patient_booked.php" style="color:Tomato;" > Request form</a> 
	<a class="nav-link"  href="Patient_booking.php"style="color:Tomato;" >Appointment list</a> 
	<a class="nav-link" href="approved_requests.php"  style="color:Tomato;">Approved Requests</a> 
	<a class="nav-link" href="Controller/logout.php" style="color:Tomato;">Logout </a>
</div>

<!-- <div class="content">
  <h2>CSS Template</h2>
  <p>A full-height, fixed sidenav and content.</p>
</div> -->

</body>
</html>

