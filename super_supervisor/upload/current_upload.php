<?php

include_once '../../dbconfig.php';



/*offer*/
  if(isset($_POST['offer']))
  {

    $file =date("H i s")."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $folder="../../docs/current_promotion/offer/";
    $root="current_promotion";
    $sub_root="offer";

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
          window.location.href='../current.php';
          </script>
      <?php
    }
    else
    {
      ?>
      <script>
      alert('error while uploading file');
          window.location.href='../current.php';
          </script>
      <?php
    }
  }

  /*discount*/
    if(isset($_POST['discount']))
    {

      $file =date("H i s")."-".$_FILES['file']['name'];
      $file_loc = $_FILES['file']['tmp_name'];
      $file_size = $_FILES['file']['size'];
      $file_type = $_FILES['file']['type'];
      $folder="../../docs/current_promotion/discount/";
      $root="current_promotion";
      $sub_root="discount";

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
            window.location.href='../current.php';
            </script>
        <?php
      }
      else
      {
        ?>
        <script>
        alert('error while uploading file');
            window.location.href='../current.php';
            </script>
        <?php
      }
    }


 ?>
