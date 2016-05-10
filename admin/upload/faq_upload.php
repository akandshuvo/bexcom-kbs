<?php

include_once '../../dbconfig.php';



/*new real vu connection*/
  if(isset($_POST['new_real_vu_connection']))
  {

    $file =$_FILES['file']['name']."-".rand(1000,100000);
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $folder="../../docs/faq/new_real_vu_connection/";

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
          window.location.href='../faq.php';
          </script>
      <?php
    }
    else
    {
      ?>
      <script>
      alert('error while uploading file');
          window.location.href='../faq.php';
          </script>
      <?php
    }
  }



  /*pack*/
    if(isset($_POST['pack']))
    {

      $file =$_FILES['file']['name']."-".rand(1000,100000);
      $file_loc = $_FILES['file']['tmp_name'];
      $file_size = $_FILES['file']['size'];
      $file_type = $_FILES['file']['type'];
      $folder="../../docs/faq/pack/";

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
            window.location.href='../faq.php';
            </script>
        <?php
      }
      else
      {
        ?>
        <script>
        alert('error while uploading file');
            window.location.href='../faq.php';
            </script>
        <?php
      }
    }




    /*recharge_service*/
      if(isset($_POST['recharge_service']))
      {

        $file =$_FILES['file']['name']."-".rand(1000,100000);
        $file_loc = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $file_type = $_FILES['file']['type'];
        $folder="../../docs/faq/recharge_service/";

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
              window.location.href='../faq.php';
              </script>
          <?php
        }
        else
        {
          ?>
          <script>
          alert('error while uploading file');
              window.location.href='../faq.php';
              </script>
          <?php
        }
      }

      /*set top box and hardware*/
        if(isset($_POST['set_top_box_hardware']))
        {

          $file =$_FILES['file']['name']."-".rand(1000,100000);
          $file_loc = $_FILES['file']['tmp_name'];
          $file_size = $_FILES['file']['size'];
          $file_type = $_FILES['file']['type'];
          $folder="../../docs/faq/set_top_box_hardware/";

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
                window.location.href='../faq.php';
                </script>
            <?php
          }
          else
          {
            ?>
            <script>
            alert('error while uploading file');
                window.location.href='../faq.php';
                </script>
            <?php
          }
        }

 ?>
