
<?php
	//require_once('../controller/header.php');
  session_start();
  include_once("Nav2.php");

  if(empty($_SESSION["Username"])){
    header("Location: PatientSignIn.php");
  }
	
?>

<!DOCTYPE html>
<html>
<head>

	<title>PHome Page</title>
<style>
body {
  background-image: url('../image/15.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
</head>
<body>
</head>
<body>


<b><center>	 <p style="color:green;font-size:50px;">Welcome to Hampered Hospital</p> 
	          <p style="color:green;font-size:30px;">Patient Dashboard</p>  


</Center></b><br>
<center>

<table border="5px" style="background-color:#79cafc;color:black">
	<tr>
              <td> <b> 
                <a href="UpdateProfile.php"> 1.Update Profile </a> <br> </br><br>
               <a href="TestPriceSearch.php"> Search Test Price </a><br> </br><br>
               <a href="AddComplain.php"> Complain</a>
           
               <td> <b> <a href="FileUpload.php"> 2.Upload Your Previous Prescription </a></br><br>
              <b>  3.Choose Depertment</br><br>
              <pre><b>
                <a href= "ChildSpecialist.php">A.Child </a> <br><br>
                <a href="MedicineSpecialist.php">B.Medicine </a> <br><br>
                <a href="HeartSpecialist.php">C.Heart </a> <br><br>
                <a href="EyeSpecialist.php">D.Eye </a> <br><br></pre></b>
              <b><a href="ViewTestPriceList.php"> 4.View Test Price </a> <br><br>
              <b><a href="BookHospitalBed.php"> 5.Book Hospital Bed </a> <br><br>
              <b><a href="PurchaseMedicine.php"> 6.Purchase Medicine</a> <br><br>
</td>
</tr>

</table>
</Center>
	

</head>


</body>
</html>

