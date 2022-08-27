<?php 
	require_once('header.php');
?>

<html>
<head>
	<title>POST NOTICE</title>
    <link rel="stylesheet" href="../asset/css/design3.css">
</head>
<body>
        <center>
            <h2><b><i> NOTICES! </i></b></h2>
            

            <table border="4", width = "60%">
            <tr>
                <th>Subject</th>
                <th>Notice</th>
                <th>Action</th>
            </tr>
            <?php
                include("../Model/Adminsdb.php");
                
                $connection = new adminsdb();
                $conobj=$connection->OpenCon();
                $userQuery=$connection->ShowNotice($conobj);
                
                if ($userQuery->num_rows > 0) {
                
                    // output data of each row
                    while($row = $userQuery->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>".$row["Title"]."</td>";
                        echo "<td>".$row["Body"]."</td>";
                        echo "<td><a href=../Controller/DeleteNotice.php?id=".$row['Id']." style='color:red;font-size:15';>Delete Notice</a></td>";

                        echo "</tr>";
                      
                  } 
                }
                
                ?>



            
		</table>
        <br>
        <a href="AddNotice.php">+Add New Notice</a>
        </center>
</body>
</html>