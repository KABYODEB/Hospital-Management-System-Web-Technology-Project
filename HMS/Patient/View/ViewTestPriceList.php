<?php 
include_once("Nav2.php");
include("../Model/doctorsdb.php");
	if(!isset($_COOKIE['status'])){
		//header('location: PatientSignIn.html');
	}


?>

<html>
<head>
	 <style>
body {
  background-image: url('../image/23.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}

</style>
<body>


<b><center>	 <p style="color:green;font-size:50px;">Welcome to Biochemical Page</p> 
	          <p style="color:green;font-size:30px;">Here the Test List price</p> </br></br>  


</Center></b><br>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Test Price </title>
	<center>
	<table border="5px">
		<tr>
			<td>ID no </td>
			<td>Test Price</td>
			<td>Amount(in Taka)</td>
		</tr>
		<?php
			$connection = new doctorsdb();
			$conobj=$connection->OpenCon();
			$userQuery=$connection->TestPriceList($conobj);
			
			if ($userQuery->num_rows > 0) {
			
				// output data of each row
				while($row = $userQuery->fetch_assoc()) {
					echo "<tr>";
					echo "<td>".$row["Id"]."</td>";
					echo "<td>".$row["TestName"]."</td>";
					echo "<td>".$row["Price"]."</td>";
					echo "</tr>";
				}
			
			}

?>

	</table>
</center>




</html>