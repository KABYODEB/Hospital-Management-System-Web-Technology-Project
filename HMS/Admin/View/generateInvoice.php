<?php 
	require_once('header.php');
    include("../controller/checkInvoice.php");
?>
<html>
    <head>
    <link rel="stylesheet" href="../asset/css/design2.css">
        <title>GENERATE INVOICE</title>
    </head>
    <body>
        <form action = "" method = "post" enctype="">
            <fieldset>
                <legend>
                    GENERATE INVOICE
                </legend>
                
            <table>
                <tr>
                    <td>
                        PATIENT NAME:
                    </td>
                    <td>
                    <input type = "text" name = "name" value = "">
                    </td>
                </tr>
                 <tr>
                    <td>
                        TEST Bill:
                    </td>
                    <td>
                    <input type = "text" name = "test" >
                    </td>
                </tr>

                <tr>
                    <td>
                        DOCTOR Bill:
                    </td>
                    <td> 
                        <input type = "text" name = "doctor" value = "">
                    </td>
                </tr>

            </table>
            <br>
            <input type = "submit" name ="" value = "Proceed"><br>

            </fieldset>  
        </form>
    </body>
</html>