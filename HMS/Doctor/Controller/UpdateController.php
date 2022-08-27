<?php 

//include("../Model/doctorsdb.php");

if (isset($_POST["close"])) {
    header("Location: ../View/Home.php");
}


if (isset($_POST["Update"])) {
   
   $Name=$_REQUEST["name"];
   $Username=$_REQUEST["userName"];
   $Email=$_REQUEST["email"];
   $Phone=$_REQUEST["phone"];
   $Password=$_REQUEST["password"];
   $Speciality=$_REQUEST["speciality"];

   $connection=new doctorsdb();
   $conobj=$connection->OpenCon();
   $userQuery=  $connection->Update($conobj,$Name,$Email,$_SESSION["Username"],$Password,$Phone,$Speciality);
   if($userQuery==true){
       header("location: ../View/UpdateProfile.php");
   }
   $connection->CloseCon($conobj);
   
   // header("Location: ../View/Home.php");
}


?>