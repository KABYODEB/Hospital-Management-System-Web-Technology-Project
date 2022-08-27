<?php 

//include("../Model/doctorsdb.php");

if (isset($_POST["close"])) {
    header("Location: ../View/Home.php");
}


if (isset($_POST["Update"])) {
    header("Location: ../View/UpdateProfile.php");
}


?>