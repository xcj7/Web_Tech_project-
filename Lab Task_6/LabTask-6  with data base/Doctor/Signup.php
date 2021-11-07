<!DOCTYPE html>  
<html>  
<head>  
<title>Signup</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
  <script src="htttps://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script>
<link rel="stylesheet" href="CSS/style.css"> 
</head>  
<body>
<?php 

session_start();

 if (isset($_SESSION['username'])){header("location:welcome.php");}
else{  require 'Bar/top.php';}
require 'Controller/storeData.php';
?>

<div class="div">
<fieldset>
<legend>Signup</legend>                 
  <form method="post"> 
  <label for="name">Doctor name:</label>
  <input type="text" id="name" name="name" placeholder="ex : ratan tata ">
  <span class="error"> <?php echo $nameErr;?></span><hr>


  <label for="registrationid">Doctor's registration id:</label>
  <input type="text" id="registrationid" name="registrationid" placeholder="ex : 123456789 ">
  <span class="error"> <?php echo $registrationidErr;?></span><hr>

  

  <label for="email"> Email :</label>
  <input type="text" id="email" name="email" placeholder="ex : abc@something.com">
  <span class="error"> <?php echo $emailErr;?></span><hr>

  <label for="phone_number">Phone number :</label>
  <input type="tel" id="phone_number" name="phone_number" placeholder="ex : 01723456789" pattern="[0-9]{3}[0-9]{8}">
  <span class="error"> <?php echo $phone_numberErr;?></span><hr>

  <label for="location">Location :</label>
  <input type="text" id="location" name="location"  placeholder="area name,thana,union,district,division">
  <span class="error"> <?php echo $locationErr;?></span><hr>



  <fieldset>
 <b>Specialist of :</b>
  <select name="specialist">
  <option name="specialist" <?php if (isset($specialist) && $specialist=="None") echo "checked";?> value="None">None</option>
  <option name="specialist" <?php if (isset($specialist) && $specialist=="Madicine") echo "checked";?> value="Madicine">Madicine</option>
  <option name="specialist" <?php if (isset($specialist) && $specialist=="Anesthetics") echo "checked";?> value="Anesthetics">Anesthetics</option>
  <option name="specialist" <?php if (isset($specialist) && $specialist=="Cardiology") echo "checked";?> value="Cardiology">Cardiology</option>>
  <option name="specialist" <?php if (isset($specialist) && $specialist=="Ear,nose and throat (ENT)") echo "checked";?> value="Ear,nose and throat (ENT)">Ear,nose and throat (ENT)</option>
  <option name="specialist" <?php if (isset($specialist) && $specialist=="Gastroenterology") echo "checked";?> value="Gastroenterology">Gastroenterology</option>
  <option name="specialist" <?php if (isset($specialist) && $specialist=="General Surgery") echo "checked";?> value="General Surgery">General Surgery</option>
  <option name="specialist" <?php if (isset($specialist) && $specialist=="Hematology") echo "checked";?> value="Hematology">Hematology"</option> 
  <option name="specialist" <?php if (isset($specialist) && $specialist=="Neurology") echo "checked";?> value="Neurology">Neurology</option>
  <option name="specialist" <?php if (isset($specialist) && $specialist=="Obstetrics and gynecology units") echo "checked";?> value="Obstetrics and gynecology units">Obstetrics and gynecology units</option>
  <option name="specialist" <?php if (isset($specialist) && $specialist=="Orthopedics") echo "checked";?> value="Orthopedics">Orthopedics</option>
  <option name="specialist" <?php if (isset($specialist) && $specialist=="Urology") echo "checked";?> value="Urology">Urology</option> 
  <option name="specialist" <?php if (isset($specialist) && $specialist=="Others") echo "checked";?> value="Others">Others</option> 
</select>
  <span class="error"> <?php //echo $specialist;?></span>
 </fieldset><hr>





<fieldset>
<b>Gender:</b>
  <select name="gender">
  <!-- <option></option> -->
  <option name="gender" <?php if (isset($gender) && $gender=="Male") echo "checked";?> value="Male">Male</option>
  <option name="gender" <?php if (isset($gender) && $gender=="Female") echo "checked";?> value="Female">Female</option>
  <option name="gender" <?php if (isset($gender) && $gender=="Other") echo "checked";?> value="Other">Other</option>
    
</select>
  <span class="error"> <?php //echo $gender;?></span>
 </fieldset><hr>


 <fieldset>
<b>Blood Group:</b>
  <select name="blood_group">
  <!-- <option></option> -->
  <option name="blood_group" <?php if (isset($blood_group) && $blood_group=="None") echo "checked";?> value="None">None</option>
  <option name="blood_group" <?php if (isset($blood_group) && $blood_group=="A+") echo "checked";?> value="A+">A+</option>
  <option name="blood_group" <?php if (isset($blood_group) && $blood_group=="A-") echo "checked";?> value="A-">A-</option>>
  <option name="blood_group" <?php if (isset($blood_group) && $blood_group=="AB+") echo "checked";?> value="AB+">AB+</option>>
  <option name="blood_group" <?php if (isset($blood_group) && $blood_group=="AB-") echo "checked";?> value="AB-">AB-</option>>
  <option name="blood_group" <?php if (isset($blood_group) && $blood_group=="B+") echo "checked";?> value="B+">B+</option>
  <option name="blood_group" <?php if (isset($blood_group) && $blood_group=="B-") echo "checked";?> value="B-">B-</option>
  <option name="blood_group" <?php if (isset($blood_group) && $blood_group=="O+") echo "checked";?> value="O+">O+</option>
  <option name="blood_group" <?php if (isset($blood_group) && $blood_group=="O-") echo "checked";?> value="O-">O-</option> 
</select>
  <span class="error"> <?php // echo $blood_group;?></span>
 </fieldset><hr>



 <label for="username">User name :</label>
  <input type="text" id="username" name="username" placeholder=" ex : xcj boss">
  <span class="error"> <?php echo $usernameErr;?></span><hr>


  <label for="password">Password :</label>
  <input type="password" id="password" name="password" placeholder="ex : !@#12345abMaZ">
  <span class="error"> <?php echo $passwordErr;?></span><hr>

  <label for="confirm_password">Confirm Password :</label>
  <input type="password" id="confirm_password" name="confirm_password">
  <span class="error"> <?php echo $confirm_passwordErr;?></span><hr>


<input type="submit" name="submit" value="Submit" class="btn btn-info">
<input type="reset" name="reset" value="Reset" class="btn btn-info">
</form>  
</fieldset>
<?php

?>

</div> 
<!-- </?php require 'Bar/footer.php';?> -->
</body>  
</html>  