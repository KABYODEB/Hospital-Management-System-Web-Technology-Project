<?php
include_once("Nav2.php");
		$id=$_REQUEST["id"];
		
		session_start();
		if(empty($_SESSION["Username"])){
			header("Location: PatientSignIn.php");
		  }
?>

<!DOCTYPE html>
<html>
<head>
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
	<table border="10px">
		<tr>
			<td>Day</td>
			<td>Time</td>
			<td>fixed up</td>
		</tr>
		<tr>
			<td>Sunday</td>
			<td>8am-2pm</td>
			<td><a href="FixedAppointment.php?ID=<?php echo $id;?> ">Fixed Schedule</a></td>
		</tr>
		<tr>
			<td>Monday</td>
			<td>8am-11am</td>
			<td><a href="FixedAppointment.php?ID=<?php echo $id;?> ">Fixed Schedule</a></td>
		</tr>
		<tr>
			<td>Tuesday</td>
			<td>8am-5pm</td>
			<td><a href="FixedAppointment.php?ID=<?php echo $id;?> ">Fixed Schedule</a></td>
		</tr>
		<tr>
			<td>Wedneshday</td>
			<td>off</td>
			<td><a href="FixedAppointment.php?ID=<?php echo $id;?> ">Fixed Schedule</a></td>
		</tr>
		<tr>
			<td>Thurshday</td>
			<td>off</td>
			<td><a href="FixedAppointment.php?ID=<?php echo $id;?> ">Fixed Schedule</a></td>
		</tr>
		<tr>
			<td>Saturday</td>
			<td>2pm-5pm</td>
			<td><a href="FixedAppointment.php?ID=<?php echo $id;?> ">Fixed Schedule</a></td>
		</tr>
	</table>
</center>
	

</head>
<body>

</body>
</html>