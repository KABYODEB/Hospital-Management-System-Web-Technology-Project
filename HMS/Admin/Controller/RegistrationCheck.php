<!-- <html>
    <body>
        <h3><a href="../view/home.php"> Back </a> | 
		<a href="../controller/logout.php"> logout </a></h3>
		<br>
    </body>
</html> -->

<?php   
include("../Model/Adminsdb.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
            $name = $_REQUEST['name']; 
            $username = $_REQUEST['username']; 
            $email = $_REQUEST['email'];
            $contact = $_REQUEST['phone'];
            $password = $_REQUEST['password'];
            $cpassword = $_REQUEST['cpassword'];
           
            $gender = "";
            
    
            if ($email == null || $contact == null || $password == null || $name == null)
            {
                echo "<center><h2>Missing Information!</center></h2> <br>";
            }
            else if ($password != $cpassword)
            {
                echo "<center><h2>Password field must be same! </center></h2><br>";
            }
            if (strlen($password)<6){
                echo "Password Must Contain 6 Character";
            }
            else
            {
                if(isset($_REQUEST['gender'])){
                    $gender=$_REQUEST['gender'];
                
            
                $connection=new Adminsdb();
                $conobj=$connection->OpenCon();
                $userQuery=  $connection->Registration($conobj,$name,$email,$gender,$username,$password,$contact);
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