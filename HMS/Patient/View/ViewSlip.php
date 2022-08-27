<?php 
	session_start();
	include_once("Nav2.php");

	include("../Model/Medicinepurdb.php");
	
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
				<th>Medicine1 Name</th>
				<th>Medicine2 Name</th>
				<th>Medicine3 Name</th>
				<th>Price Medicine1</th>
				<th>Price Medicine2</th>
				<th>Price Medicine3</th>
				<th>Total Price</th>
				<th>PayMent Method</th>
			</tr>

			<?php 
					$connection = new Medicinedb();
					$conobj=$connection->OpenCon();
					$userQuery=$connection->MedicineSlip($conobj,$_SESSION["Username"]);

					if ($userQuery->num_rows > 0) {

						// output data of each row
						while($row = $userQuery->fetch_assoc()) {
							echo "<tr>";
							echo "<td>".$row["Medicine1"]."</td>";
							echo "<td>".$row["Medicine2"]."</td>";
							echo "<td>".$row["Medicine3"]."</td>";
							echo "<td>".$row["Price1"]."</td>";
							echo "<td>".$row["Price2"]."</td>";
							echo "<td>".$row["Price3"]."</td>";
							echo "<td>".$row["TotalPrice"]."</td>";
							echo "<td>".$row["PaymentMethod"]."</td>";
							echo "</tr>";

						}
					}


?>




		</table>
	</center>

</body>
</html>
