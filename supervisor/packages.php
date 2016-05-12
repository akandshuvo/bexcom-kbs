<?php
session_start();
if(!isset($_SESSION['admin_id'])){
    header('location:../index.php');
}
?>
<?php
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
  <link rel='stylesheet prefetch' href='../css/dialog-polyfill.min.css'>
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
            <span class="mdl-layout-title">PACKAGES</span>
            <div class="mdl-layout-spacer"></div>
<!--USER NAME AFTER LOGIN-->
            <span class=""><?php echo $_SESSION['admin_name']?></span>
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
            <a href="#fixed-tab-1" class="mdl-layout__tab is-active">Packs 1&2</a>
            <a href="#fixed-tab-2" class="mdl-layout__tab">Price</a>
            <a href="#fixed-tab-3" class="mdl-layout__tab">channel</a>
            <a href="#fixed-tab-4" class="mdl-layout__tab">add ons</a>
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
<!--Packs 1 and 2-->
        <section class="mdl-layout__tab-panel is-active" id="fixed-tab-1">
          <div class="page-content">
              <!-- Your content goes here -->
              <div class="mdl-grid">
                  <div class="mdl-cell mdl-cell--4-col"></div>

                  <div class="mdl-cell mdl-cell--3-col">
                    <form class="" action="upload/packages_upload.php" method="post"  enctype="multipart/form-data">
                      <div class="file_upload">
                        <div class="file_upload_icon"><i class="material-icons">&#xE2C3;</i></div>
                        <input type="file" name="file" value="Upload">
                      </div>
                    </div>
                    <div class="mdl-cell mdl-cell--3-col">
                      <button type="submit" name="packs"  class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">UPLOAD</button>
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
                  $sql="SELECT * FROM upload_location WHERE location='../../docs/package/packs_1&2/'  ";
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
                          <a href="../docs/package/packs_1&2/<?php echo $row['file'] ?>" target="_blank">
                            <button   class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">VIEW</button>
                          </a>
                        </td>
                        <td>
                          <button  type="button" class="show-modal<?php echo $row['id']?> mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored mdl-js-ripple-effect">
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
                  include 'delete_modal.php';}
                  ?>
                    </table>
                </div>
              </div>
          </div>
        </section>

<!--price-->
        <section class="mdl-layout__tab-panel" id="fixed-tab-2">
          <div class="page-content">
              <!-- Your content goes here -->
              <div class="mdl-grid">
                  <div class="mdl-cell mdl-cell--4-col"></div>

                  <div class="mdl-cell mdl-cell--3-col">
                    <form class="" action="upload/packages_upload.php" method="post"  enctype="multipart/form-data">
                      <div class="file_upload">
                        <div class="file_upload_icon"><i class="material-icons">&#xE2C3;</i></div>
                        <input type="file" name="file" value="Upload">
                      </div>
                    </div>
                    <div class="mdl-cell mdl-cell--3-col">
                      <button type="submit" name="price"  class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">UPLOAD</button>
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
                  $sql="SELECT * FROM upload_location WHERE location='../../docs/package/price/'  ";
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
                          <a href="../docs/package/price/<?php echo $row['file'] ?>" target="_blank">
                            <button   class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">VIEW</button>
                          </a>
                        </td>
                        <td>
                          <button  type="button" class="show-modal<?php echo $row['id']?> mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored mdl-js-ripple-effect">
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
                  include 'delete_modal.php';}
                  ?>
                    </table>
                </div>
              </div>
          </div>
        </section>
<!--channel-->
        <section class="mdl-layout__tab-panel" id="fixed-tab-3">
          <div class="page-content">
              <!-- Your content goes here -->
              <div class="mdl-grid">
                  <div class="mdl-cell mdl-cell--4-col"></div>

                  <div class="mdl-cell mdl-cell--3-col">
                    <form class="" action="upload/packages_upload.php" method="post"  enctype="multipart/form-data">
                      <div class="file_upload">
                        <div class="file_upload_icon"><i class="material-icons">&#xE2C3;</i></div>
                        <input type="file" name="file" value="Upload">
                      </div>
                    </div>
                    <div class="mdl-cell mdl-cell--3-col">
                      <button type="submit" name="channel"  class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">UPLOAD</button>
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
                  $sql="SELECT * FROM upload_location WHERE location='../../docs/package/channel/'  ";
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
                          <a href="../docs/package/channel/<?php echo $row['file'] ?>" target="_blank">
                            <button   class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">VIEW</button>
                          </a>
                        </td>
                        <td>
                          <button  type="button" class="show-modal<?php echo $row['id']?> mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored mdl-js-ripple-effect">
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
                include 'delete_modal.php';  }
                  ?>
                    </table>
                </div>
              </div>
          </div>
        </section>
<!--add ons-->
        <section class="mdl-layout__tab-panel" id="fixed-tab-4">
          <div class="page-content">
              <!-- Your content goes here -->
              <div class="mdl-grid">
                  <div class="mdl-cell mdl-cell--4-col"></div>

                  <div class="mdl-cell mdl-cell--3-col">
                    <form class="" action="upload/packages_upload.php" method="post"  enctype="multipart/form-data">
                      <div class="file_upload">
                        <div class="file_upload_icon"><i class="material-icons">&#xE2C3;</i></div>
                        <input type="file" name="file" value="Upload">
                      </div>
                    </div>
                    <div class="mdl-cell mdl-cell--3-col">
                      <button type="submit" name="add_ons"  class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">UPLOAD</button>
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
                  $sql="SELECT * FROM upload_location WHERE location='../../docs/package/add_ons/'  ";
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
                          <a href="../docs/package/add_ons/<?php echo $row['file'] ?>" target="_blank">
                            <button   class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">VIEW</button>
                          </a>
                        </td>
                        <td>
                          <button  type="button" class="show-modal<?php echo $row['id']?> mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored mdl-js-ripple-effect">
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
                include 'delete_modal.php';  }
                  ?>
                    </table>
                </div>
              </div>
          </div>
        </section>

    </main>
</div>


<!--:::::::::::::SCRIPTS::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
<script src="../scripts/jquery-latest.min.js" type="text/javascript"></script>
<script src="../scripts/dropdown.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.js"></script>
<script src='../scripts/dialog-polyfill.min.js'></script>
<script src="../vendor/mdl/material.js"></script>



</body>
<html>
