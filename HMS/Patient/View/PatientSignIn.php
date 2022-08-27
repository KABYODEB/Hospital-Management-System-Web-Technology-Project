<?php 
session_start();
//require_once "../Controller/functions.php";

include ("../controller/PatientLogCheck.php");

if(isset($_SESSION["Username"])){

  header("location: PatientHome.php");
}


?>


<!DOCTYPE html>
<html>
<head>
<script src="..\controller\LogValidation.js"></script>
	<style>
body {
  background-image: url('../image/27.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}

</style>
<body>
<?php  
include_once("Nav1.php");
?>

<b><center>	 <p style="color:black;font-size:50px;">Please Sign In</p> 
	          


</Center></b><br>
	<form action="" onsubmit="return Validation()" method="post" enctype="">
	
		<center>
        <table border="1px">
        	<tr>
        		<td>Username</td>
        		<td><input type="text" name="username" id="username" value=""></td> <td><p id="ErrUName"></p></td>
        	</tr>
        	<tr>
        		<td>Password</td>
        		<td><input type="text" name="password" id="password" value=""></td><td><p id="ErrPass"></p></td>
        	</tr>
        	<tr>
        		<td></td>
        		<td><input type="submit" name="" value="LogIn">
        			<a href="PatientSignUp.php">SignUp</a>
        			</td>
        		</tr>
        </table>
	</center>
</form>


</head>
<body>

</body>
</html>








