
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     
<div class="container_table" >              
                <div class="table-responsive"> 
                <div class="right_table">
           <!-- <center> -->
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
                                  
                          $data = file_get_contents("Json/data_of_requests.json");  
                          $data = json_decode($data, true);  
                          $index=0;
                          $approval="request received";
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
                               <td>'.$approval.'</td>
                               
                               </tr><br><br>'; 

 
                             
if((isset($_POST["name"]) == $row["name"]) && isset($_POST["submit"]))
{



                               if ( ( $_POST["name"] == $row["name"]) && isset($_POST["submit"]))
                                        {
                                             $current_data = file_get_contents('Json/approved_data.json');  
			                             $data = json_decode($current_data, true);
                                       // writeToJson_approval(); 
                                        $extra = array(  
                                             'name'               =>     $row['name'],  
                                             'phone_number'               =>     $row['phone_number'],
                                             'doctor_name'          =>     $row["doctor_name"],  
                                             'username'     =>     $row["username"],  
                                             'gender'     =>     $row["gender"],  
                                             'dob'     =>     $row["dob"] ,
                                             'visiting_date'     =>     $row["visiting_date"],
                                             'visiting_time'     =>     $row["visiting_time"] ,
                                             'visiting_hospital'     =>     $row["visiting_hospital"] 
                                         ); 

                               
                                  array_push($data, $extra);
                                  
                                           $final_data = json_encode($data); 
                                             if(file_put_contents('Json/approved_data.json', $final_data))  
                                             {  
                                                  echo "Information Updated Successfully";
                                             } 
                                              
                                             else  
                                             {  
                                             echo "JSON File not exits";  
                                             }
                                        }

  }                                    // $array_temp[]=$extra;

                                        $index++;   


                                        if ($_SERVER["REQUEST_METHOD"] == "POST") 
                                        {
                                        if (empty($_POST["name"])) 
                                        {
                                        $nameErr = "Name is required";
                                        } 
                                        else 
                                        {
                                        $name = test_input($_POST["name"]);
                                       
                                        }

                                        }     
                                       
                              }    



                              function test_input($data) 
                              {
                              $data = trim($data);
                              $data = stripslashes($data);
                              $data = htmlspecialchars($data);
                              return $data;
                              }
                                   ?>

</table>
          <!-- </center> -->
       </div>

          <!-- </table>  -->
       </div> 
 </div>              
</body>
</html>