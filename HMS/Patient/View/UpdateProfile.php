
<?php
session_start();
include_once("Nav2.php");
include("../Model/updatedb.php");
$User="";
$radio1=$radio2=$radio3="";
$Name=$Password=$Age=$Username=$Mobile=$Gender="";

$connection = new updatedb();
$conobj=$connection->OpenCon();
$userQuery=$connection->ShowData($conobj,$_SESSION["Username"]);

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $Name=$row["Name"];
      $Password=$row["Password"];
      $Age=$row["Age"];
      $Username=$row["Username"];
      $Mobile=$row["Mobile"];
      // $photo=$row["File_Path"];

      if(  $row["Gender"]=="Male" )
      {
           $radio1="checked"; 
      }

      else if($row["Gender"]=="Female")
      {
           $radio2="checked"; 
    }
      else
      {
          $radio3="checked";
      }

   
  } 
}




?>




<!DOCTYPE html>
<html>
<head>

  <style>
body {
  background-image: url('../image/28.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}

</style>
<link rel="stylesheet" href="../controller/asset/css/design2.css">
</head>
<body>


<b><center>  <p style="color:black;font-size:50px;">Edit your Profile</p> 
            


</Center></b><br>
     <form action="../controller/UpdateCheck.php" method="post" enctype="">
  <center>
    <fieldset> <table>
      
        <tr>
          <td>Name</td>
          <td> <input type="text" name="name" value="<?php echo $Name; ?>" /></td>
        </tr>

        <tr>
        <td>Username</td>
          <td> <input type="text" name="username" value="<?php echo $Username; ?>"  /></td>
        </tr>

        <tr>
          <td>Password</td>
          <td> <input type="password" name="password" value="<?php echo $Password;?>" /></td>
        </tr>

        <tr>
          <td>Age </td>
          <td> <input type="text" name="age" value="<?php echo $Age; ?>" /></td><br>
        </tr>
        <tr>
          <td>Contact </td>
          <td> <input type="text" name="contact" value="<?php echo $Mobile;?>" /></td><br>
        </tr>
        <tr>
          <td>Gender</td>
          <td>
            <input type="radio" name="gender" value="Male" <?php echo $radio1; ?>>Male
            <input type="radio" name="gender" value="Female" <?php echo $radio2; ?>>Female
            <input type="radio" name="gender" value="Others" <?php echo $radio3;?>>Others

          </td>
          </tr>

        <tr>
          
          <td></td>
          <td>
            <input type="submit" name="" value="update profile">
           
          </td>
          </tr>
        </table>
        </fieldset>
      </center>
      




</body>
</html>