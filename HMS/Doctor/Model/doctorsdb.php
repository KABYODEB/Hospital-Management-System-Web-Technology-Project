<?php
class doctorsdb{
function OpenCon()
 {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "hms";

        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
        return $conn;
 }

function AddDoctor($conn,$Name,$Email,$Gender,$Username,$Password,$Contact,$Speciality,$Path)
{
   $check=false;
   $stmt=$conn->prepare("INSERT INTO doctors_db (Name,Email,Gender,Username,Password,Contact,Speciality,Photo) VALUES(?,?,?,?,?,?,?,?)"); 
   $stmt->bind_param("ssssssss",$Name,$Email,$Gender,$Username,$Password,$Contact,$Speciality,$Path);
   if($stmt->execute())
   {
       echo "Doctor Added Successfully!!";
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
    $result = $conn->query("SELECT * FROM doctors_db WHERE Username='". $Username."' AND Password='". $Password."'");

        if ($result->num_rows > 0)
        {
            echo "Login Successful <br>";
        }
        else {
        echo "Login Failed !<br>";
        }
    return $result;
}

function UpdateAppointment($conobj,$Id)
{
    $sql = "delete from appointment WHERE Id='$Id'";
    if ($conobj->query($sql) === true) {
      
       $result= true;
   } 
   else {
       $result= false ;  
   }
   return  $conobj->query($sql);
}

function ShowData($conn,$User)
{
    $result = $conn->query("SELECT * FROM doctors_db WHERE Username='". $User."' AND Username='". $User."'");
    return $result;
}
function ShowAppointment($conn,$User)
{
    $result = $conn->query("SELECT * FROM appointment WHERE Username='". $User."' AND Username='". $User."'");
    return $result;
}

function Update($conobj,$Name,$Email,$Username,$Password,$Phone,$Speciality)
{
    $sql = "Update doctors_db SET Name='$Name',Contact='$Phone',Email='$Email',Password='$Password',Speciality='$Speciality' WHERE Username='$Username'";
    if ($conobj->query($sql) === TRUE) {
      
       $result= TRUE;
   } 
   else {
       $result= FALSE ;
       
   }
   return  $result;
}

function ChangePhoto($conobj,$Username,$Path)
{
    $sql = "Update doctors_db SET Photo='$Path' WHERE Username='$Username'";
    if ($conobj->query($sql) === true) {
      
       $result= true;
   } 
   else {
       $result= false ;
       
   }
   return  $conobj->query($sql);
}

function ChangePass($conobj,$Prev,$New,$User)
{
    $sql = "Update doctors_db SET password='$New' WHERE Password='$Prev' and Username='$User'";
    if ($conobj->query($sql) === true) {
      
       $result= true;
   } 
   else {
       $result= false ;
       
   }
   return  $conobj->query($sql);
}


function UpdateSalary($conobj,$Username,$Id)
{
    $sql = "Update salary SET Withdrawn='Withdrawn' WHERE Username='$Username' and Id='$Id'";
    if ($conobj->query($sql) === true) {
      
       $result= true;
   } 
   else {
       $result= false ;
       
   }
   return  $conobj->query($sql);
}


function ShowSalary($conn,$User)
{
    $result = $conn->query("SELECT * FROM salary WHERE Username='". $User."'");
    return $result;
}
function ShowPrescription($conn,$User)
{
    $result = $conn->query("SELECT * FROM prescription WHERE Doctor='". $User."'");
    return $result;
}
function AddPatient($conn,$Name,$Age,$Phone,$Speciality)
{
   $check=false;
   $stmt=$conn->prepare("INSERT INTO admittedpatient (PatientName,Age,Phone,Speciality) VALUES(?,?,?,?)"); 
   $stmt->bind_param("ssss",$Name,$Age,$Phone,$Speciality);
   if($stmt->execute())
   {
       echo "Patient Added Successfully!!";
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
function AddAppointment($conn,$Username,$Day,$Time,$Date,$Speciality)
{
   $check=false;
   $stmt=$conn->prepare("INSERT INTO appointment (Username,Day,Time,Date,Speciality) VALUES(?,?,?,?,?)"); 
   $stmt->bind_param("sssss",$Username,$Day,$Time,$Date,$Speciality);
   if($stmt->execute())
   {
       echo "Appointment Added Successfully!!";
       $check=true;
   }
   else 
   {
       echo $stmt->error;
   }
   $stmt->close();
   return $check;
 

}
function AddPrescription($conn,$Username,$Name,$Age,$Medicine,$Speciality)
{
   $check=false;
   $stmt=$conn->prepare("INSERT INTO prescription (Doctor,PatientName,Age,Medicine,Speciality) VALUES(?,?,?,?,?)"); 
   $stmt->bind_param("sssss",$Username,$Name,$Age,$Medicine,$Speciality);
   if($stmt->execute())
   {
       echo "Prescription Created Successfully!!";
       $check=true;
   }
   else 
   {
       echo $stmt->error;
   }
   $stmt->close();
   return $check;
}



function Search($conn,$Name)
{
    $result = $conn->query("SELECT * FROM prescription WHERE PatientName like '%".$Name."%' ");
    return $result;
}
 

function AddNotice($conn,$title,$body)
{
   $check=false;
   $stmt=$conn->prepare("INSERT INTO notice (Title,Body) VALUES(?,?)"); 
   $stmt->bind_param("ss",$title,$body);
   if($stmt->execute())
   {
       echo "Notice Posted Successfully!!";
       $check=true;
   }
   else 
   {
       echo $stmt->error;
   }
   $stmt->close();
   return $check;
 

}
function AddJob($conn,$Username,$name,$details,$vacancy,$salary)
{
   $check=false;
   $stmt=$conn->prepare("INSERT INTO job (PostedBy,Title,Details,Vacancy,Salary) VALUES(?,?,?,?,?)"); 
   $stmt->bind_param("sssss",$Username,$name,$details,$vacancy,$salary);
   if($stmt->execute())
   {
       echo "Job Posted Successfully!!";
       $check=true;
   }
   else 
   {
       echo $stmt->error;
   }
   $stmt->close();
   return $check;
 

}
function Registration($conn,$Name,$Email,$Gender,$Username,$Password,$Contact)
{
   $check=false;
   $stmt=$conn->prepare("INSERT INTO admins (Name,Email,Gender,Username,Password,Contact) VALUES(?,?,?,?,?,?)"); 
   $stmt->bind_param("ssssss",$Name,$Email,$Gender,$Username,$Password,$Contact);
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


function AddInvoice($conn,$Name,$Test,$Doctor,$Total)
{
   $check=false;
   $stmt=$conn->prepare("INSERT INTO invoice (PatientName,TestBill,DoctorBill,TotalBill) VALUES(?,?,?,?)"); 
   $stmt->bind_param("ssss",$Name,$Test,$Doctor,$Total);
   if($stmt->execute())
   {
       echo "Invoice Generated Successfully!!";
       $check=true;
   }
   else 
   {
       echo $stmt->error;
   }
   $stmt->close();
   return $check;
 

}
function ShowNotice($conn)
 {
$result = $conn->query("SELECT * FROM  Notice");
return $result;
 }


function Doctors($conn)
 {
$result = $conn->query("SELECT * FROM  doctors_reg");
return $result;
 }
 function Invoice($conn)
 {
$result = $conn->query("SELECT * FROM  invoice");
return $result;
 }
 function Jobs($conn)
 {
$result = $conn->query("SELECT * FROM  job");
return $result;
 }

 function Delete($conn,$id,$table)
 {
    $result = $conn->query("Delete  FROM  $table where Id like '".$id."'");
    return $result;
 }
 function DeleteInvoice($conn,$id,$table)
 {
    $result = $conn->query("Delete  FROM  $table where InvoiceNo like '".$id."'");
    return $result;
 }




 function CheckMyMail($conn,$Email){
    $result = $conn->query("SELECT * FROM admins WHERE Email like '".$Email."' ");
    return $result;
}



function CheckPhone($conn,$Phone)
{
    $result = $conn->query("SELECT * FROM patients WHERE Phone like '".$Phone."' ");
    return $result;
}










 function  AllPatients($conn)
 {
$result = $conn->query("SELECT * FROM  admittedpatient");
return $result;
 }


 function UpdatePassword($conn,$table,$Phone,$Password)
 {
    $result1 = $conn->query("SELECT * FROM  $table Where Phone='$Phone'");
    $result=false;
    if ($result1->num_rows > 0)
    {
        $sql = "UPDATE $table SET Password='$Password' WHERE Phone='$Phone'";
        if ($conn->query($sql) === TRUE) {
          
           $result= TRUE;
       } 
       else {
           $result= FALSE;
           
       }
    }

     
    return  $result;
 }
 


function CloseCon($conn)
 {
    $conn -> close();
 }

}