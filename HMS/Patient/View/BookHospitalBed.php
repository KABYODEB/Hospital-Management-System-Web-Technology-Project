<?php
	//require_once('../controller/header.php');
	include_once("Nav2.php");
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
  background-image: url('../image/24.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}

</style>
<body>


<b><center>	 <p style="color:green;font-size:50px;">Welcome to Booking Page</p> 
	          <p style="color:green;font-size:30px;">Please select your desired Cabin</p> </br></br>  


</Center></b><br>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Booked Hospital Bed</title>
	<form action="../controller/BooKcheck.php" method="post" enctype="">
	<center>
        <table>
        	<tr>
        		<td>DATE</td>
        		<td><input type="date" name="date" value=""></td>
        	</tr>
        	<tr>
        		<td>Cabin No </td>
        		<td><input type="text" name="cabin" value=""></td>
        	</tr>
        	<tr>
        		<td></td>
        		<td><input type="submit" name="" value="submit"><br>
        			 <a href="BookView.php">Please View already booked bed</a>
        			</td>
        		</tr>
        </table></center>
	
</form>


</head>
<body>

</body>
</html>