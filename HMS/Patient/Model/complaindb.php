<?php
class complaindb{
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "hms";

 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 return $conn;
 }

 function Complain($conn,$Username,$Title,$Complain)
 {
    $check=false;
    $stmt=$conn->prepare("INSERT INTO complain (Username,Title,Complain) VALUES(?,?,?)"); 
    $stmt->bind_param("sss",$Username,$Title,$Complain);
    if($stmt->execute())
    {
        echo "Complain Added Successfully!!";
        $check=true;
    }
    else 
    {
        echo $stmt->error;
    }
    $stmt->close();
    return $check;
  
 }
 function CloseCon($conn)
 {
    $conn -> close();
 }

}
?>