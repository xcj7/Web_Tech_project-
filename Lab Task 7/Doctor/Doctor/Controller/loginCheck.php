<?php

require 'Model/model.php';
$usernameErr = $passwordErr = '';
$username = $password =  '';
if (isset($_POST['username'])) 
{
  require 'Controller/checkloginData.php';
	if ($_POST['username']==$username && $_POST['password']==$password) 
  {
		$_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    //$_SESSION['name'] ="";

   
	

      $fetch = getID(	$_SESSION['username'],$_SESSION['password']);

        $_SESSION['did']= test_input($fetch[0]);
        $_SESSION['dusername']= test_input($fetch[5]);
        $_SESSION['dpassword']= test_input($fetch[6]);

        
        $_SESSION['pic'] = test_input($fetch[15]);
      


    }

		header("location:welcome.php");
	}


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  
  if (empty($_POST["username"])) 
  {
    $usernameErr = "User Name is required";
  } 
  else 
  {
    $username = test_input($_POST["username"]);
    if (!preg_match("/^[a-zA-Z-.' ]*$/",$username))
    {
      $usernameErr = "Only letters, white space, period, dash allowed";
      $username="";
    }
    else if (str_word_count($username)<2 ) 
    {
      $usernameErr = "Minimum two words";
      $username="";
    }
    else if($_POST['username']!=$username)
    {
      $usernameErr="User Name invalid";
      $username="";
    }
  }

  if (empty($_POST["password"])) 
  {
    $passwordErr = "Password is required";
  } 
  else 
  {
    $password = test_input($_POST["password"]);
    if (strlen($password) <= 8)
    {
      $passwordErr = "Must be atleast 8 characters";
      $password="";
    }
    else if (!preg_match("/[!,@,#,$,%,^,&]/",$password)) 
    {
      $passwordErr = "Password must contain at least one of the special character (!,@,#,$,%,^,&)";
      $password ="";
    }
    else if($_POST['password']!=$password)
    {
      $passwordErr="Password invalid";
    }
  }
}

function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>