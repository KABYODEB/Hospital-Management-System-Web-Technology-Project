<?php 
include("../Model/adminsdb.php");

if($_SERVER['REQUEST_METHOD']=="POST")
{
    
    $name = $_REQUEST['name'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $Email=$_REQUEST['email'];
    $Mobile=$_REQUEST['phone'];
    $gender="";
    

    if($name != "" && $password!=""  && $Mobile!=""){

      if(isset($_REQUEST['gender'])){
        $gender=$_REQUEST['gender'];
      }
      $connection = new adminsdb();
      $conobj=$connection->OpenCon();
      $gender="";
      if(isset($_POST["gender"])){
          $gender=$_POST["gender"];
      }
    $userQuery=$connection->UpdateUser($conobj,$name,$Email,$gender,$_SESSION["Username"],$password,$Mobile);
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
  
        
    }


}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHome Page</title>
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


