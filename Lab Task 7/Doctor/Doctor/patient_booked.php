<?php

session_start();

if (isset($_SESSION['username']) )
{
    require 'Bar/top1.php';
    require 'Controller/controlpatientbooked.php';
}
else{header("location:Login.php");}
?>
<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Append Data to JSON File using PHP</title>  
           <link rel="stylesheet" href="CSS/style.css">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width: 500px;">  
                <h3 align="">Appointment form</h3><br />                 
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                     <label>Name</label>  
                     <input type="text" name="name" class="form-control" /><br />  
                     <label>Phone number</label>
                     <input type="tel" name = "phone_number" class="form-control" /><br />
                     <label>Visiting Doctor name </label>
                     <input type="text" name = "doctor_name" class="form-control" /><br />
                     <label>User Name</label>
                     <input type="text" name = "username" class="form-control" /><br />
                     <label>Password</label>
                     <input type="password" name = "pass" class="form-control" /><br />
                     <label>Confirm Password</label>
                     <input type="password" name = "Cpass" class="form-control" /><br />

                    <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" id="male" name="gender" value="male">
                     <label for="male">Male</label>                     
                     <input type="radio" id="female" name="gender" value="female">
                     <label for="female">Female</label>
                     <input type="radio" id="other" name="gender" value="other">
                     <label for="other">Other</label><br>

                     <legend>Date of Birth:</legend>
                     <input type="date" name="dob"> <br><br>
                    </fieldset> 

                    <legend>Visiting Date:</legend>
                     <input type="date" name="visiting_date"> <br><br>
                    </fieldset> 

                    <legend>Visiting Time:</legend>
                     <input type="time" name="visiting_time"> <br><br>
                    </fieldset>
                     
                    <label>Visiting Hospital Name </label>  
                     <input type="text" name="visiting_hospital" class="form-control" /><br />  
                     
                     <input type="submit" name="submit" value="Send" class="btn btn-info" /><br />                      
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form>  
           </div>  
           <br />  
      </body>  
 </html> 