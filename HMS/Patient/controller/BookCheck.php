<?php 
session_start();
include("../Model/cabin.php");
   
    if($_SERVER['REQUEST_METHOD']=="POST")
    {

    $DATE = $_REQUEST['date'];
	$Cabin_no = $_REQUEST['cabin'];
	

	

	if ($DATE== null || $Cabin_no == null)
	 {
		echo "invalid ";
	}else{


		$connection=new cabindb();
		$conobj=$connection->OpenCon();
		$userQuery=  $connection->BookCabin($conobj,$_SESSION["Username"],$DATE,$Cabin_no);
		if($userQuery==true){
			header('location:../view/BookView.php');
		}
		$connection->CloseCon($conobj);


		// $data = $DATE."|".$Cabin_no."|".$floor."\r\n";
		// $file = fopen('../Model/BookScedule.txt', 'a');
		// fwrite($file, $data);
		
		

	}

}

?>