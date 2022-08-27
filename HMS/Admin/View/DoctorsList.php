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
    <link rel="stylesheet" href="../asset/css/design1.css">
    <link rel="stylesheet" href="../asset/css/design2.css">
    </head>
        <body>
            <center><h2>Doctors List</h2>
            <table border="1">
                <tr>
                    <td>Name</td>
                    <td>Username</td>
                    <td>Email</td>
                    <td>Gender</td>
                    <td>Contact</td>
                    <td>Speciality</td>
                    <td>Action</td>
                </tr>
                <?php 
                    $connection = new adminsdb();
                    $conobj=$connection->OpenCon();
                    $userQuery=$connection->Doctors($conobj);

                    if ($userQuery->num_rows > 0) {

                        // output data of each row
                        while($row = $userQuery->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>".$row["Name"]."</td>";
                            echo "<td>".$row["Username"]."</td>";
                            echo "<td>".$row["Email"]."</td>";
                            echo "<td>".$row["Gender"]."</td>";
                            echo "<td>".$row["Contact"]."</td>";
                            echo "<td>".$row["Speciality"]."</td>";
                            echo "<td><a href=../Controller/DeleteDoctor.php?id=".$row['Id']." style='color:red;font-size:15';>Delete</a></td>";
                            echo "</tr>";

                        }
}


?>








            </table>
            </center>
        </body>
  
</html>