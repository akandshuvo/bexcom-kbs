<?php

include_once '../../dbconfig.php';



/*on demand video*/
  if(isset($_POST['on_demand_video']))
  {

    $file =date("m.d.y")."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $folder="../../docs/vas/on_demand_video/";
    $root="vas";
    $sub_root="on_demand_video";

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
          window.location.href='../vas.php';
          </script>
      <?php
    }
    else
    {
      ?>
      <script>
      alert('error while uploading file');
          window.location.href='../vas.php';
          </script>
      <?php
    }
  }

  /*on demand movie channel*/
    if(isset($_POST['on_demand_movie_channel']))
    {

      $file =date("m.d.y")."-".$_FILES['file']['name'];
      $file_loc = $_FILES['file']['tmp_name'];
      $file_size = $_FILES['file']['size'];
      $file_type = $_FILES['file']['type'];
      $folder="../../docs/vas/on_demand_movie_channel/";
      $root="vas";
      $sub_root="on_demand_movie_channel";

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
            window.location.href='../vas.php';
            </script>
        <?php
      }
      else
      {
        ?>
        <script>
        alert('error while uploading file');
            window.location.href='../vas.php';
            </script>
        <?php
      }
    }


 ?>
