
<?php 
/*	include('header.php');
	include_once('header.php');
	require('header.php');*/
	
	include_once("Nav2.php");
	session_start();
	if(empty($_SESSION["Username"])){
		header("Location: PatientSignIn.php");
	  }
	include("../Model/Cabin.php");
	
	
?>

<!DOCTYPE html>
<html>
<head>

	<style>
		body{
			background-color:#66ffff;
		}
		</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User list</title>
</head>
<body>
		
		<br><center>
		<table border="2">
			<tr>
				<td>Id</td>
				<td>Username</td>
				<th>DATE</th>
				<th>CABIN NO</th>
			</tr>
			<?php 
				$connection = new cabindb();
				$conobj=$connection->OpenCon();
				$userQuery=$connection->AllBookingCabin($conobj);

				if ($userQuery->num_rows > 0) {

					// output data of each row
					while($row = $userQuery->fetch_assoc()) {
						echo "<tr>";
						echo "<td>".$row["Id"]."</td>";
						echo "<td>".$row["Username"]."</td>";
						echo "<td>".$row["Date"]."</td>";
						echo "<td>".$row["CabinNo"]."</td>";
						echo "</tr>";

	}
}

		echo "</table>";
		?>
	</center>
</body>
</html>