<?php
session_start();
include("../Model/doctorsdb.php");
if (isset($_POST["submit"])) {
  
$target_File="../Asset/Photo/".$_FILES["fileupload"]["name"];
if(move_uploaded_file($_FILES["fileupload"]["tmp_name"],$target_File))
{
    echo "You have uploadede a new file";
    $connection=new doctorsdb();
    $conobj=$connection->OpenCon();
    $userQuery=  $connection->ChangePhoto($conobj,$_SESSION["Username"],$target_File);
    if($userQuery==true){
        echo "<script>alert('Password Changed Successfully!!');</script>";
        header("location: ../View/home.php");
    }
    else{
        echo "<script>alert('Current Password Not Matching!!');</script>";
    }
    $connection->CloseCon($conobj);
}
}

?>