<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
   
      if(empty($_POST["pass"]))  
      {  
           $error = "<label class='text-danger'>Enter a password</label>";  
      }
      else if(empty($_POST["Cpass"]))  
      {  
           $error = "<label class='text-danger'>Confirm password field cannot be empty</label>";  
      } 
   
       
      else  
      {  
           if(file_exists('confirm_passwords.json'))  
           {  
                $current_data = file_get_contents('confirm_passwords.json');  
                $array_data = json_decode($current_data, true);  
                $input = array(  
                    //  'name'               =>     $_POST['name'],  
                    //  'e-mail'          =>     $_POST["email"],  
                    //  'username'     =>     $_POST["un"],  
                     'password'     =>     $_POST["pass"], 
                     'new_password'  =>     $_POST["Npass"] ,
                     'confirm_password'     =>     $_POST["Cpass"]  
                );  
                $array_data[] = $input;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('confirm_passwords.json', $final_data))  
                {  
                     $message = "<label class='text-success'>Password changed success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Append Data to JSON File using PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <!-- <h3 align="">Append Data to JSON File</h3><br />                  -->
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                  
                     <label>Current Password</label>
                     <input type="password" name = "pass" class="form-control" /><br />

                     <label>New Password</label>
                     <input type="password" name = "Npass" class="form-control" /><br />

                     <label>Confirm  your new Password</label>
                     <input type="password" name = "Cpass" class="form-control" /><br />

                     <input type="submit" name="submit" value="Change Password" class="btn btn-info" /><br />                      
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