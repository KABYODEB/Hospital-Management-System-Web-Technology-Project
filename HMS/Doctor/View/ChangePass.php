<?php
include("../controller/PassController.php");
include("Navigation.php");
?>



<html>
    <head>

    </head>
    <body style="background-color:#a3dcf1;">
        <form action="" method="post">
        <center>
        <h1>Welcome to Doctors Profile</h1>
        <h3>Change Your Password</h3>
        <table>
            <tr>
                <th>Current Password</th>
                <th>
                    <input type="password" name="currpass">
                </th>
            </tr>
            <tr>
                <th>New Password</th>
                <th>
                    <input type="password" name="newpass">
                </th>
            </tr>
            <tr>
                <th>Repeat Password</th>
                <th>
                    <input type="password" name="reapetpass">
                </th>
            </tr>
            <tr>
                <th>
                    <input type="submit" name="submit">
                </th>
                <th>
                    <p><?php echo $Err;?></p>
                </th>
            </tr>
        </table>
        </center>
        </form>
    </body>
</html>