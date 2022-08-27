
<html>
    <head>
    <link rel="stylesheet" href="../asset/css/design3.css">
        <title>Home Page</title>
    </head>
    <body>
        <center>
            <img src = "../asset/home.jpg" style = "width:600px;height:130px;">
        </center>

        <center>
            <h2 style="color:blue;"><b><i> ADMIN PANEL</i></b></h2>
        </center>

        <?php
        //require_once('../controller/header.php');
        include("header.php");
?>
        
       <center>

        <table border = "4" width = "40%">
            <tr>
                <td>
                    <img src = "../asset/akib.jpg" width="190" height="100" style="float:left"><br>
                </td>

                <td align = "center">
                    <b><a href = "UpdateProfile.php">PROFILE</a></b>
                    <br><br>
                    <b><a href = "fileUpload.php">UPLOAD</a></b>
                    <br>
                </td>
            </tr>

            <tr bgcolor="tomato">
                 <th colspan = "2">  DASHBOARD </th>
            </tr>

            <tr>
                <td>
                    <br>
                    <h4><a href = "addDoctor.php"><li> ADD DOCTOR </a> ||
                    <a href = "DoctorsList.php"> Show DOCTOR </a></h4>

                    <h4><a href = "AddPatient.php"><li> ADD PATIENT </a> ||
                    <a href = "patientsList.php"> Show PATIENT </a> </h4>


                    <h4><a href = "makeAppointment.php"><li> MAKE APPOINTMENT </a>||
                    <a href = "../../patient/view/appointmentlist.php"> View APPOINTMENT </a> </h4>

                    <h4><a href = "addNotice.php"><li> POST NOTICE </a> ||
                    <a href = "NoticeBoard.php"> Show NOTICE </a> </h4>

                    <h4><a href = "postJob.php"><li> POST JOB </a>||
                    <a href = "postedJobs.php"> View JOB </a> </h4>
                    
                    <h4><a href = "generateInvoice.php"><li> GENERATE INVOICE </a>||
                    <a href = "AllInvoice.php"> Show INVOICE </a> </h4>
                    
                    <h4><a href = "reportStatus.php"><li> REPORT STATUS </a>||
                    <a href = "viewReport.php"> View REPORT </a> </h4>

                    
                </td>
                <td align = "center">
                <b><a href = "../controller/logout.php">LOGOUT</a></b>
</td>

            </tr>   

        </table> 
</center>

            
    </body>
</html>
