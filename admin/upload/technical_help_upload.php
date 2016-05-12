<?php

include_once '../../dbconfig.php';

/*our_satelite*/
    if(isset($_POST['our_satelite']))
      {

        $file =$_FILES['file']['name']."-".rand(1000,100000);
        $file_loc = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $file_type = $_FILES['file']['type'];
        $folder="../../docs/technical_help/our_satelite/";
        $root="technical_help";
        $sub_root="our_satelite";

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
              window.location.href='../technical_help.php';
              </script>
          <?php
        }
        else
        {
          ?>
          <script>
          alert('error while uploading file');
              window.location.href='../technical_help.php';
              </script>
          <?php
        }
      }


/*dish_antena*/
  if(isset($_POST['dish_antena']))
  {

    $file =$_FILES['file']['name']."-".rand(1000,100000);
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $folder="../../docs/technical_help/dish_antena/";
    $root="technical_help";
    $sub_root="dish_antena";

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
          window.location.href='../technical_help.php';
          </script>
      <?php
    }
    else
    {
      ?>
      <script>
      alert('error while uploading file');
          window.location.href='../technical_help.php';
          </script>
      <?php
    }
  }



/*lnb*/
    if(isset($_POST['lnb']))
    {

      $file =$_FILES['file']['name']."-".rand(1000,100000);
      $file_loc = $_FILES['file']['tmp_name'];
      $file_size = $_FILES['file']['size'];
      $file_type = $_FILES['file']['type'];
      $folder="../../docs/technical_help/lnb/";
      $root="technical_help";
      $sub_root="lnb";

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
            window.location.href='../technical_help.php';
            </script>
        <?php
      }
      else
      {
        ?>
        <script>
        alert('error while uploading file');
            window.location.href='../technical_help.php';
            </script>
        <?php
      }
    }


/*stb*/
    if(isset($_POST['stb']))
    {

      $file =$_FILES['file']['name']."-".rand(1000,100000);
      $file_loc = $_FILES['file']['tmp_name'];
      $file_size = $_FILES['file']['size'];
      $file_type = $_FILES['file']['type'];
      $folder="../../docs/technical_help/stb/";
      $root="technical_help";
      $sub_root="stb";

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
            window.location.href='../technical_help.php';
            </script>
        <?php
      }
      else
      {
        ?>
        <script>
        alert('error while uploading file');
            window.location.href='../technical_help.php';
            </script>
        <?php
      }
    }


/*remote*/
    if(isset($_POST['remote']))
    {

      $file =$_FILES['file']['name']."-".rand(1000,100000);
      $file_loc = $_FILES['file']['tmp_name'];
      $file_size = $_FILES['file']['size'];
      $file_type = $_FILES['file']['type'];
      $folder="../../docs/technical_help/remote/";
      $root="technical_help";
      $sub_root="remote";

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
            window.location.href='../technical_help.php';
            </script>
        <?php
      }
      else
      {
        ?>
        <script>
        alert('error while uploading file');
            window.location.href='../technical_help.php';
            </script>
        <?php
      }
    }



/*media_cable*/
      if(isset($_POST['media_cable']))
      {

        $file =$_FILES['file']['name']."-".rand(1000,100000);
        $file_loc = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $file_type = $_FILES['file']['type'];
        $folder="../../docs/technical_help/media_cable/";
        $root="technical_help";
        $sub_root="media_cable";

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
              window.location.href='../technical_help.php';
              </script>
          <?php
        }
        else
        {
          ?>
          <script>
          alert('error while uploading file');
              window.location.href='../technical_help.php';
              </script>
          <?php
        }
      }


/*part_of_dish_mast*/
        if(isset($_POST['part_of_dish_mast']))
        {

          $file =$_FILES['file']['name']."-".rand(1000,100000);
          $file_loc = $_FILES['file']['tmp_name'];
          $file_size = $_FILES['file']['size'];
          $file_type = $_FILES['file']['type'];
          $folder="../../docs/technical_help/part_of_dish_mast/";
          $root="technical_help";
          $sub_root="part_of_dish_mast";

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
                window.location.href='../technical_help.php';
                </script>
            <?php
          }
          else
          {
            ?>
            <script>
            alert('error while uploading file');
                window.location.href='../technical_help.php';
                </script>
            <?php
          }
        }

/*broadcasting_parammeters*/
        if(isset($_POST['broadcasting_parameters']))
        {

          $file =$_FILES['file']['name']."-".rand(1000,100000);
          $file_loc = $_FILES['file']['tmp_name'];
          $file_size = $_FILES['file']['size'];
          $file_type = $_FILES['file']['type'];
          $folder="../../docs/technical_help/broadcasting_parameters/";
          $root="technical_help";
          $sub_root="broadcasting_parameters";

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
                window.location.href='../technical_help.php';
                </script>
            <?php
          }
          else
          {
            ?>
            <script>
            alert('error while uploading file');
                window.location.href='../technical_help.php';
                </script>
            <?php
          }
        }

 ?>
