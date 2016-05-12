<?php

include_once '../../dbconfig.php';



/*social_media*/
if(isset($_POST['social_media']))
{

  $file =$_FILES['file']['name']."-".rand(1000,100000);
  $file_loc = $_FILES['file']['tmp_name'];
  $file_size = $_FILES['file']['size'];
  $file_type = $_FILES['file']['type'];
  $folder="../../docs/social_media/";
  $root="social_media";
  $sub_root="social_media";

  // new file size in KB
  $new_size = $file_size/1024;
  // new file size in KB

  // make file name in lower case
  $new_file_name = strtolower($file);
  // make file name in lower case

  $final_file=str_replace(' ','-',$new_file_name);

  if(move_uploaded_file($file_loc,$folder.$final_file))
  {
    $sql="INSERT INTO upload_location(file,type,size,location,root,sub_root) VALUES('$final_file','$file_type','$new_size','$folder','$root','$sub_root')";
    $sql2="INSERT INTO archive(file,type,size,location,root,sub_root) VALUES('$final_file','$file_type','$new_size','$folder','$root','$sub_root')";
    mysql_query($sql);
    mysql_query($sql2);
    ?>
    <script>
    alert('successfully uploaded');
        window.location.href='../social_media.php';
        </script>
    <?php
  }
  else
  {
    ?>
    <script>
    alert('error while uploading file');
        window.location.href='../social_media.php';
        </script>
    <?php
  }
}



 ?>
