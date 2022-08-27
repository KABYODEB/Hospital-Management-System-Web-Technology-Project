<?php
class updatedb{
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "hms";

 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 return $conn;
 }

 function UpdateUser($conn,$Name,$Username,$Password,$Age,$Mobile,$Gender)
{
    $sql = "UPDATE patients SET Name='$Name',Gender='$Gender',Mobile='$Mobile',Age='$Age',Password='$Password' WHERE Username='$Username'";
    if ($conn->query($sql) === TRUE) {
      
       $result= TRUE;
   } 
   else {
       $result= FALSE ;
       
   }
   return  $result;
}

function ShowData($conn,$User)
{
    $result = $conn->query("SELECT * FROM patients WHERE Username='". $User."' AND Username='". $User."'");
    return $result;
}

function CloseCon($conn)
 {
    $conn -> close();
 }

}
?>