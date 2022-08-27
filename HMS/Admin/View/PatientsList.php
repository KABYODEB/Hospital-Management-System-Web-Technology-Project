<?php 


	include_once("header.php");
	session_start();
	if(empty($_SESSION["Username"])){
		header("Location: Login.php");
	  }
	//require_once('../controller/header.php');

	include("../Model/adminsdb.php");
?>

<html>
    <head>
    <link rel="stylesheet" href="../asset/css/design3.css">
        <body>
            <center><h2>Patients List</h2>
            <table border="1">
                <tr>
                    <td>Name</td>
                    <td>Age</td>
                    <td>Contact</td>
                    <td>Contact</td>
                    <td>Speciality</td>
                </tr>
                <?php 
                    $connection = new adminsdb();
                    $conobj=$connection->OpenCon();
                    $userQuery=$connection->AllPatients($conobj);

                    if ($userQuery->num_rows > 0) {

                        // output data of each row
                        while($row = $userQuery->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>".$row["PatientName"]."</td>";
                            echo "<td>".$row["Age"]."</td>";
                            echo "<td>".$row["Phone"]."</td>";
                            echo "<td>".$row["Speciality"]."</td>";
                            echo "<td><a href=../Controller/DeletePatient.php?id=".$row['Id']." style='color:red;font-size:15';>Delete</a></td>";
                            echo "</tr>";

                        }
}


?>








            </table>
            </center>
        </body>
    </head>
</html>