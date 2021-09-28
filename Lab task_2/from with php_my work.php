<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		.err{
			color: red;
		}
	</style>
</head>
<body>

	<?php

	// define variables and set to empty values
	$nameErr = $emailErr = $genderErr = $websiteErr = "";
	$name = $email = $gender = $comment = $website = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST["name"])) {
	    $nameErr = "Name is required";
	  } else {
	    $name = test_input($_POST["name"]);
       
        echo str_word_count("$name");
	    // check if name only contains letters and whitespace
	    if (preg_match("/[a-zA-Z-. ]*$/",$name) && str_word_count($name)===2) {
            // if(str_word_count("$name")==2)
            // {
              
                
            // }
        
	    }
        else{
            $nameErr = "Only letters and white space allowed";
        }
	  }



	  if (empty($_POST["email"])) {
	    $emailErr = "Email is required";
	  } else {
	    $email = test_input($_POST["email"]);
	    // check if e-mail address is well-formed
	    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	      $emailErr = "Invalid email format";
	    }
	  }

      ?>

      <!-- <form action="/action_page.php"> -->

      <!-- <label for="birthday">Birthday:</label>
      <input type="date" id="birthday" name="birthday"> -->

      <!-- <input type="submit" value="Submit form">

    </form> -->












    


    <?php
	  if (empty($_POST["website"])) {
	    $website = "";
	  } else {
	    $website = test_input($_POST["website"]);
	    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
	    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
	      $websiteErr = "Invalid URL";
	    }
	  }

	  if (empty($_POST["comment"])) {
	    $comment = "";
	  } else {
	    $comment = test_input($_POST["comment"]);
	  }

	  if (empty($_POST["gender"])) {
	    $genderErr = "Gender is required";
	  } else {
	    $gender = test_input($_POST["gender"]);
	  }
	}







	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}



?>












	 <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	 	
	 	Name: <input type="text" name="name">
	 	<span class="err">*
	 		<?php echo $nameErr;?>
	 	</span><br>
		E-mail: <input type="text" name="email">
		<span class="err">*
	 		<?php echo $emailErr;?>
	 	</span><br>
	 	
		Website: <input type="text" name="website">
		<span class="err">
	 		<?php echo $websiteErr;?>
	 	</span><br>
		Comment: <textarea name="comment" rows="5" cols="40"></textarea><br>
		Gender:
		<input type="radio" name="gender" value="female">Female
		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="other">Other
		<span class="err">*
	 		<?php echo $genderErr;?>
	 	</span>
          <br>


          <label for="birthday">Birthday:</label>
      <input type="date" id="birthday" name="birthday">




         <br>
         <label for="blood_group">Choose a blood group:</label>
    <select id="blood_group" name="blood_group">
      <option value="A+">A+</option>
      <option value="A-">A-</option>
      <option value="B+">B+</option>
      <option value="B-">B-</option>
      <option value="O+">O+</option>
      <option value="O-">O-</option>
    </select>

    <br>
   <h3>Degrees : </h3>
  <input type="checkbox" id="MBBS" name="MBBS" value="MBBS">
  <label for="MBBS"> MBBS</label><br>
  <input type="checkbox" id="FRCS" name="FRCS" value="FRCS">
  <label for="FRCS"> FRCS</label><br>
  <input type="checkbox" id="MD" name="MD" value="MD">
  <label for="MD"> MD</label>


		<br>
	 	<input type="submit" value="Submit">
	 </form>

	 <?php 

	 	echo "<h1>Your input</h1>";
	 	echo $name . "<br>";
	 	echo $email . "<br>";
	 	echo $gender . "<br>";
	 	echo $comment . "<br>";
	 	echo $website;

	  ?>
</body>
</html>