<?php 
session_start();
include("../Model/complaindb.php");

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $Title = $_REQUEST['title'];
    $Complain = $_REQUEST['complain'];


    if($Title !=null & $Complain != null){

        $connection=new complaindb();
		$conobj=$connection->OpenCon();
		$userQuery=  $connection->Complain($conobj,$_SESSION["Username"],$Title,$Complain);
		if($userQuery==true){
			header("location: ../View/PatientHome.php");
		}
		$connection->CloseCon($conobj);
    }
    

}


?>