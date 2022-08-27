<?php 
    session_start();
    include("../Model/doctorsdb.php");
    $Id=$_REQUEST["id"];

    $connection = new doctorsdb();
    $conobj=$connection->OpenCon();
    $userQuery=$connection->UpdateAppointment($conobj,$Id);
    header("Location: ../View/Appointment.php");



?>