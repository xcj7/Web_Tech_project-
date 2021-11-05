
<!DOCTYPE html>  
 <html>  
      <head>  
        <title></title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
      <?php                         require 'model/store_approval.php';   ?>

        <div class="container" style="width:1200px;">              
                <div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th>Name</th> 
                               <th>phone_number</th> 
                               <th>E-mail</th>  
                               <th>User name</th>   
                               <th>Gender</th>   
                               <th>Date of birth</th> 
                               <th>visiting Date</th>
                               <th>visiting Time</th>
                               <th>visiting hospital</th>

                               <th>Approval</th>  
                          </tr>  
                          <?php   



                          $data = file_get_contents("json/data.json");  
                          $data = json_decode($data, true);  
                          foreach($data as $row)  
                          {  
                               echo '<tr>
                               
                               <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >  
                               
                               <td>'.$row["name"].'</td>
                               <td>'.$row["phone_number"].'</td>
                               <td>'.$row["e-mail"].'</td>
                               <td>'.$row["username"].'</td>
                               <td>'.$row["gender"].'</td>
                               <td>'.$row["dob"].'</td>
                               <td>'.$row["visiting_date"].'</td>
                               <td>'.$row["visiting_time"].'</td>
                               <td>'.$row["visiting_hospital"].'</td>
                               <td>
                               

                               <input type="submit" name="submit" value="Submit" class="btn btn-info">

                               </form>  
                               </tr>';  
                          }  
                          ?>  
                     </table>  
                   </div>
                 </div>
      </body>  
 </html>  