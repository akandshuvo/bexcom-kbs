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
            <span class="mdl-layout-title">TECHNICAL HELP</span>
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
            <a href="#fixed-tab-1" class="mdl-layout__tab is-active">our satelite</a>
            <a href="#fixed-tab-2" class="mdl-layout__tab">dish antena</a>
            <a href="#fixed-tab-3" class="mdl-layout__tab">lnb</a>
            <a href="#fixed-tab-4" class="mdl-layout__tab">stb</a>
            <a href="#fixed-tab-5" class="mdl-layout__tab">remote</a>
            <a href="#fixed-tab-6" class="mdl-layout__tab">media cable</a>
            <a href="#fixed-tab-7" class="mdl-layout__tab">part of dish mast</a>
            <a href="#fixed-tab-8" class="mdl-layout__tab">broadcasting parameters</a>
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

<!--our satelite-->
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
                  $sql="SELECT * FROM upload_location WHERE location='../../docs/technical_help/our_satelite/'  ";
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
                            <a href="../docs/technical_help/our_satelite/<?php echo $row['file'] ?>" target="_blank">
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

<!--dish antena-->
        <section class="mdl-layout__tab-panel" id="fixed-tab-2">
          <div class="page-content">
              <!-- Your content goes here -->
              <div class="mdl-grid">
                  <div class="mdl-cell mdl-cell--4-col"></div>

                  <div class="mdl-cell mdl-cell--3-col">
                    <form class="" action="upload/technical_help_upload.php" method="post"  enctype="multipart/form-data">
                      <div class="file_upload">
                        <div class="file_upload_icon"><i class="material-icons">&#xE2C3;</i></div>
                        <input type="file" name="file" value="Upload">
                      </div>
                    </div>
                    <div class="mdl-cell mdl-cell--3-col">
                      <button type="submit" name="dish_antena"  class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">UPLOAD</button>
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
                  $sql="SELECT * FROM upload_location WHERE location='../../docs/technical_help/dish_antena/'  ";
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
                          <a href="../docs/technical_help/dish_antena/<?php echo $row['file'] ?>" target="_blank">
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

<!--lnb-->
        <section class="mdl-layout__tab-panel" id="fixed-tab-3">
          <div class="page-content">
              <!-- Your content goes here -->
              <div class="mdl-grid">
                  <div class="mdl-cell mdl-cell--4-col"></div>

                  <div class="mdl-cell mdl-cell--3-col">
                    <form class="" action="upload/technical_help_upload.php" method="post"  enctype="multipart/form-data">
                      <div class="file_upload">
                        <div class="file_upload_icon"><i class="material-icons">&#xE2C3;</i></div>
                        <input type="file" name="file" value="Upload">
                      </div>
                    </div>
                    <div class="mdl-cell mdl-cell--3-col">
                      <button type="submit" name="lnb"  class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">UPLOAD</button>
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
                  $sql="SELECT * FROM upload_location WHERE location='../../docs/technical_help/lnb/'  ";
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
                          <a href="../docs/technical_help/lnb/<?php echo $row['file'] ?>" target="_blank">
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

<!--stb-->
        <section class="mdl-layout__tab-panel" id="fixed-tab-4">
          <div class="page-content">
              <!-- Your content goes here -->
              <div class="mdl-grid">
                  <div class="mdl-cell mdl-cell--4-col"></div>

                  <div class="mdl-cell mdl-cell--3-col">
                    <form class="" action="upload/technical_help_upload.php" method="post"  enctype="multipart/form-data">
                      <div class="file_upload">
                        <div class="file_upload_icon"><i class="material-icons">&#xE2C3;</i></div>
                        <input type="file" name="file" value="Upload">
                      </div>
                    </div>
                    <div class="mdl-cell mdl-cell--3-col">
                      <button type="submit" name="stb"  class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">UPLOAD</button>
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
                  $sql="SELECT * FROM upload_location WHERE location='../../docs/technical_help/stb/'  ";
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
                          <a href="../docs/technical_help/stb/<?php echo $row['file'] ?>" target="_blank">
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

<!--remote-->
        <section class="mdl-layout__tab-panel" id="fixed-tab-5">
          <div class="page-content">
              <!-- Your content goes here -->
              <div class="mdl-grid">
                  <div class="mdl-cell mdl-cell--4-col"></div>

                  <div class="mdl-cell mdl-cell--3-col">
                    <form class="" action="upload/technical_help_upload.php" method="post"  enctype="multipart/form-data">
                      <div class="file_upload">
                        <div class="file_upload_icon"><i class="material-icons">&#xE2C3;</i></div>
                        <input type="file" name="file" value="Upload">
                      </div>
                    </div>
                    <div class="mdl-cell mdl-cell--3-col">
                      <button type="submit" name="remote"  class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">UPLOAD</button>
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
                  $sql="SELECT * FROM upload_location WHERE location='../../docs/technical_help/remote/'  ";
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
                          <a href="../docs/technical_help/remote/<?php echo $row['file'] ?>" target="_blank">
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

<!--media cable-->
        <section class="mdl-layout__tab-panel" id="fixed-tab-6">
          <div class="page-content">
              <!-- Your content goes here -->
              <div class="mdl-grid">
                  <div class="mdl-cell mdl-cell--4-col"></div>

                  <div class="mdl-cell mdl-cell--3-col">
                    <form class="" action="upload/technical_help_upload.php" method="post"  enctype="multipart/form-data">
                      <div class="file_upload">
                        <div class="file_upload_icon"><i class="material-icons">&#xE2C3;</i></div>
                        <input type="file" name="file" value="Upload">
                      </div>
                    </div>
                    <div class="mdl-cell mdl-cell--3-col">
                      <button type="submit" name="media_cable"  class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">UPLOAD</button>
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
                  $sql="SELECT * FROM upload_location WHERE location='../../docs/technical_help/media_cable/'  ";
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
                          <a href="../docs/technical_help/media_cable/<?php echo $row['file'] ?>" target="_blank">
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

<!--part of dish mast-->
        <section class="mdl-layout__tab-panel" id="fixed-tab-7">
          <div class="page-content">
              <!-- Your content goes here -->
              <div class="mdl-grid">
                  <div class="mdl-cell mdl-cell--4-col"></div>

                  <div class="mdl-cell mdl-cell--3-col">
                    <form class="" action="upload/technical_help_upload.php" method="post"  enctype="multipart/form-data">
                      <div class="file_upload">
                        <div class="file_upload_icon"><i class="material-icons">&#xE2C3;</i></div>
                        <input type="file" name="file" value="Upload">
                      </div>
                    </div>
                    <div class="mdl-cell mdl-cell--3-col">
                      <button type="submit" name="part_of_dish_mast"  class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">UPLOAD</button>
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
                  $sql="SELECT * FROM upload_location WHERE location='../../docs/technical_help/part_of_dish_mast/'  ";
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
                          <a href="../docs/technical_help/part_of_dish_mast/<?php echo $row['file'] ?>" target="_blank">
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

<!--broadcasting parammeters-->
        <section class="mdl-layout__tab-panel" id="fixed-tab-8">
          <div class="page-content">
              <!-- Your content goes here -->
              <div class="mdl-grid">
                  <div class="mdl-cell mdl-cell--4-col"></div>

                  <div class="mdl-cell mdl-cell--3-col">
                    <form class="" action="upload/technical_help_upload.php" method="post"  enctype="multipart/form-data">
                      <div class="file_upload">
                        <div class="file_upload_icon"><i class="material-icons">&#xE2C3;</i></div>
                        <input type="file" name="file" value="Upload">
                      </div>
                    </div>
                    <div class="mdl-cell mdl-cell--3-col">
                      <button type="submit" name="broadcasting_parameters"  class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">UPLOAD</button>
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
                  $sql="SELECT * FROM upload_location WHERE location='../../docs/technical_help/broadcasting_parameters/'  ";
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
                          <a href="../docs/technical_help/broadcasting_parameters/<?php echo $row['file'] ?>" target="_blank">
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
