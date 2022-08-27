<?php
include("../controller/PhotoController.php");
include("Navigation.php");
?>



<html>
    <head>

    </head>
    <body style="background-color:#a3dcf1;">
        <form action="" method="post" enctype="multipart/form-data">
        <center>
        <h1>Welcome to Doctors Profile</h1>
        <h3>Update Your Profile Photo </h3>
        <table>
            <tr>
                <th>Upload Photo</th>
                <th>
                    <input type="file" name="fileupload">
                </th>
                <th>
                    <input type="submit" value="Upload" name="submit">
                </th>
            </tr>
     
        </table>
        </center>
        </form>
    </body>
</html>