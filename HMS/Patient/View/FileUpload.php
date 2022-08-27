
<?php
include_once("Nav2.php");
session_start();
if(empty($_SESSION["Username"])){
	header("Location: PatientSignIn.php");
  }
	//require_once('../controller/header.php');
?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>File upload</title>
</head>	
<style>
body {
  /* background-image: url('../image/30.jpg'); */
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
</head>
<body>
</head>
<body>


<b><center>	 <p style="color:green;font-size:50px;">Upload Your Prescription Here</p> 
	          


</Center></b><br>
<center>
<body>
	<form method="post" action="../controller/FileUploadCheck.php" enctype="multipart/form-data">
		Image: <input type="file" name="fileupload" value="">
		<input type="submit" name="submit" value="upload">
	</form>
</body>
</html>