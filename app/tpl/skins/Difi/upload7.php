﻿<?php
if(isset($_POST['btn-upload']))
{    
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $my_id = $_SESSION['user']['id'];



 $folder="uploads/";
 
 // new file size in KB
 $new_size = $file_size/1024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $sql="INSERT INTO tbl_uploads(file,type,size,user_id,fase) VALUES('$final_file','$file_type','$new_size', '$my_id', 7)";
  mysql_query($sql);
  ?>
  <script>
 
        window.location.href='bp4';
        </script>
  <?php
 }
 else
 {
  ?>
  <script>
  alert('Filen ble ikke lastet opp');
        window.location.href='bp4';
        </script>
  <?php
 }
}
?>