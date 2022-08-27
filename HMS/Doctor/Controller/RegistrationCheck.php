<?php   
include("../Model/doctorsdb.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
            $name = $_REQUEST['name']; 
            $username = $_REQUEST['username']; 
            $password = $_REQUEST['password']; 
            $email = $_REQUEST['email'];
             $contact = $_REQUEST['phone'];
            $speciality=$_REQUEST["speciality"];
            $gender = "";
            $Path="../Asset/Photo/default.jpg";
    
            if ($email == null || $contact == null || $name == null)
            {
                echo "<center><h2>Missing Information!</center></h2> <br>";
            }
            else
            {
                if(isset($_REQUEST['gender'])){
                    $gender=$_REQUEST['gender'];
                
            
                $connection=new doctorsdb();
                $conobj=$connection->OpenCon();
                $userQuery=  $connection->AddDoctor($conobj,$name,$email,$gender,$username,$password,$contact,$speciality,$Path);
                if($userQuery==true){
                    header("location: ../View/Login.php");
                }
                $connection->CloseCon($conobj);
                }
                



                // $data = $id."|".$email."|".$phone."|".$password."|".$name."|".$gender."\r\n";
                // $file = fopen('../model/admin.txt','a');
                // fwrite($file,$data);   
                // header('location: ../view/login.html');
            }
        }
?>