<?php 
    session_start();
    include("../Model/doctorsdb.php");
    $Id=$_REQUEST["id"];

    $connection = new doctorsdb();
    $conobj=$connection->OpenCon();
    $userQuery=$connection->UpdateSalary($conobj,$_SESSION["Username"],$Id);

    header("Location: ../View/CheckSalary.php");



?>