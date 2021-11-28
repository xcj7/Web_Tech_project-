<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>

<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/bootstrap.css">
</head>
<body>
<?php 
session_start();
if (isset($_SESSION['username'])){require 'Bar/top1.php';}
else{require 'Bar/top.php';}

if ($_SESSION['remember_me']==true) {
	echo"yo boss";
	// setcookie('username',$_SESSION['username'], time()+5);
	// setcookie('password',  $_SESSION['password'], time()+5);
	 setcookie('username',$_SESSION['username'], time()+ (86400 * 30));
	 setcookie('password',  $_SESSION['password'], time()+ (86400 * 30));
	echo "Cookie set successfully";
  }else{
   //   echo $_POST['remember_me'];
	setcookie('username',"");
	setcookie('password',"");
	echo "Cookie not set";
  }

  echo " ***id = ".$_SESSION['did'];

 ?>
  <div class="container-fluid">
  <div class="container">
<div class="div">
<img class="p" src="Uploads/Digital_medical.jpg" alt="Profile
		Picture">
</div>
<h1 class="welcome, div" style= "color : DeepSkyBlue">Welcome Doctor</h1>
<h2 class="welcome,div" style="color : DeepSkyBlue"><pre>              your devotion and care bring healing and comfort </pre></h2>
</div>
</div>
<!-- <?php require 'Bar/footer.php';?> -->
</body>
</html>
