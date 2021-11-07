<?php 
//require 'Model/jsonCode.php';
require 'Model/model.php';
//$data=readFromJson("Json/data.json");
$data=showData($_SESSION['did']);


	
		$name = $data['dname'];
		$username = $data['dusername'];
  		$email =$data['demail'];
 		$phone_number = $data['dphone'];
  		$location = $data['daddress'];
  		$password = $data['dpassword'];
  		//$confirm_password = $data['confirm_password'];
	    $gender = $data['dgender'];
	    $registrationid = $data['docid'];
		$blood_group = $data['dblood_group'];
		$specialist = $data['dspec'];
  		//return;
	


?>

