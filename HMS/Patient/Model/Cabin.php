<?php
class cabindb{
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "hms";

 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 return $conn;
 }


 function BookCabin($conn,$Username,$Date,$Cabin){
    $check=false;
    $stmt=$conn->prepare("INSERT INTO cabinbooking (Username,Date,CabinNo) VALUES(?,?,?)"); 
    $stmt->bind_param("sss",$_SESSION["Username"],$Date,$Cabin);
    if($stmt->execute())
    {
        echo "Cabin Booking Confirmed!!";
        $check=true;
    }
    else 
    {

        echo $stmt->error;
    }
    $stmt->close();
    return $check;
}
function AllBookingCabin($conn){
    $result = $conn->query("SELECT * FROM  cabinbooking");
    return $result;
}
function CloseCon($conn)
 {
    $conn -> close();
 }

}
?>
