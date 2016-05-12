<?php
session_start();
if(!isset($_SESSION['agent_id'])){
    header('location:../index.php');
}
  include_once '../dbconfig.php';
?>

<!doctype html>
<html lang=''>
<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BexCom</title>
    <!--::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
    <!--:::::::::::::STYLE SHEET::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../vendor/mdl/material.css">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/dialog-polyfill/0.4.2/dialog-polyfill.min.css'>
    <!--<link rel="stylesheet" href="https://code.getmdl.io/1.1.2/material.indigo-pink.min.css">-->
    <link rel="stylesheet" href="../css/master.css">
    <link rel="stylesheet" href="../css/dropdown.css">
    <!--:::::::::::::BOOTSTRAP::::::::::::::::::::-->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.css">
    <!--:::::::::::::BOOTSTRAP::::::::::::::::::::-->
    <!--::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
</head>
<body>
<!-- Always shows a header, even in smaller screens. -->
<!-- Simple header with fixed tabs. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header
            mdl-layout--fixed-tabs">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title">INSTALLATION GUIDE</span>
            <div class="mdl-layout-spacer"></div>
<!--USER NAME AFTER LOGIN-->
            <span class=""><?php echo $_SESSION['agent_name']?></span>
            <span><!-- Right aligned menu below button -->
                <button id="demo-menu-lower-right"
                        class="mdl-button mdl-js-button mdl-button--icon">
                    <i class="material-icons">more_vert</i>
                </button>

                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                    for="demo-menu-lower-right">
                    <li class="mdl-menu__item"><!-- Accent-colored raised button with ripple -->
                        <a href="../scripts/logout.php">
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary">
                             LOG OUT
                            </button>
                        </a>
                    </li>

                </ul>
            </span>
        </div>
        <!-- Tabs -->
        <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
            <a href="#fixed-tab-1" class="mdl-layout__tab is-active">html</a>
            <a href="#fixed-tab-2" class="mdl-layout__tab">pdf</a>
            <a href="#fixed-tab-3" class="mdl-layout__tab">ppt</a>
            <a href="#fixed-tab-4" class="mdl-layout__tab">video</a>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">BexCOM</span>
        <!-- Add spacer, to align navigation to the right -->
        <div class="mdl-layout-spacer"></div>
        <!-- Navigation -->
        <nav class="mdl-navigation">
            <?php
                include 'navigation.php';
            ?>
        </nav>
    </div>
    <main class="mdl-layout__content">

<!--html-->
        <section class="mdl-layout__tab-panel is-active" id="fixed-tab-1">
          <div class="page-content">
              <!-- Your content goes here -->
              <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
                  <table class="table table-bordered text-center">
                    <tr>
                      <td  class="table_header">File Name</td>
                      <td  class="table_header">File Type</td>
                      <td  class="table_header">Uploaded On</td>
                      <td  class="table_header">File Size(KB)</td>
                      <td  class="table_header">View</td>
                      <td  class="table_header">ACTION</td>
                    </tr>
                    <?php
                  $sql="SELECT * FROM upload_location WHERE location='../../docs/installation_guide/html/'  ";
                  $result_set=mysql_query($sql);
                  while($row=mysql_fetch_array($result_set))
                  {
                    ?>
                        <tr>
                          <td><?php echo $row['file'] ?></td>
                          <td><?php echo $row['type'] ?></td>
                          <td><?php echo $row['date'] ?></td>
                          <td><?php echo $row['size'] ?></td>
                          <td>
                            <a href="../docs/installation_guide/html/<?php echo $row['file'] ?>" target="_blank">
                              <button   class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">VIEW</button>
                            </a>
                          </td>
                        </tr>
                        <?php
                  }
                  ?>
                    </table>
                </div>
              </div>
          </div>
        </section>

<!--pdf-->
        <section class="mdl-layout__tab-panel" id="fixed-tab-2">
          <div class="page-content">
              <!-- Your content goes here -->
              <div class="mdl-grid">
                  <div class="mdl-cell mdl-cell--4-col"></div>

                  <div class="mdl-cell mdl-cell--3-col">
                    <form class="" action="upload/installation_guide_upload.php" method="post"  enctype="multipart/form-data">
                      <div class="file_upload">
                        <div class="file_upload_icon"><i class="material-icons">&#xE2C3;</i></div>
                        <input type="file" name="file" value="Upload">
                      </div>
                    </div>
                    <div class="mdl-cell mdl-cell--3-col">
                      <button type="submit" name="pdf"  class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">UPLOAD</button>
                    </div>
                  </form>
              </div>
              <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
                  <table class="table table-bordered text-center">
                    <tr>
                      <td  class="table_header">File Name</td>
                      <td  class="table_header">File Type</td>
                      <td  class="table_header">Uploaded On</td>
                      <td  class="table_header">File Size(KB)</td>
                      <td  class="table_header">View</td>
                      <td  class="table_header">ACTION</td>
                    </tr>
                    <?php
                  $sql="SELECT * FROM upload_location WHERE location='../../docs/installation_guide/pdf/'  ";
                  $result_set=mysql_query($sql);
                  while($row=mysql_fetch_array($result_set))
                  {
                    ?>
                        <tr>
                        <td><?php echo $row['file'] ?></td>
                        <td><?php echo $row['type'] ?></td>
                        <td><?php echo $row['date'] ?></td>
                        <td><?php echo $row['size'] ?></td>
                        <td>
                          <a href="../docs/installation_guide/pdf/<?php echo $row['file'] ?>" target="_blank">
                            <button   class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">VIEW</button>
                          </a>
                        </td>

                        </tr>
                        <?php
                  }
                  ?>
                    </table>
                </div>
              </div>
          </div>
        </section>

<!--ppt-->
        <section class="mdl-layout__tab-panel" id="fixed-tab-3">
          <div class="page-content">
              <!-- Your content goes here -->
              <div class="mdl-grid">
                  <div class="mdl-cell mdl-cell--4-col"></div>

                  <div class="mdl-cell mdl-cell--3-col">
                    <form class="" action="upload/installation_guide_upload.php" method="post"  enctype="multipart/form-data">
                      <div class="file_upload">
                        <div class="file_upload_icon"><i class="material-icons">&#xE2C3;</i></div>
                        <input type="file" name="file" value="Upload">
                      </div>
                    </div>
                    <div class="mdl-cell mdl-cell--3-col">
                      <button type="submit" name="ppt"  class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">UPLOAD</button>
                    </div>
                  </form>
              </div>
              <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
                  <table class="table table-bordered text-center">
                    <tr>
                      <td  class="table_header">File Name</td>
                      <td  class="table_header">File Type</td>
                      <td  class="table_header">Uploaded On</td>
                      <td  class="table_header">File Size(KB)</td>
                      <td  class="table_header">View</td>
                      <td  class="table_header">ACTION</td>
                    </tr>
                    <?php
                  $sql="SELECT * FROM upload_location WHERE location='../../docs/installation_guide/ppt/'  ";
                  $result_set=mysql_query($sql);
                  while($row=mysql_fetch_array($result_set))
                  {
                    ?>
                        <tr>
                        <td><?php echo $row['file'] ?></td>
                        <td><?php echo $row['type'] ?></td>
                        <td><?php echo $row['date'] ?></td>
                        <td><?php echo $row['size'] ?></td>
                        <td>
                          <a href="../docs/installation_guide/ppt/<?php echo $row['file'] ?>" target="_blank">
                            <button   class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">VIEW</button>
                          </a>
                        </td>
                        <td>
                          <button  type="button" class="show-modal mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored mdl-js-ripple-effect">
                            <i class="material-icons">&#xE92B;</i>
                          </button>
                          <dialog class="mdl-dialog">
                            <div class="mdl-dialog__content">
                              <h3>ARE YOU SURE?</h3><br>
                              <button type="button"  onclick="deletedata('<?php echo $row['id'] ?>')" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">DELETE</button>
                              <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored exit">close</button>
                            </div>
                          </dialog>
                        </td>
                        </tr>
                        <?php
                  }
                  ?>
                    </table>
                </div>
              </div>
          </div>
        </section>

<!--video-->
        <section class="mdl-layout__tab-panel" id="fixed-tab-4">
          <div class="page-content">
              <!-- Your content goes here -->
              <div class="mdl-grid">
                  <div class="mdl-cell mdl-cell--4-col"></div>

                  <div class="mdl-cell mdl-cell--3-col">
                    <form class="" action="upload/installation_guide_upload.php" method="post"  enctype="multipart/form-data">
                      <div class="file_upload">
                        <div class="file_upload_icon"><i class="material-icons">&#xE2C3;</i></div>
                        <input type="file" name="file" value="Upload">
                      </div>
                    </div>
                    <div class="mdl-cell mdl-cell--3-col">
                      <button type="submit" name="video"  class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">UPLOAD</button>
                    </div>
                  </form>
              </div>
              <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
                  <table class="table table-bordered text-center">
                    <tr>
                      <td  class="table_header">File Name</td>
                      <td  class="table_header">File Type</td>
                      <td  class="table_header">Uploaded On</td>
                      <td  class="table_header">File Size(KB)</td>
                      <td  class="table_header">View</td>
                      <td  class="table_header">ACTION</td>
                    </tr>
                    <?php
                  $sql="SELECT * FROM upload_location WHERE location='../../docs/installation_guide/video/'  ";
                  $result_set=mysql_query($sql);
                  while($row=mysql_fetch_array($result_set))
                  {
                    ?>
                        <tr>
                        <td><?php echo $row['file'] ?></td>
                        <td><?php echo $row['type'] ?></td>
                        <td><?php echo $row['date'] ?></td>
                        <td><?php echo $row['size'] ?></td>
                        <td>
                          <a href="../docs/installation_guide/video/<?php echo $row['file'] ?>" target="_blank">
                            <button   class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">VIEW</button>
                          </a>
                        </td>
                        <td>
                          <button  type="button" class="show-modal mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored mdl-js-ripple-effect">
                            <i class="material-icons">&#xE92B;</i>
                          </button>
                          <dialog class="mdl-dialog">
                            <div class="mdl-dialog__content">
                              <h3>ARE YOU SURE?</h3><br>
                              <button type="button"  onclick="deletedata('<?php echo $row['id'] ?>')" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">DELETE</button>
                              <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored exit">close</button>
                            </div>
                          </dialog>
                        </td>
                        </tr>
                        <?php
                  }
                  ?>
                    </table>
                </div>
              </div>
          </div>
        </section>


    </main>
</div>


<!--:::::::::::::SCRIPTS::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="../scripts/dropdown.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/dialog-polyfill/0.4.2/dialog-polyfill.min.js'></script>
<script src="../vendor/mdl/material.js"></script>


<script type="text/javascript">
  var dialog = document.querySelector('dialog');
  var showModalButton = document.querySelector('.show-modal');
  if (! dialog.showModal) {
    dialogPolyfill.registerDialog(dialog);
  }
  showModalButton.addEventListener('click', function() {
    dialog.showModal();
  });
  dialog.querySelector('.exit').addEventListener('click', function() {
    dialog.close();
  });
</script>


<script type="text/javascript">
//DELETE DATA FROM DATABASE
  function deletedata(str){
  var id = str;
  $.ajax({
   type: "GET",
   url: "delete/delete.php?id="+id
  }).done(function( data ) {
  $('#info').html(data);
  viewdata();
  });
  document.location.reload(true);
  }
</script>

</body>
<html>
