

<?php
if (isset($_POST["submit"])) {

    $Day=$_REQUEST["day"];
    $Time=$_REQUEST["time"];
    $Date=$_REQUEST["date"];
    $Speciality=$_REQUEST["speciality"];

    $connection = new doctorsdb();
    $conobj=$connection->OpenCon();
    $userQuery=$connection->AddAppointment($conobj,$_SESSION["Username"],$Day,$Time,$Date,$Speciality);
    header("Location: ../View/Appointment.php");


}


?>