<?php  

require 'model/patientbookedjason.php';

 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      }
      else if(empty($_POST["doctor_name"]))  
      {  
           $error = "<label class='text-danger'>Enter a visiting doctor name .</label>";  
      }  
      else if(empty($_POST["username"]))  
      {  
           $error = "<label class='text-danger'>Enter a username</label>";  
      }  
      else if(empty($_POST["pass"]))  
      {  
           $error = "<label class='text-danger'>Enter a password</label>";  
      }
      else if(empty($_POST["Cpass"]))  
      {  
           $error = "<label class='text-danger'>Confirm password field cannot be empty</label>";  
      } 
      else if(empty($_POST["gender"]))  
      {  
           $error = "<label class='text-danger'>Gender cannot be empty</label>";  
      } 
      else if(empty($_POST["visiting_hospital"]))  
      {  
           $error = "<label class='text-danger'>Enter the visiting hospital name</label>";  
      }  
      else  
      {
        booked_to_jason();

      }
    }

           
 ?>  
  
 