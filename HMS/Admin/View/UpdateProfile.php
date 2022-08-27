
<?php 
session_start();

	require_once('header.php');
    include_once("../controller/UpdateCheck.php");


$User="";
$radio1=$radio2=$radio3="";
$Name=$Password=$Email=$Username=$Mobile=$Gender="";

$connection = new adminsdb();
$conobj=$connection->OpenCon();
$userQuery=$connection->ShowData($conobj,$_SESSION["Username"]);

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $Name=$row["Name"];
      $Password=$row["Password"];
      $Email=$row["Email"];
      $Username=$row["Username"];
      $Mobile=$row["Contact"];
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



<html>
    <head>
    <link rel="stylesheet" href="../asset/css/design2.css">
        
        <title>REGISTRATION</title>
    </head>
    <body>
        <form action = "" method = "post" enctype="">
            <fieldset>
                <legend>
                    Admin Registration
                </legend>
                
            <table>
            <tr>
                    <td>
                        Name:
                    </td>
                    <td> 
                        <input type = "text" name = "name" id="name" value = "<?php echo $Name;?>" placeholder=""/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Username:
                    </td>
                    <td>
                    <input type = "text" name = "username" id="username" value="<?php echo $Username; ?>" placeholder = "" readonly>
                    </td>
                </tr>

                <tr>
                    <td>
                        Email:
                    </td>
                    <td> 
                        <input type = "text" name = "email" value = "<?php echo $Email;?>" placeholder="abc@gmail.com"/>
                    </td>
                </tr>

                <tr>
                    <td>
                        Contact:
                     </td>
                    <td>
                         <input type = "text" name = "phone" id="phone" value = "<?php echo $Mobile;?>" placeholder="017********"/>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Password:
                    </td> 
                    <td>
                         <input type = "password" name = "password" id="password" value = "<?php echo $Password;?>"/>
                    </td> 
                </tr>


                <tr>
                    <td>
                        Gender: 
                    </td>
                    <td> 
                        <input type = "radio" name = "gender" value = "Male" <?php echo $radio1; ?>/> Male
                        <input type = "radio" name = "gender" value = "Female" <?php echo $radio2;?>/> Female
                    </td>
                </tr>

            </table>
            <br>
            <input type = "submit" name ="update" value = "Update">

            </fieldset>  
        </form>
    </body>
</html>