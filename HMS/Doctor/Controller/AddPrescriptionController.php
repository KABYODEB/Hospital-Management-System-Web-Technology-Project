

<?php

if (isset($_POST["submit"])) {

    $Name=$_REQUEST["name"];
    $Age=$_REQUEST["age"];
    $Medicine=$_REQUEST["medicine"];
    $Speciality=$_REQUEST["speciality"];

    $connection = new doctorsdb();
    $conobj=$connection->OpenCon();
    $userQuery=$connection->AddPrescription($conobj,$_SESSION["Username"],$Name,$Age,$Medicine,$Speciality);
    //header("Location: ../View/Appointment.php");


}


?>