<?php


require_once 'Model/editpjasoncode.php';
require_once 'Model/model.php';

if (isset($_SESSION['username'])){}
else
  {   $name = $username= $email = $phone_number = $location = $password = $confirm_password = $gender = $registrationid = $blood_group = $specialist ='';}

    $nameErr = $usernameErr= $emailErr = $phone_numberErr = $locationErr = $passwordErr = $confirm_passwordErr = $genderErr = $registrationidErr = $blood_groupErr = $specialistErr ='';
    
$flag=1;  
if($_SERVER["REQUEST_METHOD"] == "POST")  
{  
  if (empty($_POST["name"])) 
  {
    $nameErr = "Name is required";
    $flag=0;
  } 
  else 
  {
    $name = test_input2($_POST["name"]);
    if (!preg_match("/^[a-zA-Z0-9-' _.-]*$/",$name) || str_word_count($name)<2 )
    {
      $nameErr = "Only letters, white space, period, dash allowed and minimum two words";
      $name="";
      $flag=0;
    }
  }

  if (empty($_POST["username"])) 
  {
    $usernameErr = "User name is required";
    $flag=0;
  } 
  else 
  {
    $username = test_input2($_POST["username"]);
    if (!preg_match("/^[a-zA-Z0-9-' _.-]*$/",$username) || str_word_count($username)<2 )
    {
      $usernameErr = "Only letters, white space, period, dash allowed and minimum two words";
      $username="";
      $flag=0;
    }
  }

      
  if (empty($_POST["email"])) 
  {
    $emailErr = "Email is required";
    $flag=0;
  } 
  else 
  {
    $email = test_input2($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
      $emailErr = "Invalid email format";
      $email="";    
      $flag=0;
    }
  }


  if (empty($_POST["phone_number"])) 
  {
    $phone_numberErr = "phone Number is required";
    $flag=0;
  } 
  else 
  {
    $phone_number = test_input2($_POST["phone_number"]);
    if(!preg_match('/^[0-9]{3}[0-9]{8}$/', $_POST['phone_number']))
    {
      $phone_numberErr = "Invalid Number";
      $phone_number="";
      $flag=0;
    }
  }

  if (empty($_POST["location"])) 
  {
    $locationErr = " location is required";
    $flag=0;
  } 
  else 
  {
    $location = test_input2($_POST["location"]);
  }



  if (empty($_POST["password"])) 
  {
    $passwordErr = "Password is required";
    $flag=0;
  } 
  else 
  {
    $password = test_input2($_POST["password"]);
    if (strlen($password) < 8)
    {
      $passwordErr = "Must be atleast 8 characters";
      $password="";
      $flag=0;
    }
    else if (!preg_match("/[!,@,#,$,%,^,&]/",$password)) 
    {
      $passwordErr = "Password must contain at least one of the special character (!,@,#,$,%,^,&)";
      $password ="";
      $flag=0;
    }
  }

  if (empty($_POST["confirm_password"])) 
  {
    $confirm_passwordErr = "Confirm Password is required";
    $flag=0;
  } 
  else 
  {
    $confirm_password = test_input2($_POST["confirm_password"]);
    if($confirm_password!=$password)
    {
      $confirm_passwordErr = "Password dosen't match";
      $confirm_password="";
      $flag=0;
    }
  }

  if(empty($_POST["gender"]))  
  {  
    $genderErr = "please, Select gender"; 
    $flag=0; 
  }
  else 
  {
    $gender = test_input2($_POST["gender"]);
  } 






  if(empty($_POST["blood_group"]))  
  {  
    $blood_groupErr = "please, Select blood group "; 
    $flag=0; 
  }
  else 
  {
    $blood_group = test_input2($_POST["blood_group"]);
  } 






  if(empty($_POST["specialist"]))  
  {  
    $specialistErr = "please, Select one of the options "; 
    $flag=0; 
  }
  else 
  {
    $specialist = test_input2($_POST["specialist"]);
  } 





  
  if (empty($_POST["registrationid"])) 
  {
    $registrationidErr = "Regestration Id is required";
    $flag=0;
  } 
  else 
  {
    $registrationid = test_input2($_POST["registrationid"]);
    if(!preg_match('/^[0-9]{3}[0-9]{8}$/', $_POST['registrationid']))
    {
      $registrationidErr = " Invalid Rgestreation Id ";
      $registrationid="";
      $flag=0;
    }
  }



  if ($flag==1) 
  {
    if(isset($_POST["submit"]) )  
    {
      updateprofile_from_jason($_SESSION['username'],$_SESSION['password']);
      
// if(isset($_POST["submit"]) && isset($_SESSION['name']))
//     {
      $data['dname'] = $_POST['name'];
      $data['docid'] = $_POST['registrationid'];
      $data['demail'] = $_POST['email'];
      $data['dphone'] = $_POST['phone_number'];
      $data['daddress'] = $_POST['location'];
      $data['dspec'] = $_POST['specialist'];
      $data['dgender'] = $_POST['gender'];
      $data['dblood_group'] = $_POST['blood_group'];
      $data['dusername'] = $_POST['username'];
      $data['dpassword'] = $_POST['password'];

      // $stmt->execute([$data['docid'], $data['dname'], $data['demail'] $data['dusername'], $data['dpassword'],
      // $data['dspec'],$data['daddress'],$data['dphone'], $data['dgender'],$data['dblood_group'], $id]);

     updateData($_SESSION['did'], $data);



//       if (addData( $data)) 
//       {
//         echo 'Successfully Updated';
//       }
//     }
    }  
  }    
} 
  
function test_input2($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}  
?>