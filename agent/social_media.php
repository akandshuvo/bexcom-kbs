<?php
session_start();
if(!isset($_SESSION['agent_id'])){
    header('location:../index.php');
}
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
            <span class="mdl-layout-title">SOCIAL MEDIA</span>
            <div class="mdl-layout-spacer"></div>
            <!--USER NAME AFTER LOGIN-->
            <span class="">WELCOME,&nbsp;<?php echo $_SESSION['agent_name']?></span>
            <span><!-- Right aligned menu below button -->
                <button id="demo-menu-lower-right"
                        class="mdl-button mdl-js-button mdl-button--icon">
                    <i class="material-icons">more_vert</i>
                </button>

                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                    for="demo-menu-lower-right">
                    <li class="mdl-menu__item">
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
            <a href="#fixed-tab-1" class="mdl-layout__tab is-active">PRODUCT</a>
            <a href="#fixed-tab-2" class="mdl-layout__tab">SERVICES</a>
            <a href="#fixed-tab-3" class="mdl-layout__tab">OFFERS</a>
            <a href="#fixed-tab-4" class="mdl-layout__tab">WHY REAL vu</a>
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
                        <table class="mdl-data-table mdl-js-data-table  mdl-shadow--2dp dl-data-table--selectable">
                            <thead>
                            <tr>
                                <th style="text-align: center" class="mdl-data-table__cell--non-numeric">Division</th>
                                <th style="text-align: center">District</th>
                                <th style="text-align: center">Upazilla</th>
                                <th style="text-align: center">Thana</th>
                                <th style="text-align: center">Post Code</th>
                                <th style="text-align: center ">Area</th>
                                <th style="text-align: center">Village</th>
                                <th style="text-align: center">Update</th>
                                <th style="text-align: center">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">Dhaka</td>
                                <td>Samsung Galaxy S7</td>
                                <td>Samsung Galaxy S7</td>
                                <td>Samsung Galaxy S7</td>
                                <td>Samsung Galaxy S7</td>
                                <td>Samsung Galaxy S7 </td>
                                <td class="mdl-data-table__cell--non-numeric" >
                                    Samsung Galaxy S7
                                </td>
                                <td>
                                    <!-- Colored mini FAB button -->
                                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--primary">
                                        <i class="material-icons">&#xE150;</i>
                                    </button>

                                </td>
                                <td>
                                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--accent">
                                        <i class="material-icons">&#xE872;</i>
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <section class="mdl-layout__tab-panel" id="fixed-tab-2">
            <div class="page-content">
                <!-- Your content goes here -->
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col">
                        <table class="mdl-data-table mdl-js-data-table  mdl-shadow--2dp dl-data-table--selectable">
                            <thead>
                            <tr>
                                <th style="text-align: center" class="mdl-data-table__cell--non-numeric">Division</th>
                                <th style="text-align: center">District</th>
                                <th style="text-align: center">Upazilla</th>
                                <th style="text-align: center">Thana</th>
                                <th style="text-align: center">Post Code</th>
                                <th style="text-align: center ">Area</th>
                                <th style="text-align: center">Village</th>
                                <th style="text-align: center">Update</th>
                                <th style="text-align: center">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">Dhaka</td>
                                <td>Samsung Galaxy S7</td>
                                <td>Samsung Galaxy S7</td>
                                <td>Samsung Galaxy S7</td>
                                <td>Samsung Galaxy S7</td>
                                <td>Samsung Galaxy S7 </td>
                                <td class="mdl-data-table__cell--non-numeric" >
                                    Samsung Galaxy S7
                                </td>
                                <td>
                                    <!-- Colored mini FAB button -->
                                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--primary">
                                        <i class="material-icons">&#xE150;</i>
                                    </button>

                                </td>
                                <td>
                                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--accent">
                                        <i class="material-icons">&#xE872;</i>
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <section class="mdl-layout__tab-panel" id="fixed-tab-3">
            <div class="page-content">
                <!-- Your content goes here -->
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col">
                        <table class="mdl-data-table mdl-js-data-table  mdl-shadow--2dp dl-data-table--selectable">
                            <thead>
                            <tr>
                                <th style="text-align: center" class="mdl-data-table__cell--non-numeric">Division</th>
                                <th style="text-align: center">District</th>
                                <th style="text-align: center">Upazilla</th>
                                <th style="text-align: center">Thana</th>
                                <th style="text-align: center">Post Code</th>
                                <th style="text-align: center ">Area</th>
                                <th style="text-align: center">Village</th>
                                <th style="text-align: center">Update</th>
                                <th style="text-align: center">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">Dhaka</td>
                                <td>Samsung Galaxy S7</td>
                                <td>Samsung Galaxy S7</td>
                                <td>Samsung Galaxy S7</td>
                                <td>Samsung Galaxy S7</td>
                                <td>Samsung Galaxy S7 </td>
                                <td class="mdl-data-table__cell--non-numeric" >
                                    Samsung Galaxy S7
                                </td>
                                <td>
                                    <!-- Colored mini FAB button -->
                                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--primary">
                                        <i class="material-icons">&#xE150;</i>
                                    </button>

                                </td>
                                <td>

                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <section class="mdl-layout__tab-panel" id="fixed-tab-4">
            <div class="page-content">
                <!-- Your content goes here -->
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col">
                        <table class="mdl-data-table mdl-js-data-table  mdl-shadow--2dp dl-data-table--selectable">
                            <thead>
                            <tr>
                                <th style="text-align: center" class="mdl-data-table__cell--non-numeric">Division</th>
                                <th style="text-align: center">District</th>
                                <th style="text-align: center">Upazilla</th>
                                <th style="text-align: center">Thana</th>
                                <th style="text-align: center">Post Code</th>
                                <th style="text-align: center ">Area</th>
                                <th style="text-align: center">Village</th>
                                <th style="text-align: center">Update</th>
                                <th style="text-align: center">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">Dhaka</td>
                                <td>Samsung Galaxy S7</td>
                                <td>Samsung Galaxy S7</td>
                                <td>Samsung Galaxy S7</td>
                                <td>Samsung Galaxy S7</td>
                                <td>Samsung Galaxy S7 </td>
                                <td class="mdl-data-table__cell--non-numeric" >
                                    Samsung Galaxy S7
                                </td>
                                <td>
                                    <!-- Colored mini FAB button -->
                                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--primary">
                                        <i class="material-icons">&#xE150;</i>
                                    </button>

                                </td>
                                <td>

                                </td>
                            </tr>
                            </tbody>
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



</body>
<html>
