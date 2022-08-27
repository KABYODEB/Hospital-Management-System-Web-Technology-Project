
<?php
include_once("Nav2.php");
	//require_once('../controller/header.php');
	$id=$_REQUEST["ID"];
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
  /* background-image: url('../image/19.jpg'); */
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}

</style>
<body>


<b><center>	 <p style="color:black;font-size:50px;">Welcome to Fixed Schedule Page</p> 
	          <p style="color:black;font-size:30px;">Please Confirm your schedule Schedule</p> </br></br>  


</Center></b><br>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fixed Schedule</title>
	<form action="../controller/AppointmentCheck.php?id=<?php echo $id;?>" method="post" enctype="">
		<center>
		
        <table>
        	<tr>
        		<td>Day</td>
        		<td><input type="text" name="day" value=""></td>
        	</tr>
        	<tr>
        		<td>Time </td>
        		<td><input type="text" name="time" value=""></td>
        	</tr>
        	<tr>
        		<td>Date</td>
        		<td><input type="date" name="date" value=""></td>
        	</tr>
        	<tr>
        		<td></td>
        		<td><input type="submit" name="" value="submit"><br>
        			 <a href="AppointmentList.php">Please View already fixed Scedule First</a>
        			</td>
        		</tr>
        </table>
    </center>
   
	
</form>


</head>
<body>

</body>
</html>
