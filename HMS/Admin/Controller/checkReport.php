

<?php   
session_start();
            $performance = $_REQUEST['performance'];
            $security = $_REQUEST['security'];
            $patient = $_REQUEST['patient'];
            $doctor = $_REQUEST['doctor'];
            

    
            if (isset($_REQUEST['performance']))
            {
                $performance=$_REQUEST['performance'];

                if(isset($_REQUEST['security'])){
                    $security= $_REQUEST['security'];

                    if(isset($_REQUEST['patient'])){
                        $patient=$_REQUEST['patient'];
                        if(isset($_REQUEST['doctor'])){
                            $doctor=$_REQUEST['doctor'];

                            $formdata = array(
                                'User'=>$_SESSION["Username"],
                                'Performance'=> "$performance",
                                'Security'=>"$security",
                                'Patient'=>"$patient",
                                'Doctor'=>"$doctor",
                             );
                    
                    
                               $existingdata = file_get_contents('../Model/data.json');
                               $tempJSONdata = json_decode($existingdata);
                               $tempJSONdata[] =$formdata;
                               //Convert updated array to JSON
                               $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
                               
                               //write json data into data.json file
                               if(file_put_contents("../Model/data.json", $jsondata)) {
                                    echo "Data successfully saved <br>";
                                    header("Location: ../view/Home.php");
                                }
                               else 
                                    echo "no data saved";
                     


                        }
                    }

                }
               
            }
            
            else
            {
                $data = $performance."|".$security."|".$patient."|".$doctor."\r\n";
                $file = fopen('../model/report.txt','a');
                fwrite($file,$data);   
                header('location: ../view/home.php');
            }
?>