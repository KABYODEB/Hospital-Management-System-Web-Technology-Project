
<?php
include_once("Nav2.php");
include("../Model/doctorsdb.php");
session_start();
if(empty($_SESSION["Username"])){
	header("Location: PatientSignIn.php");
  }

$Name=$Degree=$Shedule="";

$connection = new doctorsdb();
$conobj=$connection->OpenCon();
$userQuery=$connection->GetDoctor($conobj,"Heart");

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
		$Name=$row["Name"];
		$Degree=$row["Degree"];
		$Speciality=$row["Speciality"];
	}
}

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Child Specialist</title>

	<style>
body {
  background-image: url('../image/16.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
</head>
<body>
</head>
<body>


<b><center>	 <p style="color:green;font-size:50px;">Welcome to Doctor Page</p> 
	          <p style="color:green;font-size:30px;">Here The child Specialist</p> </br></br>  


</Center></b><br>
	<center>
	<table border="3px">
		<tr>
			<td>Name</td>
			<td>Degree</td>
			<td>Speciality</td>
			<td>schedule</td>
		</tr>

		<tr>
			<td><?php echo $Name; ?></td>
			<td><?php echo $Degree; ?></td>
			<td><?php echo $Speciality; ?></td>
			<td><a href="Appointment.php?id=3">View Appiontment</a></td>
		</tr>
	</table>
</center>


</head>
<body>

</body>
</html>