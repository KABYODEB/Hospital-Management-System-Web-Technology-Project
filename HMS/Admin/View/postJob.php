<?php 
	require_once('header.php');
    include("../controller/checkJob.php");
?>
<html>
    <head>
    <link rel="stylesheet" href="../asset/css/design3.css">
        <title>POST NOTICE</title>
    </head>
    <body>

        
        <form action = "" method = "post" enctype="">
            <fieldset>
                <legend>
                    POST JOB
                </legend>
                
            <table>
                <tr>
                    <td>
                        JOB NAME:
                    </td>
                    <td>
                    <input type = "text" name = "name" value = "">
                    </td>
                </tr>
                <tr>
                    <td>
                        DETAILS:
                    </td>
                    <td>
                    <input type = "text" name = "details" value = "">
                    </td>
                </tr>
                 <tr>
                    <td>
                        VACANCY:
                    </td>
                    <td>
                    <input type = "text" name = "vacancy" >
                    </td>
                </tr>

                <tr>
                    <td>
                        SALARY:
                    </td>
                    <td> 
                        <input type = "text" name = "salary" value = "">
                    </td>
                </tr>
                <tr>
                    <td>
                    <input type = "submit" name ="" value = "POST"><br>
                    </td>
                    <td><a href="postedjobs.php">Check Posted Jobs</a></td>
                </tr>

            </table>
            <br>
           

            </fieldset>  
        </form>
    </body>
</html>