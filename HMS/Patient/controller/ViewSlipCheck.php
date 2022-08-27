<?php 
session_start();
   include('../Model/Medicinepurdb.php');
    if($_SERVER['REQUEST_METHOD']=="POST")
    {

    $M1 = $_REQUEST['medicine1'];
    $M2 = $_REQUEST['medicine2'];
    $M3 = $_REQUEST['medicine3'];
	$P1 = $_REQUEST['pmedicine1'];
	$P2 = $_REQUEST['pmedicine2'];
	$P3 = $_REQUEST['pmedicine3'];
	$PM="";

	

	if ($M1 == null || $M2 == null || $M3==null )
	 {
		echo "invalid ";
	}else{
		$T1 = floatval($P1);
		$T2 = floatval($P2);
		$T3 = floatval($P3);
		$TT=$T1+$T2+$T3;
		if(isset($_REQUEST['method'])){
			$PM=$_REQUEST['method'];
		}


		$connection=new Medicinedb();
		$conobj=$connection->OpenCon();
		$userQuery=  $connection->MedicinePurchase($conobj,$_SESSION["Username"],$M1,$P1,$M2,$P2,$M3,$P3,$TT,$PM);
		if($userQuery==true){
			header("location: ../View/ViewSlip.php");
		}


		// $data = $Medicine1_Name."|".$Medicine2_Name."|".$Medicine3_Name."|".$Price_Medicine1."|".$Price_Medicine2."|".$Price_Medicine3."|".$Total_price."|".$PayMent_Method."\r\n";
		// $file = fopen('../Model/MedicineInfo.txt', 'a');
		// fwrite($file, $data);
		// header('location:../View/PurchaseMedicine.php');

	}

}

?>