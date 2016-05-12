<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DELETE</title>
    <link rel="stylesheet" href="../../vendor/bootstrap/css/bootstrap.css">
  </head>
  <body>
    <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "bexcom";
      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

        if(isset($_GET['id'])){
        $stmt = $conn->prepare("delete from notice where id=?");
        $stmt->bind_param('s', $id);
        $id = $_GET['id'];
        if($stmt->execute()){
        ?>
        <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Success!</strong>
        </div>
        <?php
        } else{
        ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Error!</strong>
        </div>
        <?php
        }
        } else{
        ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Warning!</strong>
        </div>
        <?php
        }
     ?>


     <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
     <script src="../../scripts/dropdown.js"></script>
     <script src="../../vendor/bootstrap/js/bootstrap.js"></script>
  </body>
</html>
