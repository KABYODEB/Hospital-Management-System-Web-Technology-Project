<?php 
include("../Model/updatedb.php");
  session_start();

if($_SERVER['REQUEST_METHOD']=="POST")
{
    
    $name = $_REQUEST['name'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $Age=$_REQUEST['age'];
    $Mobile=$_REQUEST['contact'];
    $gender="";
    

    if($name != "" && $password!="" && $Age!="" && $Mobile!=""){

      if(isset($_REQUEST['gender'])){
        $gender=$_REQUEST['gender'];
      }
      $connection = new updatedb();
      $conobj=$connection->OpenCon();
      $gender="";
      if(isset($_POST["gender"])){
          $gender=$_POST["gender"];
      }

    $userQuery=$connection->UpdateUser($conobj,$name,$username,$password,$Age,$Mobile,$gender);
    if($userQuery==TRUE)
    {
        $_SESSION["Name"]=$_POST["name"];
        header("location: ../View/UpdateProfile.php");
        echo "update successful"; 
    }
else
{
    echo "could not update";    
    
}
$connection->CloseCon($conobj);
  



        // $file = fopen('../Model/PatientInfo.txt', 'r+','a');
        // while (!feof($file)) {
        //         $line = fgets($file);
        //         $user = explode('|', $line);
        //         $user=trim($user[0]);
       
        //         $data =$name."|".$password."|".$confirmPassword."|".$Age."|".$mobileno."|".$Gender."\r\n";
        //            fwrite($file, $data);

        //         }
        
    }


}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Page</title>
<style>
body {
  background-image: url('../image/30.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
</head>
<body>
</head>
<body>


<b><center>  <p style="color:green;font-size:50px;">Successfully Update</p> 
              <a href ="../controller/Logout.php">  <p style="color:;font-size:25px;">Logout </a>


</Center></b><br>
<center>