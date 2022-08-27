<?php
include "../Model/patientdb.php";

$Username=$_POST["Username"];

if($Username=="")
{
    echo "Try new username";
}
else
{

    $connection=new patientdb();
    $conobj=$connection->OpenCon();
    $result=$connection->CheckUsername($conobj,$Username);

    if ($result->num_rows > 0)
    {
       echo "Username Already Used";
    }

    else{
    echo "Unique Username";
    }
    $connection->CloseCon($conobj);
}




?>