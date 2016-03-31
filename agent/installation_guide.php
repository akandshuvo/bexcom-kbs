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
            <span class="mdl-layout-title">INSTALLATION GUIDE</span>
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
        <section class="mdl-layout__tab-panel is-active" id="fixed-tab-1">
            <div class="page-content">
                <!-- Your content goes here -->
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--10-col">
                        <table class="table table-bordered table-responsive myTable">
                            <thead>
                            <tr>
                                <th>Filename</th>
                                <th>Type</th>
                                <th>Download</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            // Opens directory
                            $myDirectory=opendir("../docs");
                            // Gets each entry
                            while($entryName=readdir($myDirectory)) {
                                $dirArray[]=$entryName;
                            }
                            // Finds extensions of files
                            function findexts ($filename) {
                                $filename=strtolower($filename);
                                $exts=split("[/\\.]", $filename);
                                $n=count($exts)-1;
                                $exts=$exts[$n];
                                return $exts;
                            }
                            // Closes directory
                            closedir($myDirectory);
                            // Counts elements in array
                            $indexCount=count($dirArray);
                            // Sorts files
                            sort($dirArray);
                            // Loops through the array of files
                            for($index=0; $index < $indexCount; $index++) {
                                // Allows ./?hidden to show hidden files
                                if($_SERVER['QUERY_STRING']=="hidden")
                                {$hide="";
                                    $ahref="./";
                                    $atext="Hide";}
                                else
                                {$hide=".";
                                    $ahref="./?hidden";
                                    $atext="Show";}
                                if(substr("$dirArray[$index]", 0, 1) != $hide) {
                                    // Gets File Names
                                    $name=$dirArray[$index];
                                    $namehref=$dirArray[$index];
                                    // Gets Extensions
                                    $extn=findexts($dirArray[$index]);

                                    // Prettifies File Types, add more to suit your needs.
                                    switch ($extn){
                                        case "png": $extn="PNG Image"; break;
                                        case "jpg": $extn="JPEG Image"; break;
                                        case "svg": $extn="SVG Image"; break;
                                        case "gif": $extn="GIF Image"; break;
                                        case "ico": $extn="Windows Icon"; break;
                                        case "txt": $extn="Text File"; break;
                                        case "log": $extn="Log File"; break;
                                        case "htm": $extn="HTML File"; break;
                                        case "php": $extn="PHP Script"; break;
                                        case "js": $extn="Javascript"; break;
                                        case "css": $extn="Stylesheet"; break;
                                        case "pdf": $extn="PDF Document"; break;
                                        case "zip": $extn="ZIP Archive"; break;
                                        case "bak": $extn="Backup File"; break;
                                        default: $extn=strtoupper($extn)." File"; break;
                                    }
                                    // Separates directories
                                    if(is_dir($dirArray[$index])) {
                                        $extn="&lt;Directory&gt;";
                                        $size="&lt;Directory&gt;";
                                        $class="dir";
                                    } else {
                                        $class="file";
                                    }
                                    // Cleans up . and .. directories
                                    if($name=="."){$name=". (Current Directory)"; $extn="&lt;System Dir&gt;";}
                                    if($name==".."){$name=".. (Parent Directory)"; $extn="&lt;System Dir&gt;";}
                                    // Print 'em
                                    print("
                                   <tr class='$class'>
                                     <td>
                                       <a href='../docs/$namehref' target='_blank'>$name</a>
                                     </td>
                                     <td><a href='./$namehref'>$extn</a></td>
                                     <td>
                                       <a href='../docs/$namehref' target='_blank'><button type='button'>Download</button></a>
                                     </td>
                                   </tr>");
                                }
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="mdl-cell mdl-cell--2-col">
                        <form action="upload.php" method="post" enctype="multipart/form-data" name="dthproduct" id="dthproduct">
                            <label for="dthproduct"></label>
                            <input type="file" name="dthproduct" id="dthproduct" />
                            <input type="submit" name="Upload" id="Upload" value="Upload" />
                        </form>
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
