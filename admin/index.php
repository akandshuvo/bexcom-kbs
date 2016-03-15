<?php
    session_start();
    if(!isset($_SESSION['admin_id'])){
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
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title">Beximco Communication</span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation. We hide it in small screens. -->
            <nav class="mdl-navigation mdl-layout--large-screen-only">
                    <div class="name"><?php echo $_SESSION['admin_name'] ?></div>
                    &nbsp;&nbsp;&nbsp;
                    <div class="button">
                        <!-- Right aligned menu below button -->
                        <button id="setting"
                            class="mdl-button mdl-js-button mdl-button--icon">
                            <i class="material-icons">&#xE8EE;</i>
                        </button>

                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                            for="setting">
                            <li class="mdl-menu__item">
                                <a href="../scripts/logout.php">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                                        <i class="material-icons">&#xE8AC;</i>&nbsp;&nbsp;&nbsp;LOG OUT
                                    </button>
                                </a>
                            </li>
                        </ul>
                    </div>
            </nav>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Beximco Communication</span>
        <nav class="mdl-navigation">
<!--:::::::::::::::::::::::::::::::::::ABOUT DTH:::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
            <div class="menu">
                <div class="name">About DTH</div>
                <div class="button">
                    <!-- Right aligned menu below button -->
                    <button id="1"
                            class="mdl-button mdl-js-button mdl-button--icon">
                        <i class="material-icons">more_vert</i>
                    </button>

                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        for="1">
                        <li class="mdl-menu__item menu_list"><a href="">Product</a></li>
                        <li class="mdl-menu__item menu_list"><a href="">Services</a></li>
                        <li class="mdl-menu__item menu_list"><a href="">Offers</a></li>
                        <li class="mdl-menu__item menu_list"><a href="">Why Real VU</a></li>
                    </ul>
                </div>
            </div>
<!--::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
            <div class="menu">
                <div class="name">Packages</div>
                <div class="button">
                    <!-- Right aligned menu below button -->
                    <button id="2"
                            class="mdl-button mdl-js-button mdl-button--icon">
                        <i class="material-icons">more_vert</i>
                    </button>

                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        for="2">
                        <li class="mdl-menu__item menu_list"><a href="">Pack 1&2</a></li>
                        <li class="mdl-menu__item menu_list"><a href="">Price</a></li>
                        <li class="mdl-menu__item menu_list"><a href="">Channel</a></li>
                        <li class="mdl-menu__item menu_list"><a href="">Add-ons</a></li>
                    </ul>
                </div>
            </div>
<!--::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
            <div class="menu">
                <div class="name">offer</div>
                <div class="button">
                    <!-- Right aligned menu below button -->
                    <button id="3"
                            class="mdl-button mdl-js-button mdl-button--icon">
                        <i class="material-icons">more_vert</i>
                    </button>

                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        for="3">
                        <li class="mdl-menu__item menu_list"><a href="">New Customer</a></li>
                        <li class="mdl-menu__item menu_list"><a href="">Old Customer</a></li>
                    </ul>
                </div>
            </div>
<!--::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
            <div class="menu">
                <div class="name">retailer location</div>
                <div class="button">
                    <!-- Right aligned menu below button -->
                    <button id="4"
                            class="mdl-button mdl-js-button mdl-button--icon">
                        <i class="material-icons">more_vert</i>
                    </button>

                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        for="4">
                        <li class="mdl-menu__item">Some Action</li>
                        <li class="mdl-menu__item">Another Action</li>
                        <li disabled class="mdl-menu__item">Disabled Action</li>
                        <li class="mdl-menu__item">Yet Another Action</li>
                    </ul>
                </div>
            </div>
<!--::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
            <div class="menu">
                <div class="name">after sales service location</div>
                <div class="button">
                    <!-- Right aligned menu below button -->
                    <button id="5"
                            class="mdl-button mdl-js-button mdl-button--icon">
                        <i class="material-icons">more_vert</i>
                    </button>

                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        for="5">
                        <li class="mdl-menu__item">Some Action</li>
                        <li class="mdl-menu__item">Another Action</li>
                        <li disabled class="mdl-menu__item">Disabled Action</li>
                        <li class="mdl-menu__item">Yet Another Action</li>
                    </ul>
                </div>
            </div>
<!--::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
            <div class="menu">
                <div class="name">installer address</div>
                <div class="button">
                    <!-- Right aligned menu below button -->
                    <button id="6"
                            class="mdl-button mdl-js-button mdl-button--icon">
                        <i class="material-icons">more_vert</i>
                    </button>

                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        for="6">
                        <li class="mdl-menu__item">Some Action</li>
                        <li class="mdl-menu__item">Another Action</li>
                        <li disabled class="mdl-menu__item">Disabled Action</li>
                        <li class="mdl-menu__item">Yet Another Action</li>
                    </ul>
                </div>
            </div>
<!--::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
            <div class="menu">
                <div class="name">dealer</div>
                <div class="button">
                    <!-- Right aligned menu below button -->
                    <button id="7"
                            class="mdl-button mdl-js-button mdl-button--icon">
                        <i class="material-icons">more_vert</i>
                    </button>

                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        for="7">
                        <li class="mdl-menu__item">Some Action</li>
                        <li class="mdl-menu__item">Another Action</li>
                        <li disabled class="mdl-menu__item">Disabled Action</li>
                        <li class="mdl-menu__item">Yet Another Action</li>
                    </ul>
                </div>
            </div>
<!--::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
            <div class="menu">
                <div class="name">program guide</div>
                <div class="button">
                    <!-- Right aligned menu below button -->
                    <button id="8"
                            class="mdl-button mdl-js-button mdl-button--icon">
                        <i class="material-icons">more_vert</i>
                    </button>

                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        for="8">
                        <li class="mdl-menu__item">Some Action</li>
                        <li class="mdl-menu__item">Another Action</li>
                        <li disabled class="mdl-menu__item">Disabled Action</li>
                        <li class="mdl-menu__item">Yet Another Action</li>
                    </ul>
                </div>
            </div>
<!--::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
            <div class="menu">
                <div class="name">script</div>
                <div class="button">
                    <!-- Right aligned menu below button -->
                    <button id="9"
                            class="mdl-button mdl-js-button mdl-button--icon">
                        <i class="material-icons">more_vert</i>
                    </button>

                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        for="9">
                        <li class="mdl-menu__item">Some Action</li>
                        <li class="mdl-menu__item">Another Action</li>
                        <li disabled class="mdl-menu__item">Disabled Action</li>
                        <li class="mdl-menu__item">Yet Another Action</li>
                    </ul>
                </div>
            </div>
<!--::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
            <div class="menu">
                <div class="name">Recharge Guideline</div>
                <div class="button">
                    <!-- Right aligned menu below button -->
                    <button id="10"
                            class="mdl-button mdl-js-button mdl-button--icon">
                        <i class="material-icons">more_vert</i>
                    </button>

                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        for="10">
                        <li class="mdl-menu__item">Some Action</li>
                        <li class="mdl-menu__item">Another Action</li>
                        <li disabled class="mdl-menu__item">Disabled Action</li>
                        <li class="mdl-menu__item">Yet Another Action</li>
                    </ul>
                </div>
            </div>
<!--::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
            <div class="menu">
                <div class="name">Training Materials</div>
                <div class="button">
                    <!-- Right aligned menu below button -->
                    <button id="11"
                            class="mdl-button mdl-js-button mdl-button--icon">
                        <i class="material-icons">more_vert</i>
                    </button>

                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        for="11">
                        <li class="mdl-menu__item">Some Action</li>
                        <li class="mdl-menu__item">Another Action</li>
                        <li disabled class="mdl-menu__item">Disabled Action</li>
                        <li class="mdl-menu__item">Yet Another Action</li>
                    </ul>
                </div>
            </div>
<!--::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
            <div class="menu">
                <div class="name">Quality guidelines & parameters</div>
                <div class="button">
                    <!-- Right aligned menu below button -->
                    <button id="12"
                            class="mdl-button mdl-js-button mdl-button--icon">
                        <i class="material-icons">more_vert</i>
                    </button>

                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        for="12">
                        <li class="mdl-menu__item">Some Action</li>
                        <li class="mdl-menu__item">Another Action</li>
                        <li disabled class="mdl-menu__item">Disabled Action</li>
                        <li class="mdl-menu__item">Yet Another Action</li>
                    </ul>
                </div>
            </div>
<!--::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
            <div class="menu">
                <div class="name">Current Promotion</div>
                <div class="button">
                    <!-- Right aligned menu below button -->
                    <button id="13"
                            class="mdl-button mdl-js-button mdl-button--icon">
                        <i class="material-icons">more_vert</i>
                    </button>

                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        for="13">
                        <li class="mdl-menu__item">Some Action</li>
                        <li class="mdl-menu__item">Another Action</li>
                        <li disabled class="mdl-menu__item">Disabled Action</li>
                        <li class="mdl-menu__item">Yet Another Action</li>
                    </ul>
                </div>
            </div>
<!--::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
            <div class="menu">
                <div class="name">VAS</div>
                <div class="button">
                    <!-- Right aligned menu below button -->
                    <button id="14"
                            class="mdl-button mdl-js-button mdl-button--icon">
                        <i class="material-icons">more_vert</i>
                    </button>

                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        for="14">
                        <li class="mdl-menu__item">Some Action</li>
                        <li class="mdl-menu__item">Another Action</li>
                        <li disabled class="mdl-menu__item">Disabled Action</li>
                        <li class="mdl-menu__item">Yet Another Action</li>
                    </ul>
                </div>
            </div>
<!--::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
            <div class="menu">
                <div class="name">Update</div>
                <div class="button">
                    <!-- Right aligned menu below button -->
                    <button id="15"
                            class="mdl-button mdl-js-button mdl-button--icon">
                        <i class="material-icons">more_vert</i>
                    </button>

                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        for="15">
                        <li class="mdl-menu__item">Some Action</li>
                        <li class="mdl-menu__item">Another Action</li>
                        <li disabled class="mdl-menu__item">Disabled Action</li>
                        <li class="mdl-menu__item">Yet Another Action</li>
                    </ul>
                </div>
            </div>
<!--::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
            <div class="menu">
                <div class="name">press release</div>
                <div class="button">
                    <!-- Right aligned menu below button -->
                    <button id="16"
                            class="mdl-button mdl-js-button mdl-button--icon">
                        <i class="material-icons">more_vert</i>
                    </button>

                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        for="16">
                        <li class="mdl-menu__item">Some Action</li>
                        <li class="mdl-menu__item">Another Action</li>
                        <li disabled class="mdl-menu__item">Disabled Action</li>
                        <li class="mdl-menu__item">Yet Another Action</li>
                    </ul>
                </div>
            </div>
<!--::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
            <div class="menu">
                <div class="name">social media</div>
                <div class="button">
                    <!-- Right aligned menu below button -->
                    <button id="17"
                            class="mdl-button mdl-js-button mdl-button--icon">
                        <i class="material-icons">more_vert</i>
                    </button>

                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        for="17">
                        <li class="mdl-menu__item">Some Action</li>
                        <li class="mdl-menu__item">Another Action</li>
                        <li disabled class="mdl-menu__item">Disabled Action</li>
                        <li class="mdl-menu__item">Yet Another Action</li>
                    </ul>
                </div>
            </div>
<!--::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
            <div class="menu">
                <div class="name">FAQ</div>
                <div class="button">
                    <!-- Right aligned menu below button -->
                    <button id="18"
                            class="mdl-button mdl-js-button mdl-button--icon">
                        <i class="material-icons">more_vert</i>
                    </button>

                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        for="18">
                        <li class="mdl-menu__item">Some Action</li>
                        <li class="mdl-menu__item">Another Action</li>
                        <li disabled class="mdl-menu__item">Disabled Action</li>
                        <li class="mdl-menu__item">Yet Another Action</li>
                    </ul>
                </div>
            </div>
<!--::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
            <div class="menu">
                <div class="name">installation guide</div>
                <div class="button">
                    <!-- Right aligned menu below button -->
                    <button id="19"
                            class="mdl-button mdl-js-button mdl-button--icon">
                        <i class="material-icons">more_vert</i>
                    </button>

                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        for="19">
                        <li class="mdl-menu__item">Some Action</li>
                        <li class="mdl-menu__item">Another Action</li>
                        <li disabled class="mdl-menu__item">Disabled Action</li>
                        <li class="mdl-menu__item">Yet Another Action</li>
                    </ul>
                </div>
            </div>
<!--::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
            <div class="menu">
                <div class="name">technical help</div>
                <div class="button">
                    <!-- Right aligned menu below button -->
                    <button id="20"
                            class="mdl-button mdl-js-button mdl-button--icon">
                        <i class="material-icons">more_vert</i>
                    </button>

                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        for="20">
                        <li class="mdl-menu__item">Some Action</li>
                        <li class="mdl-menu__item">Another Action</li>
                        <li disabled class="mdl-menu__item">Disabled Action</li>
                        <li class="mdl-menu__item">Yet Another Action</li>
                    </ul>
                </div>
            </div>
<!--::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
            <div class="menu">
                <div class="name">contact details</div>
                <div class="button">
                    <!-- Right aligned menu below button -->
                    <button id="21"
                            class="mdl-button mdl-js-button mdl-button--icon">
                        <i class="material-icons">more_vert</i>
                    </button>

                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        for="21">
                        <li class="mdl-menu__item">Some Action</li>
                        <li class="mdl-menu__item">Another Action</li>
                        <li disabled class="mdl-menu__item">Disabled Action</li>
                        <li class="mdl-menu__item">Yet Another Action</li>
                    </ul>
                </div>
            </div>
<!--::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
            <div class="menu">
                <div class="name">press release</div>
                <div class="button">
                    <!-- Right aligned menu below button -->
                    <button id="22"
                            class="mdl-button mdl-js-button mdl-button--icon">
                        <i class="material-icons">more_vert</i>
                    </button>

                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        for="22">
                        <li class="mdl-menu__item">Some Action</li>
                        <li class="mdl-menu__item">Another Action</li>
                        <li disabled class="mdl-menu__item">Disabled Action</li>
                        <li class="mdl-menu__item">Yet Another Action</li>
                    </ul>
                </div>
            </div>
<!--::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
        </nav>
    </div>
    <main class="mdl-layout__content">
        <div class="page-content">
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
                                <td>Samsung Galaxy S7</td>
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
