<?php 
require 'Model/jsonCode.php';
require_once 'Model/model.php';
// $data=readFromJson("Json/data.json");

// foreach($data as $row)  
// { 
// 	if($_POST['current_password']==$row["password"])
// 	{

// 		$password = $row["password"];
//   		return;

// 	}
// }



$fetch=getID($_SESSION['username'],$_SESSION['password']);

// foreach($data as $row)  
// { 

		if( $_POST['current_password'] == test_input($fetch[6]) )
		{
	
			$password = test_input($fetch[6]);
			echo $password;
			  return;
	
		}




	
//}

?>
    <!-- $fetch = getID(	$_SESSION['username'],$_SESSION['password']);

$_SESSION['did']= test_input($fetch[0]);
$_SESSION['dusername']= test_input($fetch[5]);

$_SESSION['pic'] = test_input($fetch[15]); -->