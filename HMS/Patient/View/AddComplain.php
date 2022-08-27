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


<b><center>	 <p style="color:green;font-size:50px;">If You Have Any Complain, Please Send Us</p> 



</Center></b><br>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Complain </title>
	<form action="../controller/Complaincheck.php" method="post" enctype="">
	<center>
        <table>
        	<tr>
        		<td>Title</td>
        		<td><input type="text" name="title" value=""></td>
        	</tr>
        	<tr>
        		<td>Complain </td>
        		<td><input type="text" name="complain" value=""></td>
        	</tr>
        	<tr>
        		<td></td>
        		<td><input type="submit" name="" value="Send Now"><br>
        			
        			</td>
        		</tr>
        </table></center>
	
</form>


</head>
<body>

</body>
</html>