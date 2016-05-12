<?php

include_once '../../dbconfig.php';


/*bank*/
if(isset($_POST['bank']))
{

  $file =$_FILES['file']['name']."-".rand(1000,100000);
  $file_loc = $_FILES['file']['tmp_name'];
  $file_size = $_FILES['file']['size'];
  $file_type = $_FILES['file']['type'];
  $folder="../../docs/recharge_guideline/bank/";
  $root="recharge_guideline";
  $sub_root="bank";

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
        window.location.href='../recharge.php';
        </script>
    <?php
  }
  else
  {
    ?>
    <script>
    alert('error while uploading file');
        window.location.href='../recharge.php';
        </script>
    <?php
  }
}

/*scratch_card*/
if(isset($_POST['scratch_card']))
{

  $file =$_FILES['file']['name']."-".rand(1000,100000);
  $file_loc = $_FILES['file']['tmp_name'];
  $file_size = $_FILES['file']['size'];
  $file_type = $_FILES['file']['type'];
  $folder="../../docs/recharge_guideline/scratch_card/";
  $root="recharge_guideline";
  $sub_root="scratch_card";

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
        window.location.href='../recharge.php';
        </script>
    <?php
  }
  else
  {
    ?>
    <script>
    alert('error while uploading file');
        window.location.href='../recharge.php';
        </script>
    <?php
  }
}


/*mfs*/
if(isset($_POST['mfs']))
{

  $file =$_FILES['file']['name']."-".rand(1000,100000);
  $file_loc = $_FILES['file']['tmp_name'];
  $file_size = $_FILES['file']['size'];
  $file_type = $_FILES['file']['type'];
  $folder="../../docs/recharge_guideline/mfs/";
  $root="recharge_guideline";
  $sub_root="mfs";

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
        window.location.href='../recharge.php';
        </script>
    <?php
  }
  else
  {
    ?>
    <script>
    alert('error while uploading file');
        window.location.href='../recharge.php';
        </script>
    <?php
  }
}


/*others*/
if(isset($_POST['others']))
{

  $file =$_FILES['file']['name']."-".rand(1000,100000);
  $file_loc = $_FILES['file']['tmp_name'];
  $file_size = $_FILES['file']['size'];
  $file_type = $_FILES['file']['type'];
  $folder="../../docs/recharge_guideline/others/";
  $root="recharge_guideline";
  $sub_root="others";

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
        window.location.href='../recharge.php';
        </script>
    <?php
  }
  else
  {
    ?>
    <script>
    alert('error while uploading file');
        window.location.href='../recharge.php';
        </script>
    <?php
  }
}

 ?>
