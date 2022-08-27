<?php 
session_start();
   include("../Model/doctorsdb.php");
    if($_SERVER['REQUEST_METHOD']=="POST")
    {

    $Day = $_REQUEST['day'];
	$Time = $_REQUEST['time'];
	$Date = $_REQUEST['date'];
	$id=$_REQUEST["id"];


	$val="";
	if($id==1){
		$val="Child";	
	}
	if($id==2){
		$val="Medicine";	
	}
	if($id==3){
		$val="Heart";	
	}
	if($id==4){
		$val="Eye";	
	}

	

	if ($Day== null || $Time == null || $Date == null)
	 {
		echo "invalid ";
	}
	else{

		$connection=new doctorsdb();
		$conobj=$connection->OpenCon();
		$userQuery=  $connection->GetAppointment($conobj,$_SESSION["Username"], $Day,$Time,$Date,$val);

		header("Location: ../View/AppointmentList.php");
	}

}

?>