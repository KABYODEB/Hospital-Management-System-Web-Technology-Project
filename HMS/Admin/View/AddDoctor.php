<html>
    <head>
        
        <title>Add New Doctor</title>
        <link rel="stylesheet" href="../asset/css/design2.css">
    </head>
    <body>
        <form action = "../controller/AddDoctorCheck.php" method = "post" enctype="">
            <fieldset>
                <legend>
                Add New Doctor
                </legend>
                
            <table>
            <tr>
                    <td>
                        Name:
                    </td>
                    <td> 
                        <input type = "text" name = "name" id="name" value = "" placeholder="Name"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Username:
                    </td>
                    <td>
                    <input type = "text" name = "username" id="username" value="" placeholder = "Username">
                    </td>
                </tr>

                <tr>
                    <td>
                        Email:
                    </td>
                    <td> 
                        <input type = "text" name = "email" value = "" placeholder="abc@gmail.com"/>
                    </td>
                </tr>

                <tr>
                    <td>
                        Contact:
                     </td>
                    <td>
                         <input type = "text" name = "phone" id="phone" value = "" placeholder="017********"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Speciality:
                     </td>
                    <td>
                         <input type = "text" name = "speciality" id="speciality" value = "" placeholder=""/>
                    </td>
                </tr>
                

                <tr>
                    <td>
                        Gender: 
                    </td>
                    <td> 
                        <input type = "radio" name = "gender" value = "Male"/> Male
                        <input type = "radio" name = "gender" value = "Female"/> Female
                    </td>
                </tr>

            </table>
            <br>
            <input type = "submit" name ="" value = "Add Doctor">

            </fieldset>  
        </form>
    </body>
</html>