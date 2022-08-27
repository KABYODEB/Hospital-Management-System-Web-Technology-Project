<?php
class Medicinedb{
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "hms";

 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 return $conn;
 }

 function MedicinePurchase($conn,$Username,$M1,$P1,$M2,$P2,$M3,$P3,$TP,$PM){
    $check=false;
    $stmt=$conn->prepare("INSERT INTO purchasemedicine (Username,Medicine1,Price1,Medicine2,Price2,Medicine3,Price3,TotalPrice,PaymentMethod) VALUES(?,?,?,?,?,?,?,?,?)"); 
    $stmt->bind_param("sssssssss",$Username,$M1,$P1,$M2,$P2,$M3,$P3,$TP,$PM);
    if($stmt->execute())
    {
        echo "Medicine Purchased Confirmed!!";
        $check=true;
    }
    else 
    {

        echo $stmt->error;
    }
    $stmt->close();
    return $check;
}


function MedicineSlip($conn,$Username){
    $result = $conn->query("SELECT * FROM  purchasemedicine where Username like '".$Username."'");
    return $result;
}


function CloseCon($conn)
 {
    $conn -> close();
 }

}


 ?>