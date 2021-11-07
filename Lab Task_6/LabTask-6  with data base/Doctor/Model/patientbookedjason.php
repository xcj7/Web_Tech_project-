<?php
 function booked_to_jason()
 {
if(file_exists('Json/data_of_requests.json'))  
           {  
                $current_data = file_get_contents('Json/data_of_requests.json');  
                $array_data = json_decode($current_data, true);  
                $input = array(  
                     'name'               =>     $_POST['name'],  
                     'phone_number'               =>     $_POST['phone_number'],
                     'doctor_name'          =>     $_POST["doctor_name"],  
                     'username'     =>     $_POST["username"],  
                     'gender'     =>     $_POST["gender"],  
                     'dob'     =>     $_POST["dob"] ,
                     'visiting_date'     =>     $_POST["visiting_date"],
                     'visiting_time'     =>     $_POST["visiting_time"] ,
                     'visiting_hospital'     =>     $_POST["visiting_hospital"] 
                    
                );  
                $array_data[] = $input;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('Json/data_of_requests.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }   
?>