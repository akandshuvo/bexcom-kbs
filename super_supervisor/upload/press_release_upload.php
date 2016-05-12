<?php

include_once '../../dbconfig.php';



/*television*/
  if(isset($_POST['television']))
  {

    $file =$_FILES['file']['name']."-".rand(1000,100000);
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $folder="../../docs/press_release/television/";
    $root="press_release";
    $sub_root="television";

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
          window.location.href='../press_release.php';
          </script>
      <?php
    }
    else
    {
      ?>
      <script>
      alert('error while uploading file');
          window.location.href='../press_release.php';
          </script>
      <?php
    }
  }

  /*radio*/
    if(isset($_POST['radio']))
    {

      $file =$_FILES['file']['name']."-".rand(1000,100000);
      $file_loc = $_FILES['file']['tmp_name'];
      $file_size = $_FILES['file']['size'];
      $file_type = $_FILES['file']['type'];
      $folder="../../docs/press_release/radio/";
      $root="press_release";
      $sub_root="radio";

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
            window.location.href='../press_release.php';
            </script>
        <?php
      }
      else
      {
        ?>
        <script>
        alert('error while uploading file');
            window.location.href='../press_release.php';
            </script>
        <?php
      }
    }


  /*newspaper*/
      if(isset($_POST['newspaper']))
      {

        $file =$_FILES['file']['name']."-".rand(1000,100000);
        $file_loc = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $file_type = $_FILES['file']['type'];
        $folder="../../docs/press_release/newspaper/";
        $root="press_release";
        $sub_root="newspaper";

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
              window.location.href='../press_release.php';
              </script>
          <?php
        }
        else
        {
          ?>
          <script>
          alert('error while uploading file');
              window.location.href='../press_release.php';
              </script>
          <?php
        }
      }

  /*billboard*/
        if(isset($_POST['billboard']))
        {

          $file =$_FILES['file']['name']."-".rand(1000,100000);
          $file_loc = $_FILES['file']['tmp_name'];
          $file_size = $_FILES['file']['size'];
          $file_type = $_FILES['file']['type'];
          $folder="../../docs/press_release/billboard/";
          $root="press_release";
          $sub_root="billboard";

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
                window.location.href='../press_release.php';
                </script>
            <?php
          }
          else
          {
            ?>
            <script>
            alert('error while uploading file');
                window.location.href='../press_release.php';
                </script>
            <?php
          }
        }


 ?>
