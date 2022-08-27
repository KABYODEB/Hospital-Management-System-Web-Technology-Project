<?php 
session_start();
include("../Model/doctorsdb.php");
include ("../Controller/UpdateController.php");
include("Navigation.php");
?>
   <?php //include 'Nav2.php'; ?>
<?php
$User="";
$radio1=$radio2=$radio3="";
$Email=$User=$Phone=$Address=$Date=$photo=$Speciality="";
$Image="";
$connection = new doctorsdb();
$conobj=$connection->OpenCon();
$userQuery=$connection->ShowData($conobj,$_SESSION["Username"]);

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $Name=$row["Name"];
      $Email=$row["Email"];
      $User=$row["Username"];
      $Pass=$row["Password"];
      $Phone=$row["Contact"];
      $Speciality=$row["Speciality"];
      $Image=$row["Photo"];
  } 
}




?>
<!DOCTYPE html>
<html>

<head>
    
<div class = 'header sticky'> 
<link rel="stylesheet" type="text/css" href="../CSS/Design2.css">
<h1 font color='white'> Doctor Profile </h1> 
</div> 


    <title> update </title>
    <style>
        fieldset{
            margin-left:30%;
            margin-right:30%;
            margin-top:50px;
            background-color: #c2c2d6;
        }
        input{
            border-radius:5px;
            font-size:15px;

            
        }
        .err{
            color:red;
            font-size:12px;
        }
        body{
            background-image: url('Media/4.jpg');
        }
        a{
            color:black;
        }
        img{
            border-radius:20px;
            width:160px;
            margin-bottom:20px;
        }
     
    </style>
</head>

<body style="background-color:#a3dcf1;">


    <form method="post" action="" enctype="multipart/form-data">
     

        
       <fieldset>
    <legend><b>Update Profile Information</b></legend><br>
     <?php $Cookie_name=$_SESSION['Username'];
                    $Cookie_value=$_SESSION['Name'];
                    if(isset($_SESSION["Name"])) 
                    {
                    
                    }
                    $name=$_SESSION['Username'];
                    $value=$_SESSION['Name'];

                    if(!isset($_COOKIE[$name]))
                    {
                        setcookie($name,$value,time()+(100),"/");
                        
                    }

                    if(!isset($_COOKIE[$name]))
                    {
                        echo "<p>No Cookie Found ".$_SESSION['Name']."</p>";
                    }
                    else {
                        echo "<p>Cookie Found !! ".$_COOKIE[$name]."</p>";
                    }?>
          
     
          <table> 

            <tr>
                <td>Name : <br><br></td>
                <td> <input type="text" name="name" class="form-control" value="<?php echo $Name; ?>" /> </td>
                
                <br><br>
            </tr>
         
            <tr>
                <td>
                <label>Email :<br><br> </label></td>
                <td>  <input type="text" name="email" class="form-control" value="<?php echo $Email; ?>"/><br><br> </td>
                
                
            </tr>

            <tr>
                <td>
                <label>User Name : <br><br></label></td>
                <td> <input type="text" name="userName" class="form-control" value="<?php echo $User; ?>" readonly/><br><br> </td>
               
            </tr>
            <tr>
                <td>
                <label>Phone Number : <br><br></label></td>
                <td> <input type="text" name="phone" class="form-control" value="<?php echo $Phone; ?>" /><br><br> </td>
                
            </tr>

            <tr>
                <td>
                <label>Password : <br><br></label></td>
                <td> <input type="password" name="password" class="form-control" value="<?php echo $Pass;?>"/><br> <br></td>
                
            </tr>
            <tr>
                <td>
                <label>Speciality : <br><br></label></td>
                <td> <input type="text" name="speciality" class="form-control" value="<?php echo $Speciality;?>"/><br> <br></td>
                
            </tr>

            <tr>
                <td></td>
                <td class="btn">
                <input type="submit" name="Update" value="Update"/>
                <input type="submit" name="close" value="Close"/>
                </td>
               
            </tr>
            
           

          
            </table>
           
        </fieldset>
       
    </form>
    <div class= 'footer'>
    <h1>Thanks To Visit our Website<h1> 
    </div>
    
    <br />
</body>

</html>