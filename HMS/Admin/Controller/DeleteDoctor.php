<?php
include("../Model/Adminsdb.php");
        $id=$_REQUEST["id"];

        $connection=new Adminsdb();
        $conobj=$connection->OpenCon();
        $result=$connection->Delete($conobj,$id,"doctors_reg");
        header("Location: ../View/DoctorsList.php");
 
      



?>