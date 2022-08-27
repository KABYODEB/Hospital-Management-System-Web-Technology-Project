<?php 
include("../Model/patientdb.php");

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    

   if ($username == null || $password == null ) {
        echo "invalid username/password <br>";
    }
    else{
        
        $connection=new patientdb();
        $conobj=$connection->OpenCon();
        $result=$connection->Login($conobj,$username,$password);
        date_default_timezone_set('Asia/Dhaka'); 
        $DateAndTime2 = date('m-d-Y h:i:s a', time());  
        echo "The current date and time in Toronto are $DateAndTime2.";

        if ($result->num_rows > 0)
        {
           while($row = $result->fetch_assoc())
           {
           $_SESSION['Name']= $row["Name"];
           $_SESSION["Username"]=$row["Username"];
           $_SESSION['Mobile']=$row["Mobile"];
           }
           $formdata = array(
            'Name'=> $_SESSION["Username"],
            'Logged_In_At'=>"$DateAndTime2",
         );


           $existingdata = file_get_contents('../Model/data.json');
           $tempJSONdata = json_decode($existingdata);
           $tempJSONdata[] =$formdata;
           $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
           
           if(file_put_contents("../Model/data.json", $jsondata)) {
                echo "Data successfully saved <br>";
            }
           else 
                echo "no data saved";
    

        }
      $connection->CloseCon($conobj);
    }
}




?>
