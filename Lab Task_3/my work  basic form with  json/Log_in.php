<?php  
 $message = '';  
 $error = '';  
//  $remember_me='no';
 if(isset($_POST["submit"]))  
 {  
    //   if(empty($_POST["name"]))  
    //   {  
    //        $error = "<label class='text-danger'>Enter Name</label>";  
    //   }
    //   else if(empty($_POST["email"]))  
    //   {  
    //        $error = "<label class='text-danger'>Enter an e-mail</label>";  
    //   }  
       if(empty($_POST["un"]))  
      {  
           $error = "<label class='text-danger'>Enter a username</label>";  
      }  
      else if(empty($_POST["pass"]))  
      {  
           $error = "<label class='text-danger'>Enter a password</label>";  
      }
    //   else if(empty($_POST["Cpass"]))  
    //   {  
    //        $error = "<label class='text-danger'>Confirm password field cannot be empty</label>";  
    //   } 


    //   else if(empty($_POST["remember_me"]))  
    //   {  
    //        $error = "<label class='text-danger'>Gender cannot be empty</label>";  
    //   } 
       
      else  
      {  
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $input = array(  
                    //  'name'               =>     $_POST['name'],  
                    //  'e-mail'          =>     $_POST["email"],  
                     'username'     =>     $_POST["un"],  
                     'password'     =>     $_POST["pass"],  
                    'remember_me'     =>     $_POST["remember_me"]  
                );  
                $array_data[] = $input;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success'> Loged in Success fully</p>";  
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
                   
                     <label>User Name</label>
                     <input type="text" name = "un" class="form-control" /><br />
                     <label>Password</label>
                     <input type="password" name = "pass" class="form-control" /><br />
                     <!-- <label>Confirm Password</label>
                     <input type="password" name = "Cpass" class="form-control" /><br /> -->

                     <input type="checkbox"  id="remember_me" name="remember_me" value="yes">
                    <!-- <input type="radio" id="remember_me" name="remember_me" value="yes"> -->
                     <label for="remember_me">Remember me</label>   
                    

               
                     <!-- <input type="radio" id="female" name="gender" value="female">
                     <label for="female">Female</label>
                     <input type="radio" id="other" name="gender" value="other">
                     <label for="other">Other</label><br> -->

                     <br>



                 
                     
                     <input type="submit" name="submit" value="Log in" class="btn btn-info" />                     
                     <?php  

                   
                    
                    
                    if(isset($message))  
                     {  
                          echo $message;  
                     }  



                     ?>  
                </form>  
                <!-- <a href="http://yahoo.com">Forget Password ?</a> -->
                <a href="change_password.php">Forget Password ?</a>



           </div>  
           <br />  
      </body>  
 </html>  