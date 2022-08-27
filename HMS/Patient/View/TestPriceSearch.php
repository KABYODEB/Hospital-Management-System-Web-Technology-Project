<?php 
include("Nav2.php");

echo "<center><h1>Search Test Price List</h1></center>";

?>

<html>
    <head>

    
    <script src="..\controller\Search.js"></script>
    </head>
    <body>
        <center>
        <table border="1">
            <tr>
                
                <td>
                    <input type="text" id="search" name="search" placeholder="Enter test name to search" onkeyup ="Search()" style="font-size:20px">
                </td>
                <!-- <p id="search1"></p> -->
            </tr>
            <tr>
                <td id="search1"></td>
            </tr>


        </table>
        </center>
    </body>
</html>