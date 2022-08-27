<?php
include("../Model/Adminsdb.php");
        $id=$_REQUEST["id"];

        $connection=new Adminsdb();
        $conobj=$connection->OpenCon();
        $result=$connection->DeleteInvoice($conobj,$id,"invoice");
        header("Location: ../View/AllInvoice.php");
 
      



?>