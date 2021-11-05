<?php


require '../model/model.php';

if (isset($_POST['findUser'])) {
	
		echo $_POST['user_name'];

    try {
    	
    	$allSearchedUsers = searchUser($_POST['user_name']);
    	require '../showSearchedUser.php';
		
	


    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
	
}


?>

<!-- header("location:../searchUser.php"); -->