<?php
include("../Model/Adminsdb.php");
        $id=$_REQUEST["id"];

        $connection=new Adminsdb();
        $conobj=$connection->OpenCon();
        $result=$connection->Delete($conobj,$id,"Notice");
        header("Location: ../View/NoticeBoard.php");
 
      



?>