<?php 
include("../Model/Adminsdb.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
     
    $Name=$_REQUEST["name"];
    $Age=$_REQUEST["age"];
    $Phone=$_REQUEST["phone"];
    $Speciality="";

if($Name !=null & $Age!=null & $Phone!=null){
    if(isset($_REQUEST['specialist'])){
        $Speciality=$_REQUEST['specialist'];
    

    $connection=new Adminsdb();
    $conobj=$connection->OpenCon();
    $userQuery= $connection->AddPatient($conobj,$Name,$Age,$Phone,$Speciality);
    if($userQuery==true){
        header("location: ../View/PatientsList.php");
    }
    $connection->CloseCon($conobj);

    }
    
}



}



?>