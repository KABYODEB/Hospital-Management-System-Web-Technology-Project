<?php 
	//require_once('../controller/header.php');
    include("../controller/checkNotice.php");
    include("header.php");
?>
<html>
    <head>
    <link rel="stylesheet" href="../asset/css/design3.css">
    
        <title>POST NOTICE</title>
    </head>
    <body>
		<br>
        
        <form action = "" method = "post" enctype="">
            <fieldset>
                <legend>
                    POST NOTICE
                </legend>
                
            <table>
                
                 <tr>
                    <td>
                        TITLE:
                    </td>
                    <td>
                    <input type = "text" name = "title">
                    </td>
                </tr>

                <tr>
                <tr>
                    <td>
                        BODY:
                    </td>
                    <td> 
                        <textarea type = "text" name = "body" value = "" rows="4" cols="50"></textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td> <input type = "submit" name ="post" value = "POST"><br></td>
                </tr>

            </table>
            <br>
           

            </fieldset>  
        </form>
    </body>
</html>