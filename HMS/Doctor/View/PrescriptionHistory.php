<?php
include("../Model/doctorsdb.php");
session_start();
$connection = new doctorsdb();
$conobj=$connection->OpenCon();
$userQuery=$connection->ShowPrescription($conobj,$_SESSION["Username"]);

include("Navigation.php");
?>


<html>
    <head>
    <link rel="stylesheet" href="../asset/css/design3.css">
    </head>


    <body style="background-color:#a3dcf1;">
        <center><h2>Prescription History</h2></center>
        <table border="1">
            <tr>
                <th>Doctor</th>
                <th>Patient Name</th>
                <th>Age</th>
                <th>Medicine</th>
                <th>Speciality</th>
            </tr>
            <?php
               
                if ($userQuery->num_rows > 0) {
                    while($row = $userQuery->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>".$row["Doctor"]."</td>";
                        echo "<td>".$row["PatientName"]."</td>";
                        echo "<td>".$row["Age"]."</td>";
                        echo "<td>".$row["Medicine"]."</td>";
                        echo "<td>".$row["Speciality"]."</td>";
                       
                        echo "</tr>";
                  } 
                }
            ?>
        </table>
    </body>
</html>

