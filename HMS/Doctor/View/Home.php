<?php 
session_start();
include("../Model/doctorsdb.php");

$connection = new doctorsdb();
$conobj=$connection->OpenCon();
$userQuery=$connection->ShowData($conobj,$_SESSION["Username"]);

if ($userQuery->num_rows > 0) {
    while($row = $userQuery->fetch_assoc()) {
      $Image=$row["Photo"];
  } 
}


include("Navigation.php");
?>

<html>
    <head>
    <link rel="stylesheet" href="../asset/css/design3.css">
        <style>
fieldset {

  background: #ffb3b3;
  border-radius:10px;
}
        </style>
        
    </head>
    <body style="background-color:#a3dcf1;">
        <center><h1>Doctors Profile</h1>
        <h2><?php echo $_SESSION["Name"];?></h2>
    
    <img src="<?php echo $Image;?>" height="200" width="200" style="border-radius: 60%;">
    
    </center>

        <table>
            <center>
            <tr>
                <th>
                    <fieldset>
                        <legend>
                            Personal
                        </legend>
                        <h3><a href="Profile.php">Check Profile</a></h3>
                        <h3><a href="UpdatePhoto.php">Update Photo</a></h3>
                        <h3><a href="ChangePass.php">Change Password</a></h3>
                        <h3><a href="UpdateProfile.php">Edit Profile Profile</a></h3>
                        <a href="../Controller/Logout.php">Logouts</a>
                        
                       
                    </fieldset>
                </th>
                <th>
                    <fieldset>
                    <legend> Salary</legend>
                    <h3><a href="CheckSalary.php">Check Salary</a></h3>
                    <h3><a href="#">Salary Withdraw</a></h3>
                    </fieldset>
                </th>
                <th>
                    <fieldset>
                    <legend> Patient</legend>
                    <h3><a href="AddAppointment.php">Add Appointment</a></h3>
                    <h3><a href="Appointment.php">Manage Appointment</a></h3>
                    <h3><a href="PatientList.php">Show patient list </a></h3>
                    <h3><a href="Prescription.php">Create Prescription </a></h3>
                    <h3><a href="PrescriptionHistory.php">View Prescription History </a></h3>
                    <h3><a href="SearchPatient.php">Search Patient</a></h3>
                   
                    </fieldset>
                </th>
            </tr>
            </center>
        </table>
    </body>
</html>