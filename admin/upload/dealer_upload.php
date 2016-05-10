<?php

include_once '../../dbconfig.php';



/*location*/
  if(isset($_POST['location']))
  {

    $file =$_FILES['file']['name']."-".rand(1000,100000);
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $folder="../../docs/dealer/location/";

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
          window.location.href='../dealer.php';
          </script>
      <?php
    }
    else
    {
      ?>
      <script>
      alert('error while uploading file');
          window.location.href='../retailer.php';
          </script>
      <?php
    }
  }

/*Activation Model*/
  if(isset($_POST['activation_model']))
  {

    $file =$_FILES['file']['name']."-".rand(1000,100000);
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $folder="../../docs/dealer/activation_model/";

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
          window.location.href='../dealer.php';
          </script>
      <?php
    }
    else
    {
      ?>
      <script>
      alert('error while uploading file');
          window.location.href='../retailer.php';
          </script>
      <?php
    }
  }




/*FLow Chart*/
  if(isset($_POST['flow_chart']))
  {

    $file =$_FILES['file']['name']."-".rand(1000,100000);
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $folder="../../docs/dealer/flow_chart/";

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
          window.location.href='../dealer.php';
          </script>
      <?php
    }
    else
    {
      ?>
      <script>
      alert('error while uploading file');
          window.location.href='../retailer.php';
          </script>
      <?php
    }
  }


/*DashBoard*/
  if(isset($_POST['dashboard']))
  {

    $file =$_FILES['file']['name']."-".rand(1000,100000);
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $folder="../../docs/dealer/dashboard/";

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
          window.location.href='../dealer.php';
          </script>
      <?php
    }
    else
    {
      ?>
      <script>
      alert('error while uploading file');
          window.location.href='../retailer.php';
          </script>
      <?php
    }
  }
 ?>
