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
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header  mdl-layout--fixed-drawer">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title">Title</span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation. We hide it in small screens. -->

                <nav class="mdl-navigation mdl-layout--large-screen-only">
                    <a class="mdl-navigation__link" href="">Link</a>
                    <a class="mdl-navigation__link" href="">Link</a>
                    <a class="mdl-navigation__link" href="">Link</a>
                    <a class="mdl-navigation__link" href="">Link</a>
                </nav>

        </div>
    </header>
    <main class="mdl-layout__content">
        <div class="page-content">
            <div class="mdl-grid">
            <!--:::::::::::::::::::::NAVIGATION::::::::::::::::::::::::::::::::-->
                <div class="mdl-cell mdl-cell--4-col">
                    <div class="mdl-layout__drawer">
                        <nav class="mdl-navigation">
                            <div class="navigation">
                                <div id='cssmenu'>
                                    <ul>
                                        <!--ABOUT DTH-->
                                        <li class='has-sub'><a href='#'>ABOUT DTH</a>
                                            <ul>
                                                <li class='has-sub'><a href='#'>delete</a>
                                                    <ul>
                                                        <li><a href='#'>admin_ac_delete.php</a></li>
                                                        <li><a href='#'>admin_camera_delete.php</a></li>
                                                    </ul>
                                                </li>
                                                <li class='has-sub'><a href='#'>update</a>
                                                    <ul>
                                                        <li><a href='#'>emulator.php</a></li>
                                                        <li><a href='#'>emulator_update.php</a></li>
                                                    </ul>
                                                </li>
                                                <li class='has-sub'><a href='#'>vendor</a></li>
                                                <li class='has-sub'><a href='#'>OTHERS</a>
                                                    <ul>
                                                        <li><a href='#'>admin_ac.php</a></li>
                                                        <li><a href='#'>admin_camera.php</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--PACKAGES-->
                                        <li class='has-sub'><a href='#'>PACKAGES</a>
                                            <ul>
                                                <li class='has-sub'><a href='#'>Product 1</a>
                                                </li>
                                                <li class='has-sub'><a href='#'>Product 2</a>
                                                    <ul>
                                                        <li><a href='#'>Sub Product</a></li>
                                                        <li><a href='#'>Sub Product</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--OFFER-->
                                        <li class='has-sub'><a href='#'>OFFER</a>
                                            <ul>
                                                <li class='has-sub'><a href='#'>Product 1</a>
                                                </li>
                                                <li class='has-sub'><a href='#'>Product 2</a>
                                                    <ul>
                                                        <li><a href='#'>Sub Product</a></li>
                                                        <li><a href='#'>Sub Product</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--RETAILER  LOCATIONS-->
                                        <li class='has-sub'><a href='#'>RETAILER LOCATIONS</a>
                                            <ul>
                                                <li class='has-sub'><a href='#'>Product 1</a>
                                                </li>
                                                <li class='has-sub'><a href='#'>Product 2</a>
                                                    <ul>
                                                        <li><a href='#'>Sub Product</a></li>
                                                        <li><a href='#'>Sub Product</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--AFTER SALE SERVICE LOCATIONS-->
                                        <li class='has-sub'><a href='#'>AFTER SALES SERVICE LOCATION</a>
                                            <ul>
                                                <li class='has-sub'><a href='#'>Product 1</a>
                                                </li>
                                                <li class='has-sub'><a href='#'>Product 2</a>
                                                    <ul>
                                                        <li><a href='#'>Sub Product</a></li>
                                                        <li><a href='#'>Sub Product</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--INSTALLER ADDRESS-->
                                        <li class='has-sub'><a href='#'>INSTALLER ADDRESS</a>
                                            <ul>
                                                <li class='has-sub'><a href='#'>Product 1</a>
                                                </li>
                                                <li class='has-sub'><a href='#'>Product 2</a>
                                                    <ul>
                                                        <li><a href='#'>Sub Product</a></li>
                                                        <li><a href='#'>Sub Product</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--DEALER-->
                                        <li class='has-sub'><a href='#'>DEALER</a>
                                            <ul>
                                                <li class='has-sub'><a href='#'>Product 1</a>
                                                </li>
                                                <li class='has-sub'><a href='#'>Product 2</a>
                                                    <ul>
                                                        <li><a href='#'>Sub Product</a></li>
                                                        <li><a href='#'>Sub Product</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--PROGRAM GUIDE-->
                                        <li class='has-sub'><a href='#'>PROGRAM GUIDE</a>
                                            <ul>
                                                <li class='has-sub'><a href='#'>Product 1</a>
                                                </li>
                                                <li class='has-sub'><a href='#'>Product 2</a>
                                                    <ul>
                                                        <li><a href='#'>Sub Product</a></li>
                                                        <li><a href='#'>Sub Product</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--SCRIPT-->
                                        <li class='has-sub'><a href='#'>SCRIPT</a>
                                            <ul>
                                                <li class='has-sub'><a href='#'>Product 1</a>
                                                </li>
                                                <li class='has-sub'><a href='#'>Product 2</a>
                                                    <ul>
                                                        <li><a href='#'>Sub Product</a></li>
                                                        <li><a href='#'>Sub Product</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--RECHARGE GUIDELINE-->
                                        <li class='has-sub'><a href='#'>RECHARGE GUIDELINE</a>
                                            <ul>
                                                <li class='has-sub'><a href='#'>Product 1</a>
                                                </li>
                                                <li class='has-sub'><a href='#'>Product 2</a>
                                                    <ul>
                                                        <li><a href='#'>Sub Product</a></li>
                                                        <li><a href='#'>Sub Product</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--TRAINING MATERIAL-->
                                        <li class='has-sub'><a href='#'>TRAINING MATERIAL</a>
                                            <ul>
                                                <li class='has-sub'><a href='#'>Product 1</a>
                                                </li>
                                                <li class='has-sub'><a href='#'>Product 2</a>
                                                    <ul>
                                                        <li><a href='#'>Sub Product</a></li>
                                                        <li><a href='#'>Sub Product</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--QUALITY GUIDELINES & PARAMETERS-->
                                        <li class='has-sub'><a href='#'>SCRIPT</a>
                                            <ul>
                                                <li class='has-sub'><a href='#'>Product 1</a>
                                                </li>
                                                <li class='has-sub'><a href='#'>Product 2</a>
                                                    <ul>
                                                        <li><a href='#'>Sub Product</a></li>
                                                        <li><a href='#'>Sub Product</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--CURRENT PROMOTION-->
                                        <li class='has-sub'><a href='#'>CURRENT PROMOTION</a>
                                            <ul>
                                                <li class='has-sub'><a href='#'>Product 1</a>
                                                </li>
                                                <li class='has-sub'><a href='#'>Product 2</a>
                                                    <ul>
                                                        <li><a href='#'>Sub Product</a></li>
                                                        <li><a href='#'>Sub Product</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--VAS-->
                                        <li class='has-sub'><a href='#'>VAS</a>
                                            <ul>
                                                <li class='has-sub'><a href='#'>Product 1</a>
                                                </li>
                                                <li class='has-sub'><a href='#'>Product 2</a>
                                                    <ul>
                                                        <li><a href='#'>Sub Product</a></li>
                                                        <li><a href='#'>Sub Product</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--UPDATE-->
                                        <li class='has-sub'><a href='#'>UPDATE</a>
                                            <ul>
                                                <li class='has-sub'><a href='#'>Product 1</a>
                                                </li>
                                                <li class='has-sub'><a href='#'>Product 2</a>
                                                    <ul>
                                                        <li><a href='#'>Sub Product</a></li>
                                                        <li><a href='#'>Sub Product</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--PRESS RELEASE-->
                                        <li class='has-sub'><a href='#'>PRESS RELEASE</a>
                                            <ul>
                                                <li class='has-sub'><a href='#'>Product 1</a>
                                                </li>
                                                <li class='has-sub'><a href='#'>Product 2</a>
                                                    <ul>
                                                        <li><a href='#'>Sub Product</a></li>
                                                        <li><a href='#'>Sub Product</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--SOCIAL MEDIA-->
                                        <li class='has-sub'><a href='#'>SOCIAL MEDIA</a>
                                            <ul>
                                                <li class='has-sub'><a href='#'>Product 1</a>
                                                </li>
                                                <li class='has-sub'><a href='#'>Product 2</a>
                                                    <ul>
                                                        <li><a href='#'>Sub Product</a></li>
                                                        <li><a href='#'>Sub Product</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--FAQ-->
                                        <li class='has-sub'><a href='#'>FAQ</a>
                                            <ul>
                                                <li class='has-sub'><a href='#'>Product 1</a>
                                                </li>
                                                <li class='has-sub'><a href='#'>Product 2</a>
                                                    <ul>
                                                        <li><a href='#'>Sub Product</a></li>
                                                        <li><a href='#'>Sub Product</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--INSTALLATION GUIDE-->
                                        <li class='has-sub'><a href='#'>INSTALLATION GUIDE</a>
                                            <ul>
                                                <li class='has-sub'><a href='#'>Product 1</a>
                                                </li>
                                                <li class='has-sub'><a href='#'>Product 2</a>
                                                    <ul>
                                                        <li><a href='#'>Sub Product</a></li>
                                                        <li><a href='#'>Sub Product</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--TECHNICAL HELP-->
                                        <li class='has-sub'><a href='#'>TECHNICAL HELP</a>
                                            <ul>
                                                <li class='has-sub'><a href='#'>Product 1</a>
                                                </li>
                                                <li class='has-sub'><a href='#'>Product 2</a>
                                                    <ul>
                                                        <li><a href='#'>Sub Product</a></li>
                                                        <li><a href='#'>Sub Product</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--CONTACT DETAILS-->
                                        <li class='has-sub'><a href='#'>CONTACT DETAILS</a>
                                            <ul>
                                                <li class='has-sub'><a href='#'>Product 1</a>
                                                </li>
                                                <li class='has-sub'><a href='#'>Product 2</a>
                                                    <ul>
                                                        <li><a href='#'>Sub Product</a></li>
                                                        <li><a href='#'>Sub Product</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--ARCHIVE-->
                                        <li class='has-sub'><a href='#'>ARCHIVE</a>
                                            <ul>
                                                <li class='has-sub'><a href='#'>Product 1</a>
                                                </li>
                                                <li class='has-sub'><a href='#'>Product 2</a>
                                                    <ul>
                                                        <li><a href='#'>Sub Product</a></li>
                                                        <li><a href='#'>Sub Product</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            <!--:::::::::::::::::::::NAVIGATION::::::::::::::::::::::::::::::::-->
                <div class="mdl-cell mdl-cell--4-col">
                    <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">Welcome</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Mauris sagittis pellentesque lacus eleifend lacinia...
                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                Get Started
                            </a>
                        </div>
                        <div class="mdl-card__menu">
                            <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                <i class="material-icons">share</i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="mdl-cell mdl-cell--4-col"></div>
            </div>

        </div>
    </main>
</div>
</body>
<html>
