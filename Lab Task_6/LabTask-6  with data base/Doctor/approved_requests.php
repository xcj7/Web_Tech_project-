
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="CSS/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<script src="htttps://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script>

</head>
<body>
     
<div class="container" style="width:1200px;">              
                <div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th>Name</th> 
                               <th>phone_number</th> 
                               <th>Doctor Name</th>  
                               <th>User name</th>   
                               <th>Gender</th>   
                               <th>Date of birth</th> 
                               <th>visiting Date</th>
                               <th>visiting Time</th>
                               <th>visiting hospital</th>

                               <th>Approval</th>  
                          </tr>  
                         
                                   
                            
                    
  
       

<?php 

session_start();

if (isset($_SESSION['username']) ){require 'Bar/top1.php';}
else{header("location:Login.php");}


                          $apprval_request="yes"  ;    
                          $data = file_get_contents("Json/approved_data.json");  
                          $data = json_decode($data, true);  
                          //$index=0;
                          foreach($data as $row)  
                          {  
                               echo '<tr>
                               <td>'.$row["name"].'</td>
                               <td>'.$row["phone_number"].'</td>
                               <td>'.$row["doctor_name"].'</td>
                               <td>'.$row["username"].'</td>
                               <td>'.$row["gender"].'</td>
                               <td>'.$row["dob"].'</td>
                               <td>'.$row["visiting_date"].'</td>
                               <td>'.$row["visiting_time"].'</td>
                               <td>'.$row["visiting_hospital"].'</td>
                               <td>'.$apprval_request.'</td>
                               
                               </tr><br><br>'; 

          
                              }    
   ?>



          </table> 
       </div>
 </div>              
</body>
</html>