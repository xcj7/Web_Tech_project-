<?php 
require 'Model/jsonCode.php';
require_once 'Model/model.php';

$data=getID($_POST['username'],$_POST['password']);
//echo"hello boss #";
//echo $data[5];

	if ($_POST['username']==$data[5] && $_POST['password']==$data[6]) 
	{
		$username =  test_input($data[5]);//dusername ->5
  		$password =  test_input($data[6]);//password ->6
  		return;
	}

?>

<!-- 
function getID($username,$password)
{
    $conn = db_conn();
    $sql = "SELECT * FROM `doctor` WHERE `dusername`= '$username'  and `dpassword` = '$password' ;";
    //SELECT * FROM `doctor` WHERE `dusername`= 'hassan_tushar' and `dpassword` = '#12345678';

          $result = $conn->query($sql);

          //$fetch = $result->fetch_assoc();
    
    //$fetch = $result->fetch_array();
    if ($result->rowCount() > 0){
    $fetch = $result->fetch(); // returns a row .
    return $fetch;

    }
    else{
        return "";
    }
    
} -->
