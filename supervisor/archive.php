<?php
  session_start();
  if(!isset($_SESSION['admin_id'])){
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
    <link rel='stylesheet prefetch' href='../css/dialog-polyfill.min.css'>
    <!--<link rel="stylesheet" href="https://code.getmdl.io/1.1.2/material.indigo-pink.min.css">-->
    <link rel="stylesheet" href="../css/master.css">
    <link rel="stylesheet" href="../css/dropdown.css">
    <!--:::::::::::::BOOTSTRAP::::::::::::::::::::-->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.css">
    <!--:::::::::::::BOOTSTRAP::::::::::::::::::::-->
    <!--::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
    <style>
        body{
            background:;
            width: 100%;
            height: 100%;
            position: fixed;
        }
    </style>
</head>
<body>

<!-- Always shows a header, even in smaller screens. -->
<!-- Simple header with fixed tabs. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header
            mdl-layout--fixed-tabs">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title">ARCHIVE</span>
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
            <a href="#fixed-tab-1" class="mdl-layout__tab is-active">ALL FILE LOCATION IN ONE PAGE</a>
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
        <section class="mdl-layout__tab-panel is-active" id="fixed-tab-1">
          <div class="page-content">
              <!-- Your content goes here -->
              <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
                  <div class="archive">
                    About DTH
                  </div><br>
                  <table class="table table-bordered text-center">
                    <tr>
                      <td  class="table_header">File Name</td>
                      <td  class="table_header">File Type</td>
                      <td  class="table_header">Uploaded On</td>
                      <td  class="table_header">Sub Folder</td>
                      <td  class="table_header">View</td>
                      <td  class="table_header">ACTION</td>
                    </tr>
                    <?php
                  $sql="SELECT * FROM archive WHERE root='dth'  ";
                  $result_set=mysql_query($sql);
                  while($row=mysql_fetch_array($result_set))
                  {
                    ?>
                        <tr>
                          <td><?php echo $row['file'] ?></td>
                          <td><?php echo $row['type'] ?></td>
                          <td><?php echo $row['date'] ?></td>
                          <td><?php echo $row['sub_root'] ?></td>
                          <td>
                            <a href="bexcom-kbs/<?php echo $row['location']; echo $row['file'] ?>" target="_blank">
                              <button   class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">VIEW</button>
                            </a>
                          </td>
                          <td>
                            <button  type="button" id="modal <?php echo $row['id']?>" class="show-modal<?php echo $row['id']?> mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored mdl-js-ripple-effect">
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
                  include 'delete_modal_archive.php';}
                  ?>
                    </table>
                </div>


                <div class="mdl-cell mdl-cell--12-col">
                  <div class="archive">
                    Packages
                  </div><br>
                  <table class="table table-bordered text-center">
                    <tr>
                      <td  class="table_header">File Name</td>
                      <td  class="table_header">File Type</td>
                      <td  class="table_header">Uploaded On</td>
                      <td  class="table_header">Sub Folder</td>
                      <td  class="table_header">View</td>
                      <td  class="table_header">ACTION</td>
                    </tr>
                    <?php
                  $sql="SELECT * FROM archive WHERE root='package'  ";
                  $result_set=mysql_query($sql);
                  while($row=mysql_fetch_array($result_set))
                  {
                    ?>
                        <tr>
                          <td><?php echo $row['file'] ?></td>
                          <td><?php echo $row['type'] ?></td>
                          <td><?php echo $row['date'] ?></td>
                          <td><?php echo $row['sub_root'] ?></td>
                          <td>
                            <a href="bexcom-kbs/<?php echo $row['location']; echo $row['file'] ?>" target="_blank">
                              <button   class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">VIEW</button>
                            </a>
                          </td>
                          <td>
                            <button  type="button" id="modal <?php echo $row['id']?>" class="show-modal<?php echo $row['id']?> mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored mdl-js-ripple-effect">
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
                  include 'delete_modal_archive.php';}
                  ?>
                    </table>
                </div>


                <div class="mdl-cell mdl-cell--12-col">
                  <div class="archive">
                    Offer
                  </div><br>
                  <table class="table table-bordered text-center">
                    <tr>
                      <td  class="table_header">File Name</td>
                      <td  class="table_header">File Type</td>
                      <td  class="table_header">Uploaded On</td>
                      <td  class="table_header">Sub Folder</td>
                      <td  class="table_header">View</td>
                      <td  class="table_header">ACTION</td>
                    </tr>
                    <?php
                  $sql="SELECT * FROM archive WHERE root='offer'  ";
                  $result_set=mysql_query($sql);
                  while($row=mysql_fetch_array($result_set))
                  {
                    ?>
                        <tr>
                          <td><?php echo $row['file'] ?></td>
                          <td><?php echo $row['type'] ?></td>
                          <td><?php echo $row['date'] ?></td>
                          <td><?php echo $row['sub_root'] ?></td>
                          <td>
                            <a href="bexcom-kbs/<?php echo $row['location']; echo $row['file'] ?>" target="_blank">
                              <button   class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">VIEW</button>
                            </a>
                          </td>
                          <td>
                            <button  type="button" id="modal <?php echo $row['id']?>" class="show-modal<?php echo $row['id']?> mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored mdl-js-ripple-effect">
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
                  include 'delete_modal_archive.php';}
                  ?>
                    </table>
                </div>


                <div class="mdl-cell mdl-cell--12-col">
                  <div class="archive">
                    Retailer Location
                  </div><br>
                  <table class="table table-bordered text-center">
                    <tr>
                      <td  class="table_header">File Name</td>
                      <td  class="table_header">File Type</td>
                      <td  class="table_header">Uploaded On</td>
                      <td  class="table_header">Sub Folder</td>
                      <td  class="table_header">View</td>
                      <td  class="table_header">ACTION</td>
                    </tr>
                    <?php
                  $sql="SELECT * FROM archive WHERE root='retailer_location'  ";
                  $result_set=mysql_query($sql);
                  while($row=mysql_fetch_array($result_set))
                  {
                    ?>
                        <tr>
                          <td><?php echo $row['file'] ?></td>
                          <td><?php echo $row['type'] ?></td>
                          <td><?php echo $row['date'] ?></td>
                          <td><?php echo $row['sub_root'] ?></td>
                          <td>
                            <a href="bexcom-kbs/<?php echo $row['location']; echo $row['file'] ?>" target="_blank">
                              <button   class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">VIEW</button>
                            </a>
                          </td>
                          <td>
                            <button  type="button" id="modal <?php echo $row['id']?>" class="show-modal<?php echo $row['id']?> mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored mdl-js-ripple-effect">
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
                  include 'delete_modal_archive.php';}
                  ?>
                    </table>
                </div>


                <div class="mdl-cell mdl-cell--12-col">
                  <div class="archive">
                    After Sale Service Location
                  </div><br>
                  <table class="table table-bordered text-center">
                    <tr>
                      <td  class="table_header">File Name</td>
                      <td  class="table_header">File Type</td>
                      <td  class="table_header">Uploaded On</td>
                      <td  class="table_header">Sub Folder</td>
                      <td  class="table_header">View</td>
                      <td  class="table_header">ACTION</td>
                    </tr>
                    <?php
                  $sql="SELECT * FROM archive WHERE root='after_sale_service_location'  ";
                  $result_set=mysql_query($sql);
                  while($row=mysql_fetch_array($result_set))
                  {
                    ?>
                        <tr>
                          <td><?php echo $row['file'] ?></td>
                          <td><?php echo $row['type'] ?></td>
                          <td><?php echo $row['date'] ?></td>
                          <td><?php echo $row['sub_root'] ?></td>
                          <td>
                            <a href="bexcom-kbs/<?php echo $row['location']; echo $row['file'] ?>" target="_blank">
                              <button   class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">VIEW</button>
                            </a>
                          </td>
                          <td>
                            <button  type="button" id="modal <?php echo $row['id']?>" class="show-modal<?php echo $row['id']?> mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored mdl-js-ripple-effect">
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
                  include 'delete_modal_archive.php';}
                  ?>
                    </table>
                </div>

                <div class="mdl-cell mdl-cell--12-col">
                  <div class="archive">
                    Installer Address
                  </div><br>
                  <table class="table table-bordered text-center">
                    <tr>
                      <td  class="table_header">File Name</td>
                      <td  class="table_header">File Type</td>
                      <td  class="table_header">Uploaded On</td>
                      <td  class="table_header">Sub Folder</td>
                      <td  class="table_header">View</td>
                      <td  class="table_header">ACTION</td>
                    </tr>
                    <?php
                  $sql="SELECT * FROM archive WHERE root='installer_address'  ";
                  $result_set=mysql_query($sql);
                  while($row=mysql_fetch_array($result_set))
                  {
                    ?>
                        <tr>
                          <td><?php echo $row['file'] ?></td>
                          <td><?php echo $row['type'] ?></td>
                          <td><?php echo $row['date'] ?></td>
                          <td><?php echo $row['sub_root'] ?></td>
                          <td>
                            <a href="bexcom-kbs/<?php echo $row['location']; echo $row['file'] ?>" target="_blank">
                              <button   class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">VIEW</button>
                            </a>
                          </td>
                          <td>
                            <button  type="button" id="modal <?php echo $row['id']?>" class="show-modal<?php echo $row['id']?> mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored mdl-js-ripple-effect">
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
                include 'delete_modal_archive.php';  }
                  ?>
                    </table>
                </div>

                <div class="mdl-cell mdl-cell--12-col">
                  <div class="archive">
                    Dealer
                  </div><br>
                  <table class="table table-bordered text-center">
                    <tr>
                      <td  class="table_header">File Name</td>
                      <td  class="table_header">File Type</td>
                      <td  class="table_header">Uploaded On</td>
                      <td  class="table_header">Sub Folder</td>
                      <td  class="table_header">View</td>
                      <td  class="table_header">ACTION</td>
                    </tr>
                    <?php
                  $sql="SELECT * FROM archive WHERE root='dealer'  ";
                  $result_set=mysql_query($sql);
                  while($row=mysql_fetch_array($result_set))
                  {
                    ?>
                        <tr>
                          <td><?php echo $row['file'] ?></td>
                          <td><?php echo $row['type'] ?></td>
                          <td><?php echo $row['date'] ?></td>
                          <td><?php echo $row['sub_root'] ?></td>
                          <td>
                            <a href="bexcom-kbs/<?php echo $row['location']; echo $row['file'] ?>" target="_blank">
                              <button   class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">VIEW</button>
                            </a>
                          </td>
                          <td>
                            <button  type="button" id="modal <?php echo $row['id']?>" class="show-modal<?php echo $row['id']?> mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored mdl-js-ripple-effect">
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
                  include 'delete_modal_archive.php';}
                  ?>
                    </table>
                </div>

                <div class="mdl-cell mdl-cell--12-col">
                  <div class="archive">
                    Program Guide
                  </div><br>
                  <table class="table table-bordered text-center">
                    <tr>
                      <td  class="table_header">File Name</td>
                      <td  class="table_header">File Type</td>
                      <td  class="table_header">Uploaded On</td>
                      <td  class="table_header">Sub Folder</td>
                      <td  class="table_header">View</td>
                      <td  class="table_header">ACTION</td>
                    </tr>
                    <?php
                  $sql="SELECT * FROM archive WHERE root='program_guide'  ";
                  $result_set=mysql_query($sql);
                  while($row=mysql_fetch_array($result_set))
                  {
                    ?>
                        <tr>
                          <td><?php echo $row['file'] ?></td>
                          <td><?php echo $row['type'] ?></td>
                          <td><?php echo $row['date'] ?></td>
                          <td><?php echo $row['sub_root'] ?></td>
                          <td>
                            <a href="bexcom-kbs/<?php echo $row['location']; echo $row['file'] ?>" target="_blank">
                              <button   class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">VIEW</button>
                            </a>
                          </td>
                          <td>
                            <button  type="button" id="modal <?php echo $row['id']?>" class="show-modal<?php echo $row['id']?> mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored mdl-js-ripple-effect">
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
                  include 'delete_modal_archive.php';}
                  ?>
                    </table>
                </div>

                <div class="mdl-cell mdl-cell--12-col">
                  <div class="archive">
                    Script
                  </div><br>
                  <table class="table table-bordered text-center">
                    <tr>
                      <td  class="table_header">File Name</td>
                      <td  class="table_header">File Type</td>
                      <td  class="table_header">Uploaded On</td>
                      <td  class="table_header">Sub Folder</td>
                      <td  class="table_header">View</td>
                      <td  class="table_header">ACTION</td>
                    </tr>
                    <?php
                  $sql="SELECT * FROM archive WHERE root='script'  ";
                  $result_set=mysql_query($sql);
                  while($row=mysql_fetch_array($result_set))
                  {
                    ?>
                        <tr>
                          <td><?php echo $row['file'] ?></td>
                          <td><?php echo $row['type'] ?></td>
                          <td><?php echo $row['date'] ?></td>
                          <td><?php echo $row['sub_root'] ?></td>
                          <td>
                            <a href="bexcom-kbs/<?php echo $row['location']; echo $row['file'] ?>" target="_blank">
                              <button   class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">VIEW</button>
                            </a>
                          </td>
                          <td>
                            <button  type="button" id="modal <?php echo $row['id']?>" class="show-modal<?php echo $row['id']?> mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored mdl-js-ripple-effect">
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
                  include 'delete_modal_archive.php';}
                  ?>
                    </table>
                </div>

                <div class="mdl-cell mdl-cell--12-col">
                  <div class="archive">
                    Recharge Guideline
                  </div><br>
                  <table class="table table-bordered text-center">
                    <tr>
                      <td  class="table_header">File Name</td>
                      <td  class="table_header">File Type</td>
                      <td  class="table_header">Uploaded On</td>
                      <td  class="table_header">Sub Folder</td>
                      <td  class="table_header">View</td>
                      <td  class="table_header">ACTION</td>
                    </tr>
                    <?php
                  $sql="SELECT * FROM archive WHERE root='recharge_guideline'  ";
                  $result_set=mysql_query($sql);
                  while($row=mysql_fetch_array($result_set))
                  {
                    ?>
                        <tr>
                          <td><?php echo $row['file'] ?></td>
                          <td><?php echo $row['type'] ?></td>
                          <td><?php echo $row['date'] ?></td>
                          <td><?php echo $row['sub_root'] ?></td>
                          <td>
                            <a href="bexcom-kbs/<?php echo $row['location']; echo $row['file'] ?>" target="_blank">
                              <button   class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">VIEW</button>
                            </a>
                          </td>
                          <td>
                            <button  type="button" id="modal <?php echo $row['id']?>" class="show-modal<?php echo $row['id']?> mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored mdl-js-ripple-effect">
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
                  include 'delete_modal_archive.php';}
                  ?>
                    </table>
                </div>


                <div class="mdl-cell mdl-cell--12-col">
                  <div class="archive">
                    Training Materials
                  </div><br>
                  <table class="table table-bordered text-center">
                    <tr>
                      <td  class="table_header">File Name</td>
                      <td  class="table_header">File Type</td>
                      <td  class="table_header">Uploaded On</td>
                      <td  class="table_header">Sub Folder</td>
                      <td  class="table_header">View</td>
                      <td  class="table_header">ACTION</td>
                    </tr>
                    <?php
                  $sql="SELECT * FROM archive WHERE root='training_material'  ";
                  $result_set=mysql_query($sql);
                  while($row=mysql_fetch_array($result_set))
                  {
                    ?>
                        <tr>
                          <td><?php echo $row['file'] ?></td>
                          <td><?php echo $row['type'] ?></td>
                          <td><?php echo $row['date'] ?></td>
                          <td><?php echo $row['sub_root'] ?></td>
                          <td>
                            <a href="bexcom-kbs/<?php echo $row['location']; echo $row['file'] ?>" target="_blank">
                              <button   class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">VIEW</button>
                            </a>
                          </td>
                          <td>
                            <button  type="button" id="modal <?php echo $row['id']?>" class="show-modal<?php echo $row['id']?> mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored mdl-js-ripple-effect">
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
                  include 'delete_modal_archive.php';}
                  ?>
                    </table>
                </div>

                <div class="mdl-cell mdl-cell--12-col">
                  <div class="archive">
                  Quality Guidelines and Parammeters
                  </div><br>
                  <table class="table table-bordered text-center">
                    <tr>
                      <td  class="table_header">File Name</td>
                      <td  class="table_header">File Type</td>
                      <td  class="table_header">Uploaded On</td>
                      <td  class="table_header">Sub Folder</td>
                      <td  class="table_header">View</td>
                      <td  class="table_header">ACTION</td>
                    </tr>
                    <?php
                  $sql="SELECT * FROM archive WHERE root='quality_guideline'  ";
                  $result_set=mysql_query($sql);
                  while($row=mysql_fetch_array($result_set))
                  {
                    ?>
                        <tr>
                          <td><?php echo $row['file'] ?></td>
                          <td><?php echo $row['type'] ?></td>
                          <td><?php echo $row['date'] ?></td>
                          <td><?php echo $row['sub_root'] ?></td>
                          <td>
                            <a href="bexcom-kbs/<?php echo $row['location']; echo $row['file'] ?>" target="_blank">
                              <button   class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">VIEW</button>
                            </a>
                          </td>
                          <td>
                            <button  type="button" id="modal <?php echo $row['id']?>" class="show-modal<?php echo $row['id']?> mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored mdl-js-ripple-effect">
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
                  include 'delete_modal_archive.php';}
                  ?>
                    </table>
                </div>

                <div class="mdl-cell mdl-cell--12-col">
                  <div class="archive">
                    Current Promotion
                  </div><br>
                  <table class="table table-bordered text-center">
                    <tr>
                      <td  class="table_header">File Name</td>
                      <td  class="table_header">File Type</td>
                      <td  class="table_header">Uploaded On</td>
                      <td  class="table_header">Sub Folder</td>
                      <td  class="table_header">View</td>
                      <td  class="table_header">ACTION</td>
                    </tr>
                    <?php
                  $sql="SELECT * FROM archive WHERE root='current_promotion'  ";
                  $result_set=mysql_query($sql);
                  while($row=mysql_fetch_array($result_set))
                  {
                    ?>
                        <tr>
                          <td><?php echo $row['file'] ?></td>
                          <td><?php echo $row['type'] ?></td>
                          <td><?php echo $row['date'] ?></td>
                          <td><?php echo $row['sub_root'] ?></td>
                          <td>
                            <a href="bexcom-kbs/<?php echo $row['location']; echo $row['file'] ?>" target="_blank">
                              <button   class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">VIEW</button>
                            </a>
                          </td>
                          <td>
                            <button  type="button" id="modal <?php echo $row['id']?>" class="show-modal<?php echo $row['id']?> mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored mdl-js-ripple-effect">
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
                  include 'delete_modal_archive.php';}
                  ?>
                    </table>
                </div>

                <div class="mdl-cell mdl-cell--12-col">
                  <div class="archive">
                    VAS
                  </div><br>
                  <table class="table table-bordered text-center">
                    <tr>
                      <td  class="table_header">File Name</td>
                      <td  class="table_header">File Type</td>
                      <td  class="table_header">Uploaded On</td>
                      <td  class="table_header">Sub Folder</td>
                      <td  class="table_header">View</td>
                      <td  class="table_header">ACTION</td>
                    </tr>
                    <?php
                  $sql="SELECT * FROM archive WHERE root='vas'  ";
                  $result_set=mysql_query($sql);
                  while($row=mysql_fetch_array($result_set))
                  {
                    ?>
                        <tr>
                          <td><?php echo $row['file'] ?></td>
                          <td><?php echo $row['type'] ?></td>
                          <td><?php echo $row['date'] ?></td>
                          <td><?php echo $row['sub_root'] ?></td>
                          <td>
                            <a href="bexcom-kbs/<?php echo $row['location']; echo $row['file'] ?>" target="_blank">
                              <button   class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">VIEW</button>
                            </a>
                          </td>
                          <td>
                            <button  type="button" id="modal <?php echo $row['id']?>" class="show-modal<?php echo $row['id']?> mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored mdl-js-ripple-effect">
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
                  include 'delete_modal_archive.php';}
                  ?>
                    </table>
                </div>

                <div class="mdl-cell mdl-cell--12-col">
                  <div class="archive">
                    update
                  </div><br>
                  <table class="table table-bordered text-center">
                    <tr>
                      <td  class="table_header">File Name</td>
                      <td  class="table_header">File Type</td>
                      <td  class="table_header">Uploaded On</td>
                      <td  class="table_header">Sub Folder</td>
                      <td  class="table_header">View</td>
                      <td  class="table_header">ACTION</td>
                    </tr>
                    <?php
                  $sql="SELECT * FROM archive WHERE root='update'  ";
                  $result_set=mysql_query($sql);
                  while($row=mysql_fetch_array($result_set))
                  {
                    ?>
                        <tr>
                          <td><?php echo $row['file'] ?></td>
                          <td><?php echo $row['type'] ?></td>
                          <td><?php echo $row['date'] ?></td>
                          <td><?php echo $row['sub_root'] ?></td>
                          <td>
                            <a href="bexcom-kbs/<?php echo $row['location']; echo $row['file'] ?>" target="_blank">
                              <button   class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">VIEW</button>
                            </a>
                          </td>
                          <td>
                            <button  type="button" id="modal <?php echo $row['id']?>" class="show-modal<?php echo $row['id']?> mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored mdl-js-ripple-effect">
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
                include 'delete_modal_archive.php';  }
                  ?>
                    </table>
                </div>


                <div class="mdl-cell mdl-cell--12-col">
                  <div class="archive">
                    Press Release
                  </div><br>
                  <table class="table table-bordered text-center">
                    <tr>
                      <td  class="table_header">File Name</td>
                      <td  class="table_header">File Type</td>
                      <td  class="table_header">Uploaded On</td>
                      <td  class="table_header">Sub Folder</td>
                      <td  class="table_header">View</td>
                      <td  class="table_header">ACTION</td>
                    </tr>
                    <?php
                  $sql="SELECT * FROM archive WHERE root='press_release'  ";
                  $result_set=mysql_query($sql);
                  while($row=mysql_fetch_array($result_set))
                  {
                    ?>
                        <tr>
                          <td><?php echo $row['file'] ?></td>
                          <td><?php echo $row['type'] ?></td>
                          <td><?php echo $row['date'] ?></td>
                          <td><?php echo $row['sub_root'] ?></td>
                          <td>
                            <a href="bexcom-kbs/<?php echo $row['location']; echo $row['file'] ?>" target="_blank">
                              <button   class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">VIEW</button>
                            </a>
                          </td>
                          <td>
                            <button  type="button" id="modal <?php echo $row['id']?>" class="show-modal<?php echo $row['id']?> mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored mdl-js-ripple-effect">
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
                  include 'delete_modal_archive.php';}
                  ?>
                    </table>
                </div>

                <div class="mdl-cell mdl-cell--12-col">
                  <div class="archive">
                    Social Media
                  </div><br>
                  <table class="table table-bordered text-center">
                    <tr>
                      <td  class="table_header">File Name</td>
                      <td  class="table_header">File Type</td>
                      <td  class="table_header">Uploaded On</td>
                      <td  class="table_header">Sub Folder</td>
                      <td  class="table_header">View</td>
                      <td  class="table_header">ACTION</td>
                    </tr>
                    <?php
                  $sql="SELECT * FROM archive WHERE root='Social Media'  ";
                  $result_set=mysql_query($sql);
                  while($row=mysql_fetch_array($result_set))
                  {
                    ?>
                        <tr>
                          <td><?php echo $row['file'] ?></td>
                          <td><?php echo $row['type'] ?></td>
                          <td><?php echo $row['date'] ?></td>
                          <td><?php echo $row['sub_root'] ?></td>
                          <td>
                            <a href="bexcom-kbs/<?php echo $row['location']; echo $row['file'] ?>" target="_blank">
                              <button   class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">VIEW</button>
                            </a>
                          </td>
                          <td>
                            <button  type="button" id="modal <?php echo $row['id']?>" class="show-modal<?php echo $row['id']?> mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored mdl-js-ripple-effect">
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
                include 'delete_modal_archive.php';  }
                  ?>
                    </table>
                </div>

                <div class="mdl-cell mdl-cell--12-col">
                  <div class="archive">
                    FAQ
                  </div><br>
                  <table class="table table-bordered text-center">
                    <tr>
                      <td  class="table_header">File Name</td>
                      <td  class="table_header">File Type</td>
                      <td  class="table_header">Uploaded On</td>
                      <td  class="table_header">Sub Folder</td>
                      <td  class="table_header">View</td>
                      <td  class="table_header">ACTION</td>
                    </tr>
                    <?php
                  $sql="SELECT * FROM archive WHERE root='faq'  ";
                  $result_set=mysql_query($sql);
                  while($row=mysql_fetch_array($result_set))
                  {
                    ?>
                        <tr>
                          <td><?php echo $row['file'] ?></td>
                          <td><?php echo $row['type'] ?></td>
                          <td><?php echo $row['date'] ?></td>
                          <td><?php echo $row['sub_root'] ?></td>
                          <td>
                            <a href="bexcom-kbs/<?php echo $row['location']; echo $row['file'] ?>" target="_blank">
                              <button   class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">VIEW</button>
                            </a>
                          </td>
                          <td>
                            <button  type="button" id="modal <?php echo $row['id']?>" class="show-modal<?php echo $row['id']?> mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored mdl-js-ripple-effect">
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
                  include 'delete_modal_archive.php';}
                  ?>
                    </table>
                </div>


                <div class="mdl-cell mdl-cell--12-col">
                  <div class="archive">
                    Installation Guide
                  </div><br>
                  <table class="table table-bordered text-center">
                    <tr>
                      <td  class="table_header">File Name</td>
                      <td  class="table_header">File Type</td>
                      <td  class="table_header">Uploaded On</td>
                      <td  class="table_header">Sub Folder</td>
                      <td  class="table_header">View</td>
                      <td  class="table_header">ACTION</td>
                    </tr>
                    <?php
                  $sql="SELECT * FROM archive WHERE root='installation_guide'  ";
                  $result_set=mysql_query($sql);
                  while($row=mysql_fetch_array($result_set))
                  {
                    ?>
                        <tr>
                          <td><?php echo $row['file'] ?></td>
                          <td><?php echo $row['type'] ?></td>
                          <td><?php echo $row['date'] ?></td>
                          <td><?php echo $row['sub_root'] ?></td>
                          <td>
                            <a href="bexcom-kbs/<?php echo $row['location']; echo $row['file'] ?>" target="_blank">
                              <button   class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">VIEW</button>
                            </a>
                          </td>
                          <td>
                            <button  type="button" id="modal <?php echo $row['id']?>" class="show-modal<?php echo $row['id']?> mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored mdl-js-ripple-effect">
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
                include 'delete_modal_archive.php';}
                  ?>
                    </table>
                </div>

                <div class="mdl-cell mdl-cell--12-col">
                  <div class="archive">
                    Technical Help
                  </div><br>
                  <table class="table table-bordered text-center">
                    <tr>
                      <td  class="table_header">File Name</td>
                      <td  class="table_header">File Type</td>
                      <td  class="table_header">Uploaded On</td>
                      <td  class="table_header">Sub Folder</td>
                      <td  class="table_header">View</td>
                      <td  class="table_header">ACTION</td>
                    </tr>
                    <?php
                  $sql="SELECT * FROM archive WHERE root='technical_help'  ";
                  $result_set=mysql_query($sql);
                  while($row=mysql_fetch_array($result_set))
                  {
                    ?>
                        <tr>
                          <td><?php echo $row['file'] ?></td>
                          <td><?php echo $row['type'] ?></td>
                          <td><?php echo $row['date'] ?></td>
                          <td><?php echo $row['sub_root'] ?></td>
                          <td>
                            <a href="bexcom-kbs/<?php echo $row['location']; echo $row['file'] ?>" target="_blank">
                              <button   class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">VIEW</button>
                            </a>
                          </td>
                          <td>
                            <button  type="button" id="modal <?php echo $row['id']?>" class="show-modal<?php echo $row['id']?> mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored mdl-js-ripple-effect">
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
                  include 'delete_modal_archive.php';}
                  ?>
                    </table>
                </div>


                <div class="mdl-cell mdl-cell--12-col">
                  <div class="archive">
                    Contact details
                  </div><br>
                  <table class="table table-bordered text-center">
                    <tr>
                      <td  class="table_header">File Name</td>
                      <td  class="table_header">File Type</td>
                      <td  class="table_header">Uploaded On</td>
                      <td  class="table_header">Sub Folder</td>
                      <td  class="table_header">View</td>
                      <td  class="table_header">ACTION</td>
                    </tr>
                    <?php
                  $sql="SELECT * FROM archive WHERE root='contact_details'  ";
                  $result_set=mysql_query($sql);
                  while($row=mysql_fetch_array($result_set))
                  {
                    ?>
                        <tr>
                          <td><?php echo $row['file'] ?></td>
                          <td><?php echo $row['type'] ?></td>
                          <td><?php echo $row['date'] ?></td>
                          <td><?php echo $row['sub_root'] ?></td>
                          <td>
                            <a href="bexcom-kbs/<?php echo $row['location']; echo $row['file'] ?>" target="_blank">
                              <button   class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">VIEW</button>
                            </a>
                          </td>
                          <td>
                            <button  type="button" id="modal <?php echo $row['id']?>" class="show-modal<?php echo $row['id']?> mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored mdl-js-ripple-effect">
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
                  include 'delete_modal_archive.php';}
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
