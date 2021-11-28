<?php 

require_once 'db_connect.php';

function addData($data){
    $conn = db_conn();
  
    // $selectQuery = "INSERT INTO `doctor`(`docid`, `dname`, `demail`, `ddegree`, `dusername`, `dpassword`,`dspec`, `dcomment`, `daddress`, `dphone`, `dnationality`, `dnidno`,`dgender`)  
    //  VALUES (:registrationid ,:name ,:email , :username , :password, :specialist , :location , :phone_number,:gender)";
    
    $selectQuery = "INSERT INTO `doctor`(`docid`, `dname`, `demail`, `dusername`, `dpassword`,`dspec`, `daddress`, `dphone`,`dgender`,`dblood_group`)  
    VALUES (:registrationid ,:name ,:email , :username , :password, :specialist , :location , :phone_number,:gender,:blood_group)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $_POST['name'],
            ':registrationid' => $_POST['registrationid'],
            ':email' => $_POST['email'],
           
            ':phone_number' => $_POST['phone_number'],
            ':location' => $_POST['location'],
            ':specialist' => $_POST['specialist'],
            ':gender' => $_POST['gender'],
            ':blood_group' => $_POST['blood_group'],
            ':username' => $_POST['username'],
             //':password' => $data,
            ':password' => $_POST['password']
            // ':shift' => $_POST['shift'],
            // ':category' => $_POST['category'],
            
         //   ':dob' => $_POST['dob']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function showAllData(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `doctor` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function getID($username,$password)
{
    $conn = db_conn();
    $sql = "SELECT * FROM `doctor` WHERE `dusername`= '$username'  and `dpassword` = '$password' ;";
    //SELECT * FROM `doctor` WHERE `dusername`= 'hassan_tushar' and `dpassword` = '#12345678';

          $result = $conn->query($sql);

          //$fetch = $result->fetch_assoc();
    
    //$fetch = $result->fetch_array();
    if ($result->rowCount() > 0){
    $fetch = $result->fetch(); // returns a row .
    //echo " hoa jao plz";
    return $fetch;

    }
    else{
        return "";
    }
    
}



function updateData($id, $data){
    $conn = db_conn();
   // $selectQuery = "UPDATE `doctor` set `Name` = ?, `Email` = ?, `Mobile Number` = ?, `Address` = ?, `Shift` = ? where `ID` = ?";
    $selectQuery = "UPDATE `doctor` set `docid` = ?, `dname` = ?, `demail` = ?, `dusername` = ?, `dpassword` = ?,`dspec` = ?, `daddress` = ?, `dphone` = ?,`dgender` = ?,`dblood_group`= ? where `did` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);


        $a=$data['docid'];
        $b=$data['dname'];
        $c=$data['demail'];
       
        $e=$data['dusername'];
        $f=$data['dpassword'];
        $g=$data['dspec'];
        $h=$data['daddress'];
        $i=$data['dphone'];
        $j= $data['dgender'];
        $k=$data['dblood_group'];
       // $l=;

        $stmt->execute([$a,$b, $c, $e, $f, $g, $h, $i, $j, $k, $id]);
    }catch(PDOException $es){
        echo $es->getMessage();
    }
    
   // $conn = null;
    return true;
}


// function updateData($id, $data){
//     $conn = db_conn();
//    // $selectQuery = "UPDATE `doctor` set `Name` = ?, `Email` = ?, `Mobile Number` = ?, `Address` = ?, `Shift` = ? where `ID` = ?";
//     $selectQuery = "UPDATE `doctor` set `docid` = ?, `dname` = ?, `demail` = ?, `dusername` = ?, `dpassword` = ?,`dspec` = ?, `daddress` = ?, `dphone` = ?,`dgender` = ?,`dblood_group`= ? where `did` = ?";
//     try{
//         $stmt = $conn->prepare($selectQuery);
//         $stmt->execute([$data['registrationid'], $data['name'], $data['email'] $data['username'], $data['password'],$data['specialist'],$data['location'],$data['phone_number'], $data['gender'],$data['blood_group'], $id]);
//     }catch(PDOException $e){
//         echo $e->getMessage();
//     }
    
//    // $conn = null;
//     return true;
// }



function updatePassword($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `doctor` set `dpassword` = ? where `did` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data, $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function updatePicture($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `doctor` set `dimage` = ? where `did` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data, $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteinfo($id){
    $conn = db_conn();
    $selectQuery = "DELETE FROM `doctor` WHERE `did` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

function showData($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `doctor` where `did` = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    return $data;
}



function checkEmail($email){
    $flag=false;
	$conn = db_conn();
	$selectQuery = "SELECT `demail` FROM `doctor` ";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $data = $stmt->fetch(PDO::FETCH_ASSOC);


for($i=0;$i<3;$i++)
{
    if($email==$data[i])
    {
        $flag=true;
        

    }
}
    
return $flag;
   
}

// function searchData($name){
//     $conn = db_conn();
//     $selectQuery = "SELECT * FROM `doctor` WHERE `dname` = ?";
//      try {
//         $stmt = $conn->prepare($selectQuery);
//         $stmt->execute([$name]);
//     } catch (PDOException $e) {
//         echo $e->getMessage();
//     }
//     $data = $stmt->fetch(PDO::FETCH_ASSOC);
//     return $data;
// }
?>