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
            <center><h2>Jobs List</h2>
            <table border="1">
                <tr>
                    <td>Job Posted By</td>
                    <td>Title</td>
                    <td>Details</td>
                    <td>Vacancy</td>
                    <td>Salary</td>
                    <td>Action</td>
                </tr>
                <?php 
                    $connection = new adminsdb();
                    $conobj=$connection->OpenCon();
                    $userQuery=$connection->Jobs($conobj);

                    if ($userQuery->num_rows > 0) {

                        // output data of each row
                        while($row = $userQuery->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>".$row["PostedBy"]."</td>";
                            echo "<td>".$row["Title"]."</td>";
                            echo "<td>".$row["Details"]."</td>";
                            echo "<td>".$row["Vacancy"]."</td>";
                            echo "<td>".$row["Salary"]."</td>";
                            echo "<td><a href=../Controller/DeleteJob.php?id=".$row['Id']." style='color:red;font-size:15';>Delete</a></td>";
                            echo "</tr>";

                        }
}


?>








            </table>
            </center>
        </body>
    </head>
</html>