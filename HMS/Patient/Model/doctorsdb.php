<?php
class doctorsdb{
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "hms";

 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 return $conn;
 }


function GetDoctor($conn,$Speciality){
    $result = $conn->query("SELECT * FROM  doctors where Speciality like '$Speciality'");
    return $result;
}

function GetAppointment($conn,$Username,$Day,$Time,$Date,$Speciality){
    $check=false;
    $stmt=$conn->prepare("INSERT INTO appointment (Username,Day,Time,Date,Speciality) VALUES(?,?,?,?,?)"); 
    $stmt->bind_param("sssss",$_SESSION["Username"],$Day,$Time,$Date,$Speciality);
    if($stmt->execute())
    {
        echo "Appointment Fixed!!";
        $check=true;
    }
    else 
    {

        echo $stmt->error;
    }
    $stmt->close();
    return $check;
}


function AllAppointment($conn){
    $result = $conn->query("SELECT * FROM  appointment");
    return $result;
}

function TestPriceList($conn){
    $result = $conn->query("SELECT * FROM  testprice");
    return $result;
}

function CloseCon($conn)
 {
    $conn -> close();
 }


}
?>