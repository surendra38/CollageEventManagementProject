<?php
include("db.php");
if(isset($_POST['btn-upload']))
{    
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 
 move_uploaded_file($file_loc,$folder.$file);
 $sql="INSERT INTO notices(file,type,size) VALUES('$file','$file_type','$file_size')";
 mysqli_query($conn,$sql); 
 echo "notice uploaded successfully";

}
?>
<a href="images.php">click here to upload other notice</a>
<a href="welcome.php">click here to go to dashboard</a>