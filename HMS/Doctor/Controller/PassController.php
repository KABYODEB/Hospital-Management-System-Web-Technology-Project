<?php 
session_start();
include("../Model/doctorsdb.php");
$Err="";
if (isset($_POST["submit"])) {
   
    $Prev=$_REQUEST["currpass"];
    $New=$_REQUEST["newpass"];
    $Repeat=$_REQUEST["reapetpass"];

    if($New != $Repeat | $New==""){
        $Err="New Password and Repeated Password Doesn't match";
    }

    else{
        $connection=new doctorsdb();
        $conobj=$connection->OpenCon();
        $userQuery=  $connection->ChangePass($conobj,$Prev,$New,$_SESSION["Username"]);
        if($userQuery==true){
            echo "<script>alert('Password Changed Successfully!!');</script>";
            //header("location: ../View/UpdateProfile.php");
        }
        else{
            echo "<script>alert('Current Password Not Matching!!');</script>";
        }
        $connection->CloseCon($conobj);
    }
}


?>