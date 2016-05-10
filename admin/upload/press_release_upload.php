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

    // new file size in KB
    $new_size = $file_size/1024;
    // new file size in KB

    // make file name in lower case
    $new_file_name = strtolower($file);
    // make file name in lower case

    $final_file=str_replace(' ','-',$new_file_name);

    if(move_uploaded_file($file_loc,$folder.$final_file))
    {
      $sql="INSERT INTO upload_location(file,type,size,location) VALUES('$final_file','$file_type','$new_size','$folder')";
      mysql_query($sql);
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

      // new file size in KB
      $new_size = $file_size/1024;
      // new file size in KB

      // make file name in lower case
      $new_file_name = strtolower($file);
      // make file name in lower case

      $final_file=str_replace(' ','-',$new_file_name);

      if(move_uploaded_file($file_loc,$folder.$final_file))
      {
        $sql="INSERT INTO upload_location(file,type,size,location) VALUES('$final_file','$file_type','$new_size','$folder')";
        mysql_query($sql);
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

        // new file size in KB
        $new_size = $file_size/1024;
        // new file size in KB

        // make file name in lower case
        $new_file_name = strtolower($file);
        // make file name in lower case

        $final_file=str_replace(' ','-',$new_file_name);

        if(move_uploaded_file($file_loc,$folder.$final_file))
        {
          $sql="INSERT INTO upload_location(file,type,size,location) VALUES('$final_file','$file_type','$new_size','$folder')";
          mysql_query($sql);
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

          // new file size in KB
          $new_size = $file_size/1024;
          // new file size in KB

          // make file name in lower case
          $new_file_name = strtolower($file);
          // make file name in lower case

          $final_file=str_replace(' ','-',$new_file_name);

          if(move_uploaded_file($file_loc,$folder.$final_file))
          {
            $sql="INSERT INTO upload_location(file,type,size,location) VALUES('$final_file','$file_type','$new_size','$folder')";
            mysql_query($sql);
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
