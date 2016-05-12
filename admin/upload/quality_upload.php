<?php

include_once '../../dbconfig.php';



/*inbound*/
if(isset($_POST['inbound']))
{

  $file =date("H i s")."-".$_FILES['file']['name'];
  $file_loc = $_FILES['file']['tmp_name'];
  $file_size = $_FILES['file']['size'];
  $file_type = $_FILES['file']['type'];
  $folder="../../docs/quality_guideline/inbound/";
  $root="quality_guideline";
  $sub_root="inbound";

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
        window.location.href='../quality.php';
        </script>
    <?php
  }
  else
  {
    ?>
    <script>
    alert('error while uploading file');
        window.location.href='../quality.php';
        </script>
    <?php
  }
}


/*outbound*/
if(isset($_POST['outbound']))
{

  $file =date("H i s")."-".$_FILES['file']['name'];
  $file_loc = $_FILES['file']['tmp_name'];
  $file_size = $_FILES['file']['size'];
  $file_type = $_FILES['file']['type'];
  $folder="../../docs/quality_guideline/outbound/";
  $root="quality_guideline";
  $sub_root="outbound";

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
        window.location.href='../quality.php';
        </script>
    <?php
  }
  else
  {
    ?>
    <script>
    alert('error while uploading file');
        window.location.href='../quality.php';
        </script>
    <?php
  }
}



/*sales*/
if(isset($_POST['sales']))
{

  $file =date("H i s")."-".$_FILES['file']['name'];
  $file_loc = $_FILES['file']['tmp_name'];
  $file_size = $_FILES['file']['size'];
  $file_type = $_FILES['file']['type'];
  $folder="../../docs/quality_guideline/sales/";
  $root="quality_guideline";
  $sub_root="sales";

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
        window.location.href='../quality.php';
        </script>
    <?php
  }
  else
  {
    ?>
    <script>
    alert('error while uploading file');
        window.location.href='../quality.php';
        </script>
    <?php
  }
}



/*promotion*/
if(isset($_POST['promotion']))
{

  $file =date("H i s")."-".$_FILES['file']['name'];
  $file_loc = $_FILES['file']['tmp_name'];
  $file_size = $_FILES['file']['size'];
  $file_type = $_FILES['file']['type'];
  $folder="../../docs/quality_guideline/promotion/";
  $root="quality_guideline";
  $sub_root="promotion";

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
        window.location.href='../quality.php';
        </script>
    <?php
  }
  else
  {
    ?>
    <script>
    alert('error while uploading file');
        window.location.href='../quality.php';
        </script>
    <?php
  }
}



/*up sales*/
if(isset($_POST['up_sales']))
{

  $file =date("H i s")."-".$_FILES['file']['name'];
  $file_loc = $_FILES['file']['tmp_name'];
  $file_size = $_FILES['file']['size'];
  $file_type = $_FILES['file']['type'];
  $folder="../../docs/quality_guideline/up_sales/";
  $root="quality_guideline";
  $sub_root="up_sales";
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
        window.location.href='../quality.php';
        </script>
    <?php
  }
  else
  {
    ?>
    <script>
    alert('error while uploading file');
        window.location.href='../quality.php';
        </script>
    <?php
  }
}



/*cross_sales*/
if(isset($_POST['cross_sales']))
{

  $file =date("H i s")."-".$_FILES['file']['name'];
  $file_loc = $_FILES['file']['tmp_name'];
  $file_size = $_FILES['file']['size'];
  $file_type = $_FILES['file']['type'];
  $folder="../../docs/quality_guideline/cross_sales/";
  $root="quality_guideline";
  $sub_root="cross_sales";
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
        window.location.href='../quality.php';
        </script>
    <?php
  }
  else
  {
    ?>
    <script>
    alert('error while uploading file');
        window.location.href='../quality.php';
        </script>
    <?php
  }
}




/*Social Media*/
if(isset($_POST['social_media']))
{

  $file =date("H i s")."-".$_FILES['file']['name'];
  $file_loc = $_FILES['file']['tmp_name'];
  $file_size = $_FILES['file']['size'];
  $file_type = $_FILES['file']['type'];
  $folder="../../docs/quality_guideline/social_media/";
  $root="quality_guideline";
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
        window.location.href='../quality.php';
        </script>
    <?php
  }
  else
  {
    ?>
    <script>
    alert('error while uploading file');
        window.location.href='../quality.php';
        </script>
    <?php
  }
}


 ?>
