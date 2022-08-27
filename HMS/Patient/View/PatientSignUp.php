<!DOCTYPE html>
<html>
<head>
<script src="..\controller\RegValidation.js"></script>
<script src="..\controller\CheckUsername.js"></script>
  <style>
body {
  background-image: url('../image/28.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
p{
  background-color:yellow;
  color:black;

}

</style>
<body>
<?php //include_once("Nav1.php");
  //include("../controller/PatientSignUpCheck.php");


?>

<b><center>  <h2 style="color:black;font-size:50px;">Make Your Registration</h2> 
            


</Center></b><br>
     <form action="../controller/PatientSignUpCheck.php" onsubmit="return Validation()" method="post" enctype="">
  <center> <table>
        <tr>
          <td>Name</td>
          <td> <input type="text" name="name" id="name" value="" /></td><td><p id="ErrName"></p></td>
        </tr>
        <tr>
          <td>Username</td>
          <td> <input type="text" name="username" id="username" value="" onkeyup="Checkmyuser()"/></td><td><p id="ErrUName"></p></td>
        </tr>
        <tr>
          <td>Password</td>
          <td> <input type="password" name="password" id="password" value="" /></td><td><p id="ErrPass"></p></td>
        </tr>
         <tr>
          <td>Confirm Password </td>
          <td> <input type="password" name="Cpassword" id="Cpassword" value="" /></td><br><td><p id="ErrCPass"></p></td>
        </tr>
        <tr>
          <td>Age </td>
          <td> <input type="text" name="age" id="age" value="" /></td><td><p id="ErrAge"></p></td>
        </tr>
        <tr>
          <td>Contact </td>
          <td> <input type="tel" name="contact" id="contact" value="" /></td><td><p id="ErrMobile"></p></td>
        </tr>
        <tr>
          <td>Gender</td>
          <td>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Others">Others
          </td>
          <td><p id="Errgender"></p></td>
          </tr>

        <tr>
          
          <td></td>
          <td>
            <input type="submit" name="submit" value="Create Account">
            <a href="PatientSignIn.php">SignIn</a>
          </td>
          </tr>
        </table>
      </center>
      </form>
  

    </form></body></html>




</body>
</html>