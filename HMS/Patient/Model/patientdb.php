<?php
class patientdb{
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "hms";

 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 return $conn;
 }

 function Registration($conn,$Name,$Username,$Password,$Age,$Mobile,$Gender)
 {
    $check=false;
    $stmt=$conn->prepare("INSERT INTO patients (Name,Username,Password,Age,Mobile,Gender) VALUES(?,?,?,?,?,?)"); 
    $stmt->bind_param("ssssss",$Name,$Username,$Password,$Age,$Mobile,$Gender);
    if($stmt->execute())
    {
        echo "User Added Successfully!!";
        $check=true;
    }
    else 
    {
        echo "Already have an account!!!<br>";
        echo $stmt->error;
    }
    $stmt->close();
    return $check;
  
 }



 function Login($conn,$Username,$Password)
 {
    $result = $conn->query("SELECT * FROM patients WHERE Username='". $Username."' AND Password='". $Password."'");

        if ($result->num_rows > 0)
        {
            echo "Login Successful <br>";
        }
        else {
        echo "Login Failed !<br>";
        }
    return $result;
}



function CheckUsername($conn,$User)
{
    $result = $conn->query("SELECT * FROM patients WHERE Username like '".$User."' ");
    return $result;
}

function CheckPhone($conn,$Phone)
{
    $result = $conn->query("SELECT * FROM patients WHERE Phone like '".$Phone."' ");
    return $result;
}




function AllPatients($conn)
{
    $result = $conn->query("SELECT * FROM patients");
    return $result;
}
//
 

function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
return $result;
 }

function CloseCon($conn)
 {
    $conn -> close();
 }

}
?>