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

  /*new product*/
    if(isset($_POST['new_product']))
    {

      $file =date("H i s")."-".$_FILES['file']['name'];
      $file_loc = $_FILES['file']['tmp_name'];
      $file_size = $_FILES['file']['size'];
      $file_type = $_FILES['file']['type'];
      $folder="../../docs/update/new_product/";
      $root="update";
      $sub_root="new_product";

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
            window.location.href='../update.php';
            </script>
        <?php
      }
      else
      {
        ?>
        <script>
        alert('error while uploading file');
            window.location.href='../update.php';
            </script>
        <?php
      }
    }



    /*price change*/
      if(isset($_POST['price_change']))
      {

        $file =date("H i s")."-".$_FILES['file']['name'];
        $file_loc = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $file_type = $_FILES['file']['type'];
        $folder="../../docs/update/price_change/";
        $root="update";
        $sub_root="price_change";

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
              window.location.href='../update.php';
              </script>
          <?php
        }
        else
        {
          ?>
          <script>
          alert('error while uploading file');
              window.location.href='../update.php';
              </script>
          <?php
        }
      }



  /*Promotion*/
        if(isset($_POST['promotion']))
        {

          $file =date("H i s")."-".$_FILES['file']['name'];
          $file_loc = $_FILES['file']['tmp_name'];
          $file_size = $_FILES['file']['size'];
          $file_type = $_FILES['file']['type'];
          $folder="../../docs/update/promotion/";
          $root="update";
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
                window.location.href='../update.php';
                </script>
            <?php
          }
          else
          {
            ?>
            <script>
            alert('error while uploading file');
                window.location.href='../update.php';
                </script>
            <?php
          }
        }



/*relevant Information*/
          if(isset($_POST['relevant_information']))
          {

            $file =date("H i s")."-".$_FILES['file']['name'];
            $file_loc = $_FILES['file']['tmp_name'];
            $file_size = $_FILES['file']['size'];
            $file_type = $_FILES['file']['type'];
            $folder="../../docs/update/relevant_information/";
            $root="update";
            $sub_root="relevant_information";

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
                  window.location.href='../update.php';
                  </script>
              <?php
            }
            else
            {
              ?>
              <script>
              alert('error while uploading file');
                  window.location.href='../update.php';
                  </script>
              <?php
            }
          }

 ?>
