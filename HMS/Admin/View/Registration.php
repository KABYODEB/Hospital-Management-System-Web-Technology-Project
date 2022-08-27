
<?php

include("Nav1.php");
?>
<html>
    <head>
    <link rel="stylesheet" href="../asset/css/design2.css">
    <script src="..\controller\JS\RegValidation.js"></script>
    <script src="..\controller\CheckEmail.js"></script>
        <title>REGISTRATION</title>
    </head>
    <body>
        <form action = "../controller/registrationCheck.php" onsubmit="return Validation()" method = "post" enctype="">
            <fieldset style="margin-top:20px">
                <legend>
                    Admin Registration
                </legend>
                
            <table>
            <tr>
                    <td>
                        Name:
                    </td>
                    <td> 
                        <input type = "text" name = "name" id="name" value = ""/><td><p id="ErrName"></p></td>
                    </td>
                </tr>
                <tr>
                    <td>
                        Username:
                    </td>
                    <td>
                    <input type = "text" name = "username" id="username" value="" ><td><p id="ErrUName"></p></td>
                    </td>
                </tr>

                <tr>
                    <td>
                        Email:
                    </td>
                    <td> 
                        <input type = "text" name ="email" id="email" value = "" onkeyup="CheckMail()" /><td><p id="ErrMail"></p></td>
                    </td>
                </tr>

                <tr>
                    <td>
                        Contact:
                     </td>
                    <td>
                         <input type = "text" name = "phone" id="phone" value = "" /><td><p id="ErrMobile"></p></td>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Password:
                    </td> 
                    <td>
                         <input type = "password" name = "password" id="password" value = ""/><td><p id="ErrPass"></p></td>
                    </td> 
                </tr>

                <tr>
                    <td>
                        Confirm Password:
                    </td>
                    <td> 
                        <input type = "password" name = "cpassword" id="cpassword" value = ""/><td><p id="ErrCPass"></p></td>
                    </td>
                </tr>

                <tr>
                    <td>
                        Gender: 
                    </td>
                    <td> 
                        <input type = "radio" name = "gender" value = "Male"/> Male
                        <input type = "radio" name = "gender" value = "Female"/> Female
                    </td>
                    <td><p id="Errgender"></p></td>
                </tr>

            </table>
            <br>
            <input type = "submit" name ="submit" value = "REGISTER">
            <a href = "login.php"> Sign In</a>

            </fieldset>  
        </form>
    </body>
</html>