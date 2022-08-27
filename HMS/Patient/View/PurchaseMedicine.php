<?php
include_once("Nav2.php");
  
?>








<!DOCTYPE html>
<html>
<head>

<head>

  <style>
body {
  background-image: url('../image/s26.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}

</style>
<body>


<b><center>  <p style="color:green;font-size:50px;">Welcome to Purchase Medicine page</p> 
            <p style="color:green;font-size:30px;">Here your Calculation</p> </br></br>  


</Center></b><br>
</head>
<body>
  
     <form action="../controller/ViewSlipCheck.php" method="post" enctype="">
      <center>
    <table>
        <tr>
          <td>Medicine1 Name</td>
          <td> <input type="text" name="medicine1" value="" /></td>
        </tr>
        <tr>
          <td>Medicine2 Name</td>
          <td> <input type="text" name="medicine2" value="" /></td>
        </tr>
        <tr>
          <td>Medicine3 Name</td>
          <td> <input type="text" name="medicine3" value="" /></td>
        </tr>
        <tr>
          <td>Price Medicine1</td>
          <td> <input type="text" name="pmedicine1" value="" /></td>
        </tr>
         <tr>
          <td>Price Medicine2</td>
          <td> <input type="text" name="pmedicine2" value="" /></td>
        </tr>
         <tr>
          <td>Price Medicine3</td>
          <td> <input type="text" name="pmedicine3" value="" /></td>
        </tr>
        
  
        
        <tr>
          <td>PayMent Method</td>
          <td>
            <input type="radio" name="method" value="bkash">Bkash
            <input type="radio" name="method" value="nogod">Nogod
            <input type="radio" name="method" value="cash">Cash

          </td>
          </tr>

        <tr>
          
          <td></td>
          <td>
            <input type="submit" name="" value="Complete Purchase">
            <a href="ViewSlip.php">View Slip</a>
            
          </td>
          </tr>
        </table>
      </center>
     
      </form>
    

    </form></body></html>




</body>
</html>