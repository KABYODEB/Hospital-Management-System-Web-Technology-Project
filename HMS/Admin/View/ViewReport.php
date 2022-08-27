<?php
    include("header.php");
    $data = file_get_contents("../Model/data.json");
    $mydata = json_decode($data);
    
    $count=0;
    foreach($mydata as $myobject)
    {
        $count++;
    }
    echo "<center>";
    echo "<h1>All Report</h1>";
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Username</th>";
    echo "<th>System Performance</th>";
    echo "<th>System Security</th>";
    echo "<th>Availability of Patient</th>";
    echo "<th>Availability of Doctor</th>";
    echo "</tr>";
    for($i=0;$i<$count;$i++)
    {
        echo "<tr>";
        echo "<td>".$mydata[$i]->User."</td>";
        echo "<td>".$mydata[$i]->Performance."</td>";
        echo "<td>".$mydata[$i]->Security."</td>";
        echo "<td>".$mydata[$i]->Patient."</td>";
        echo "<td>".$mydata[$i]->Doctor."</td>";

        echo "</tr>";
       
    }

    echo "</table></center>";

?>