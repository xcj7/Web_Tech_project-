<?php
writeToJson_delete() ;
  function writeToJson_delete() 
  {
    if(file_exists('json/delete_data.json'))  
      {   

        $current_data = file_get_contents('json/delete_data.json');  
        $array_data = json_decode($current_data, true);  
        $extra = array(  
          'name'               =>     $_POST['name'],  
          'phone_number'               =>     $_POST['phone_number'],
          'e-mail'          =>     $_POST["email"],  
          'username'     =>     $_POST["username"],  
          'gender'     =>     $_POST["gender"],  
          'dob'     =>     $_POST["dob"] ,
          'visiting_date'     =>     $_POST["visiting_date"],
          'visiting_time'     =>     $_POST["visiting_time"] ,
          'visiting_hospital'     =>     $_POST["visiting_hospital"] 
      );  
        $array_data[] = $extra;  
        $final_data = json_encode($array_data);  
        if(file_put_contents('json/delete_data.json', $final_data))  
        {  
          echo "Information Updated Successfully";
        } 
      } 
      else  
      {  
        echo "JSON File not exits";  
      }
  }

function readFromJson($file) 
  {
    $data = file_get_contents($file);
    $data = json_decode($data, true);
    return $data;
  }


?>