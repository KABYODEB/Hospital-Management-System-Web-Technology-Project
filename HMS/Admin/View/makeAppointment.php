<?php
include_once("header.php");
		//$id=$_REQUEST["id"];
		
		session_start();
		if(empty($_SESSION["Username"])){
			header("Location: Login.php");
		  }
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../asset/css/design3.css">
	<style>
body {
  background-image: url('../image/18.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}

</style>
<body>


<b><center>	 <p style="color:green;font-size:50px;">Welcome to Doctor Appointment Page</p> 
	          <p style="color:green;font-size:30px;">Here The Schedule</p> </br></br>  


</Center></b><br>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Child Specialist</title>
	<center>
	<table border="1px" style="text-align:center">
	
		<tr>
			<td>SL</td>
			<td>Time</td>
			<td>Speciality</td>
		</tr>
		<tr>
			<td>1</td>
			<td>8am-2pm</td>
			<td><a href="../../patient/view/FixedAppointment.php?ID=1 ">Child</a></td>
		</tr>
		<tr>
			<td>2</td>
			<td>8am-11am</td>
			<td><a href="../../patient/view/FixedAppointment.php?ID=2 ">Medicine</a></td>
		</tr>
		<tr>
			<td>3</td>
			<td>8am-5pm</td>
			<td><a href="../../patient/view/FixedAppointment.php?ID=3">Heart</a></td>
		</tr>
		<tr>
			<td>4</td>
			<td>8am-5pm</td>
			<td><a href="../../patient/view/FixedAppointment.php?ID=4">Eye</a></td>
		</tr>
		
	</table>
</center>
	

</head>
<body>

</body>
</html>