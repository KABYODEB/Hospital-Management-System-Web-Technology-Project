<?php 
session_start();
include("../Model/doctorsdb.php");
include("Navigation.php");
?>



<html>
    <head>
        
    </head>
    <body style="background-color:#a3dcf1;"><center>
        <h2>My Appointment Schedule</h2>
        <table border="1">

        <tr>
            <th>Username</th>
            <th>Day</th>
            <th>Time</th>
            <th>Date</th>
            <th>Speciality</th>
            <th>Action</th>
            
        </tr>

        <?php 

                $connection = new doctorsdb();
                $conobj=$connection->OpenCon();
                $userQuery=$connection->ShowAppointment($conobj,$_SESSION["Username"]);

                if ($userQuery->num_rows > 0) {
                    while($row = $userQuery->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row["Username"]."</td>";
                    echo "<td>".$row["Day"]."</td>";
                    echo "<td>".$row["Time"]."</td>";
                    echo "<td>".$row["Date"]."</td>";
                    echo "<td>".$row["Speciality"]."</td>";
                    echo "<td><a href=../Controller/AppointmentController.php?id=".$row["Id"].">Delete</a></td>";
                    echo "</tr>";
                } 
}

?>
        </table>
        <br>
        <a href="AddAppointment.php">+Add Appointment</a>
        </center>
    </body>
</html>