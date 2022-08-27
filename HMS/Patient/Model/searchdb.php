<?php
class searchdb{
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "hms";

 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 return $conn;
 }

 function Search($conn,$Name)
 {
     $result = $conn->query("SELECT TestName FROM testprice WHERE TestName like '%".$Name."%' ");
     return $result;
 }
 function CloseCon($conn)
 {
    $conn -> close();
 }

}
?>