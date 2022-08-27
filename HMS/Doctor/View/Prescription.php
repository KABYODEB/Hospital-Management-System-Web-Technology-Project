<?php 
session_start();
include("../Model/doctorsdb.php");
include ("../Controller/AddPrescriptionController.php");
include("Navigation.php");
?>

<!DOCTYPE html>
<html>

<head>
    
<div class = 'header sticky'> 
<link rel="stylesheet" type="text/css" href="../CSS/Design2.css">

</div> 


    <title> update </title>
    <style>
        fieldset{
            margin-left:30%;
            margin-right:30%;
            margin-top:50px;
            background-color: #c2c2d6;
        }
        input{
            border-radius:5px;
            font-size:15px;

            
        }
        .err{
            color:red;
            font-size:12px;
        }
        body{
            background-image: url('Media/4.jpg');
        }
        a{
            color:black;
        }
        img{
            border-radius:20px;
            width:160px;
            margin-bottom:20px;
        }
     
    </style>
</head>

<body style="background-color:#a3dcf1;">


    <form method="post" action="" enctype="multipart/form-data">
     

        
       <fieldset>
    <legend><b>Create Prescription</b></legend><br>

          
     
          <table> 

            <tr>
                <td>
                <label>Patient Name: <br><br></label></td>
                <td> <input type="text" name="name" class="form-control"  /><br><br> </td>
                
            </tr>

            <tr>
                <td>
                <label>Age : <br><br></label></td>
                <td> <input type="text" name="age" class="form-control" /><br> <br></td>
                
            </tr>
            <tr>
                <td>
                <label>Medicine : <br><br></label></td>
                <td> <input type="text" name="medicine" class="form-control" /><br> <br></td>
                
            </tr>
            <tr>
                <td>
                <label>Speciality : <br><br></label></td>
                <td> <input type="text" name="speciality" class="form-control" /><br> <br></td>
                
            </tr>

            <tr>
                <td></td>
                <td class="btn">
                <input type="submit" name="submit" value="Add"/>
                </td>
               
            </tr>
            
           

          
            </table>
           
        </fieldset>
       
    </form>
    <div class= 'footer'>
    <h1>Thanks To Visit our Website<h1> 
    </div>
    
    <br />
</body>

</html>