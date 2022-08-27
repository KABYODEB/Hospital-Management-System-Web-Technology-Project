<?php 


	$target_File="asset/File/".$_FILES["fileupload"]["name"];
if(move_uploaded_file($_FILES["fileupload"]["tmp_name"],$target_File))
{
    echo "You have uploadede a new file";
	?>
	<script> alert("File Uploaded Success")</script>
  <?php
  header("Location: ../View/PatientHome.php");
}
?>




?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FileCheck</title>
	<a href="../View/FileUpload.php">Back</a></p>
    <a href="Logout.php">Logout</a></p>
</head>
<body>

</body>
</html>