<?php 

echo "<center><h1>Search Patient</h1></center>";
include("Navigation.php");
?>

<html>
    <head>

    <link rel="stylesheet" href="../controller/asset/css/design3.css">
    <script src="..\controller\Search.js"></script>
    </head>
    <body style="background-color:#a3dcf1;">
        <center>
        <table border="1">
            <tr>
                
                <td>
                    <input type="text" id="search" name="search" placeholder="Enter test name to search" onkeyup ="Search()" style="font-size:20px">
                </td>
                <!-- <p id="search1"></p> -->
            </tr>
            <tr>
                <td id="patient"></td>
            </tr>


        </table>
        </center>
    </body>
</html>