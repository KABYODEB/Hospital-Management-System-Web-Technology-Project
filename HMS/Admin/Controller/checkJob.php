<?php
session_start();
include("../Model/Adminsdb.php");

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $name=$_REQUEST["name"];
    $details=$_REQUEST["details"];
    $vacancy=$_REQUEST["vacancy"];
    $salary=$_REQUEST["salary"];

    if($name!=null & $details!=null & $vacancy!=null & $salary!=null){

        $connection=new Adminsdb();
        $conobj=$connection->OpenCon();
        $userQuery=  $connection->AddJob($conobj,$_SESSION["Username"],$name,$details,$vacancy,$salary);
        if($userQuery==true){
            header("location: ../View/PostedJobs.php");
        }
        $connection->CloseCon($conobj);

    }


}




?>