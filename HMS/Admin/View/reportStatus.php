<?php 
	include_once('header.php');
    //include("");
?>
<html>
    <head>
        <title>Report Status</title>
        <link rel="stylesheet" href="../asset/css/design1.css">
    </head>
    <body>

        <form action = "../controller/checkReport.php" method = "post" enctype="">
            <fieldset>
                <legend>
                    Report Status
                </legend>
                
            <table>
                
            <tr>
                    <td>
                        System Performance: 
                    </td>
                    <td> 
                        <input type = "radio" name = "performance" value = "GOOD"/> GOOD
                    </td>
                    <td> 
                        <input type = "radio" name = "performance" value = "AVERAGE"/> AVERAGE
                    </td>
            </tr>

            <tr>
                    <td>
                        System Security: 
                    </td>
                    <td> 
                        <input type = "radio" name = "security" value = "SECURED ENOUGH"/> SECURED Enough
                    </td>
                    <td> 
                        <input type = "radio" name = "security" value = "NEED IMPROVEMENT"/> NEED Improvement
                    </td>
            </tr>

            <tr>
                    <td>
                        Availabilty of Paitent: 
                    </td>
                    <td> 
                        <input type = "radio" name = "patient" value = "GOOD ENOUGH"/> GOOD Enough
                    </td>
                    <td> 
                        <input type = "radio" name = "patient" value = "NOT SATISFACTORY"/> NOT Satisfactory
                    </td>
            </tr>

            <tr>
                    <td>
                        Availabilty of Doctor: 
                    </td>
                    <td> 
                        <input type = "radio" name = "doctor" value = "GOOD ENOUGH"/> GOOD Enough
                    </td>
                    <td> 
                        <input type = "radio" name = "doctor" value = "NOT ENOUGH"/> NOT Enough
                    </td>
            </tr>

            </table>
            <br>
            <input type = "submit" name ="" value = "POST"><br>

            </fieldset>  
        </form>
    </body>
</html>