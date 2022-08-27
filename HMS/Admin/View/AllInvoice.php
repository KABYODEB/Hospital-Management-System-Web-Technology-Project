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
            <center><h2>All Invoice</h2>
            <table border="1">
                <tr>
                    <th>Invoice No</th>
                    <th>Patient Name</th>
                    <th>Test Bill</th>
                    <th>Doctor Bill</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
                <?php 
                    $connection = new adminsdb();
                    $conobj=$connection->OpenCon();
                    $userQuery=$connection->Invoice($conobj);

                    if ($userQuery->num_rows > 0) {

                        // output data of each row
                        while($row = $userQuery->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>".$row["InvoiceNo"]."</td>";
                            echo "<td>".$row["PatientName"]."</td>";
                            echo "<td>".$row["TestBill"]."</td>";
                            echo "<td>".$row["DoctorBill"]."</td>";
                            echo "<td>".$row["TotalBill"]."</td>";
                            echo "<td><a href=../Controller/DeleteInvoice.php?id=".$row['InvoiceNo']." style='color:red;font-size:15';>Delete</a></td>";
                            echo "</tr>";

                        }
}


?>








            </table>
            <br>
        <a href="generateInvoice.php">+Add New Invoice</a>
            </center>
        </body>
    </head>
</html>