<?php 
/*	include('header.php');
	include_once('header.php');
	require('header.php');*/

	include_once("Nav2.php");
	session_start();
	if(empty($_SESSION["Username"])){
		header("Location: PatientSignIn.php");
	  }
	//require_once('../controller/header.php');

	include("../Model/doctorsdb.php");
?>

<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User list</title>
	<link rel="stylesheet" href="../controller/asset/css/design3.css">
	<style>
		body{
			background-color:#66ffff;
		}
	</style>
</head>
<body>
		
		<br><center>
		<table border="2">
			<tr>
			<th>User</th>
				<th>Day</th>
				<th>Time</th>
				<th>Date</th>
				<th>Speciality</th>
			</tr>
			<?php 
$connection = new doctorsdb();
$conobj=$connection->OpenCon();
$userQuery=$connection->AllAppointment($conobj);

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
		echo "<tr>";
		echo "<td>".$row["Username"]."</td>";
		echo "<td>".$row["Day"]."</td>";
		echo "<td>".$row["Time"]."</td>";
		echo "<td>".$row["Date"]."</td>";
		echo "<td>".$row["Speciality"]."</td>";
		echo "</tr>";

	}
}


?>



		</table>
	</center>
	
</body>
</html>
