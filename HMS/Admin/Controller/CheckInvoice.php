<?php
include("../Model/Adminsdb.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $Name=$_REQUEST["name"];
    $Test=$_REQUEST["test"];
    $Doctor=$_REQUEST["doctor"];  
    
    if($Name !=null & $Test  !=null & $Doctor !=null){
        $T1 = floatval($Test);
		$T2 = floatval($Doctor);
		$Total=$T1+$T2;
        $connection=new Adminsdb();
        $conobj=$connection->OpenCon();
        $userQuery=  $connection->AddInvoice($conobj,$Name,$Test,$Doctor,$Total);
        if($userQuery==true){
            //header("location: ../View/NoticeBoard.php");
        }
        $connection->CloseCon($conobj);
    }

}



?>