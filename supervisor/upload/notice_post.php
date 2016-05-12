<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php

    include_once '../../dbconfig.php';



    /*Retailer Location*/
    if(isset($_POST['notice']))
    {
        $title=$_POST['title'];
        $description=$_POST['description'];


        $sql="INSERT INTO notice (title,description) VALUES('$title','$description')";
        mysql_query($sql);
        ?>
        <script>
        alert('successfully uploaded');
            window.location.href='../notice.php';
            </script>
        <?php
      }


      else
        {
          ?>
          <script>
          alert('error while uploading file');
              window.location.href='../notice.php';
              </script>
          <?php
        }





   ?>
  </body>
</html>
