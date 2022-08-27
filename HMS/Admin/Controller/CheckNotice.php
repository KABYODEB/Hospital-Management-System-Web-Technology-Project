<?php
include("../Model/Adminsdb.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $title=$_REQUEST["title"];
    $body=$_REQUEST["body"];

    if($title !=null && $body!=null){

        $connection=new Adminsdb();
        $conobj=$connection->OpenCon();
        $userQuery=  $connection->AddNotice($conobj,$title,$body);
        if($userQuery==true){
            header("location: ../View/NoticeBoard.php");
        }
        $connection->CloseCon($conobj);
    }



}
   



?>