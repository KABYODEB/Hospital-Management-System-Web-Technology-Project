<?php 
include("../Model/patientdb.php");
   $err=false;
    if($_SERVER['REQUEST_METHOD']=="POST")
    {

   $Name = $_REQUEST['name'];
	$Username = $_REQUEST['username'];
	$Password = $_REQUEST['password'];
	$confirmPassword=$_REQUEST['Cpassword'];
	$Age=$_REQUEST['age'];
	$Mobile=$_REQUEST['contact'];
	$Gender="";

	if ($Name == null || $Password == null || $confirmPassword==null || $Age == null || $Mobile == null)
	 {
		echo "<center><b><h1>Missing Information</h1></b></center> ";
		$err=true;
	}
	if(isset($_REQUEST['gender'])){
		$Gender=$_REQUEST['gender'];
		$err=false;
	}
	if (strlen($Password)<6){
		echo "Password Must Contain 6 Character";
		$err=true;
	}
	else{
		$err=false;
	}
	if ($Password != $confirmPassword){
		echo "Password and Confirm Password doesn't Match";
		$err=true;
	}
	
	
	else {
		$err=false;
	}
	// else{
	// 	$data = $name."|".$password."|".$confirmPassword."|".$Age."|".$mobileno."|".$Gender."\r\n";
	// 	fwrite($file, $data);
	// 	header('location:../View/PatientSignUp.html');
	// }

	if($err==false){
		$connection=new patientdb();
		$conobj=$connection->OpenCon();
		$userQuery=  $connection->Registration($conobj,$Name,$Username,$Password,$Age,$Mobile,$Gender);
		if($userQuery==true){
			header("location: ../View/PatientSignIn.php");
		}
		$connection->CloseCon($conobj);
	}

}
?>
<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Check Validity </title>
       <p style="color:green;font-size:30px;"><a href="../View/PatientSignUp.html">Back</a></p>
</head>
<body>

</body>
</html> -->