<?php
include("../controller/PatientCheck.php"); 
?>
<html>
    <head>
        <title>ADD PATIENT</title>
    </head>
    <body>

        <h3><a href="home.php"> Back </a> | 
		<a href="../controller/logout.php"> logout </a></h3>
		<br>
        
        <form action = "" method = "post" enctype="">
            <fieldset>
                <legend>
                    ADD PATIENT
                </legend>
                
            <table>
            <tr>
                    <td>
                        NAME:
                    </td>
                    <td>
                    <input type = "text" name = "name" placeceholder = "Name"/>
                    </td>
                </tr>

                <tr>
                    <td>
                        AGE:
                    </td>
                    <td> 
                        <input type = "text" name = "age" value = ""/>
                    </td>
                </tr>

                <tr>
                    <td>
                        PHONE NUMBER:
                     </td>
                    <td>
                         <input type = "text" name = "phone" value = "" />
                    </td>
                </tr>
                
                <tr>
                    <td>
                        SELECT SPECIALIST : 
                    </td>
                    <td> 
                        <input type = "radio" name = "specialist" value = "Medicine"/>Medicine
                        <input type = "radio" name = "specialist" value = "Surgeon"/>Surgeon
                    </td>

                </tr>
                
            </table>
            <br>
            <input type = "submit" name ="" value = "SUBMIT">

            </fieldset>  
        </form>
    </body>
</html>