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
    <title>Hello</title>
    <!--::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
    <!--:::::::::::::STYLE SHEET::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../vendor/mdl/material.css">
    <!--<link rel="stylesheet" href="https://code.getmdl.io/1.1.2/material.indigo-pink.min.css">-->
    <link rel="stylesheet" href="../css/master.css">
    <link rel="stylesheet" href="../css/dropdown.css">
    <!--:::::::::::::BOOTSTRAP::::::::::::::::::::-->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.css">
    <!--:::::::::::::BOOTSTRAP::::::::::::::::::::-->
    <!--::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
    <!--:::::::::::::SCRIPTS::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
    <script defer src="../vendor/mdl/material.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="../scripts/dropdown.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.js"></script>

</head>
<body>
<!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title">Title</span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation. We hide it in small screens. -->
            <nav class="mdl-navigation mdl-layout--large-screen-only">
                <div class="name"><?php echo $_SESSION['agent_name'] ?></div>
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
        <span class="mdl-layout-title">Title</span>
        <nav class="mdl-navigation">

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
                        <li class="mdl-menu__item">Some Action</li>
                        <li class="mdl-menu__item">Another Action</li>
                        <li class="mdl-menu__item">Yet Another Action</li>
                    </ul>
                </div>
            </div>

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
                        <li class="mdl-menu__item">Some Action</li>
                        <li class="mdl-menu__item">Another Action</li>
                        <li disabled class="mdl-menu__item">Disabled Action</li>
                        <li class="mdl-menu__item">Yet Another Action</li>
                    </ul>
                </div>
            </div>

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
                        <li class="mdl-menu__item">Some Action</li>
                        <li class="mdl-menu__item">Another Action</li>
                        <li disabled class="mdl-menu__item">Disabled Action</li>
                        <li class="mdl-menu__item">Yet Another Action</li>
                    </ul>
                </div>
            </div>

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
        </nav>
    </div>
    <main class="mdl-layout__content">
        <div class="page-content">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--3-col"></div>
                <div class="mdl-cell mdl-cell--8-col">
                    <table class="mdl-data-table mdl-js-data-table  mdl-shadow--2dp">
                        <thead>
                        <tr>
                            <th class="mdl-data-table__cell--non-numeric">Division</th>
                            <th>District</th>
                            <th>Upazilla</th>
                            <th>Thana</th>
                            <th>Post Code</th>
                            <th>Area</th>
                            <th>Village</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td>25</td>
                            <td>$2.90</td>
                            <td>$2.90</td>
                            <td>$2.90</td>
                            <td>$2.90</td>
                            <td>$2.90</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mdl-cell mdl-cell--1-col"></div>
            </div>
        </div>
    </main>
</div>
</body>
<html>
