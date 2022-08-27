<html>
    <head>
   <script src="..\controller\JS\LogValidation.js"></script>
        <title> LOGIN </title>
        <link rel="stylesheet" href="../asset/css/design2.css"> 
    </head>

<?php
 include("Navigation2.php");
session_start();

include ("../controller/loginCheck.php");

if(isset($_SESSION["Username"])){

  header("location: Home.php");
}

?>



<!-- onsubmit="return Validation()" -->
    <form action = "" onsubmit="return Validation()" method = "post" enctype = "">
        <fieldset>
            
            <legend> 
                Doctor Login
            </legend>
            <br>
        <table>
            <tr>
                <td>
                    Username
                </td>
                <td>
                    <input type = "text" name = "username" id="username" value = ""><td id="ErrUName"></td>
                </td>
            </tr>

            <tr>
                <td>
                    Password
                </td>
                <td>
                    <input type = "password" name = "password" id="password" value = ""><td id="ErrPass"></td>
                </td>
            </tr>

        </table>
            <br>
            
            <input type = "submit" name ="" value = "Login">
            <a href = "Registration.php"> REGISTER</a>
               
        </fieldset>
    </form>
</html>