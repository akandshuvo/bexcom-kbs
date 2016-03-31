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
            <span class="mdl-layout-title">ABOUT DTH</span>
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
                            $myDirectory=opendir("../docs/dth/product");
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
                                    if($name==".."){$name=".. (Current Directory)"; $extn="&lt;System Dir&gt;";}
                                    if($name=="..."){$name="... (Parent Directory)"; $extn="&lt;System Dir&gt;";}
                                    // Print 'em
                                    print("
                                   <tr class='$class'>
                                     <td>
                                       <a href='../docs/dth/product/$namehref' target='_blank'>$name</a>
                                     </td>
                                     <td><a href='./$namehref'>$extn</a></td>
                                     <td>
                                       <a href='../docs/dth/product/$namehref' target='_blank'>

                                        <button type='mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored'>
                                          <i class='material-icons'>&#xE884;</i>
                                        </button>
                                       </a>
                                     </td>
                                   </tr>");
                                }
                            }
                            ?>
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
                            $myDirectoryservice=opendir("../docs/dth/services");
                            // Gets each entry
                            while($entryNameservice=readdir($myDirectoryservice)) {
                                $dirArrayservice[]=$entryNameservice;
                            }
                            // Finds extensions of files
                            function findextsservice ($filenameservice) {
                                $filenameservice=strtolower($filenameservice);
                                $extsservice=split("[/\\.]", $filenameservice);
                                $nservice=count($extsservice)-1;
                                $extsservice=$extsservice[$nservice];
                                return $extsservice;
                            }
                            // Closes directory
                            closedir($myDirectoryservice);
                            // Counts elements in array
                            $indexCountservice=count($dirArrayservice);
                            // Sorts files
                            sort($dirArrayservice);
                            // Loops through the array of files
                            for($indexservice=0; $indexservice < $indexCountservice; $indexservice++) {
                                // Allows ./?hidden to show hidden files
                                if($_SERVER['QUERY_STRING']=="hidden")
                                {$hideservice="";
                                    $ahrefservice="./";
                                    $atextservice="Hide";}
                                else
                                {$hideservice=".";
                                    $ahrefservice="./?hidden";
                                    $atextservice="Show";}
                                if(substr("$dirArrayservice[$indexservice]", 0, 1) != $hideservice) {
                                    // Gets File Names
                                    $nameservice=$dirArrayservice[$indexservice];
                                    $namehrefservice=$dirArrayservice[$indexservice];
                                    // Gets Extensions
                                    $extnservice=findexts($dirArrayservice[$indexservice]);

                                    // Prettifies File Types, add more to suit your needs.
                                    switch ($extnservice){
                                        case "png": $extnservice="PNG Image"; break;
                                        case "jpg": $extnservice="JPEG Image"; break;
                                        case "svg": $extnservice="SVG Image"; break;
                                        case "gif": $extnservice="GIF Image"; break;
                                        case "ico": $extnservice="Windows Icon"; break;
                                        case "txt": $extnservice="Text File"; break;
                                        case "log": $extnservice="Log File"; break;
                                        case "htm": $extnservice="HTML File"; break;
                                        case "php": $extnservice="PHP Script"; break;
                                        case "js": $extnservice="Javascript"; break;
                                        case "css": $extnservice="Stylesheet"; break;
                                        case "pdf": $extnservice="PDF Document"; break;
                                        case "zip": $extnservice="ZIP Archive"; break;
                                        case "bak": $extnservice="Backup File"; break;
                                        default: $extnservice=strtoupper($extnservice)." File"; break;
                                    }
                                    // Separates directories
                                    if(is_dir($dirArrayservice[$indexservice])) {
                                        $extnservice="&lt;Directory&gt;";
                                        $sizeservice="&lt;Directory&gt;";
                                        $classservice="dir";
                                    } else {
                                        $classservice="file";
                                    }
                                    // Cleans up . and .. directories
                                    if($nameservice==".."){$nameservice=".. (Current Directory)"; $extnservice="&lt;System Dir&gt;";}
                                    if($nameservice=="..."){$nameservice="... (Parent Directory)"; $extnservice="&lt;System Dir&gt;";}
                                    // Print 'em
                                    print("
                                   <tr class='$classservice'>
                                     <td>
                                       <a href='../docs/dth/services/$namehrefservice' target='_blank'>$nameservice</a>
                                     </td>
                                     <td><a href='./$namehrefservice'>$extnservice</a></td>
                                     <td>
                                       <a href='../docs/dth/services/$namehrefservice' target='_blank'>
                                       <button type='mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored'>
                                         <i class='material-icons'>&#xE884;</i>
                                       </button>
                                       </a>
                                     </td>
                                   </tr>");
                                }
                            }
                            ?>
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
                            $myDirectory_offer=opendir("../docs/dth/offers");
                            // Gets each entry
                            while($entryName_offer=readdir($myDirectory_offer)) {
                                $dirArray_offer[]=$entryName_offer;
                            }
                            // Finds extensions of files
                            function findexts_offer ($filename_offer) {
                                $filename_offer=strtolower($filename_offer);
                                $exts_offer=split("[/\\.]", $filename_offer);
                                $n_offer=count($exts_offer)-1;
                                $exts_offer=$exts_offer[$n_offer];
                                return $exts_offer;
                            }
                            // Closes directory
                            closedir($myDirectory_offer);
                            // Counts elements in array
                            $indexCount_offer=count($dirArray_offer);
                            // Sorts files
                            sort($dirArray_offer);
                            // Loops through the array of files
                            for($index_offer=0; $index_offer < $indexCount_offer; $index_offer++) {
                                // Allows ./?hidden to show hidden files
                                if($_SERVER['QUERY_STRING']=="hidden")
                                {$hide_offer="";
                                    $ahref_offer="./";
                                    $atext_offer="Hide";}
                                else
                                {$hide_offer=".";
                                    $ahref_offer="./?hidden";
                                    $atext_offer="Show";}
                                if(substr("$dirArray_offer[$index_offer]", 0, 1) != $hide_offer) {
                                    // Gets File Names
                                    $name_offer=$dirArray_offer[$index_offer];
                                    $namehref_offer=$dirArray_offer[$index_offer];
                                    // Gets Extensions
                                    $extn_offer=findexts($dirArray_offer[$index_offer]);

                                    // Prettifies File Types, add more to suit your needs.
                                    switch ($extn_offer){
                                        case "png": $extn_offer="PNG Image"; break;
                                        case "jpg": $extn_offer="JPEG Image"; break;
                                        case "svg": $extn_offer="SVG Image"; break;
                                        case "gif": $extn_offer="GIF Image"; break;
                                        case "ico": $extn_offer="Windows Icon"; break;
                                        case "txt": $extn_offer="Text File"; break;
                                        case "log": $extn_offer="Log File"; break;
                                        case "htm": $extn_offer="HTML File"; break;
                                        case "php": $extn_offer="PHP Script"; break;
                                        case "js": $extn_offer="Javascript"; break;
                                        case "css": $extn_offer="Stylesheet"; break;
                                        case "pdf": $extn_offer="PDF Document"; break;
                                        case "zip": $extn_offer="ZIP Archive"; break;
                                        case "bak": $extn_offer="Backup File"; break;
                                        default: $extn_offer=strtoupper($extn_offer)." File"; break;
                                    }
                                    // Separates directories
                                    if(is_dir($dirArray_offer[$index_offer])) {
                                        $extn_offer="&lt;Directory&gt;";
                                        $size_offer="&lt;Directory&gt;";
                                        $class_offer="dir";
                                    } else {
                                        $class_offer="file";
                                    }
                                    // Cleans up . and .. directories
                                    if($name_offer==".."){$name_offer=".. (Current Directory)"; $extn_offer="&lt;System Dir&gt;";}
                                    if($name_offer=="..."){$name_offer="... (Parent Directory)"; $extn_offer="&lt;System Dir&gt;";}
                                    // Print 'em
                                    print("
                                   <tr class='$class_offer'>
                                     <td>
                                       <a href='../docs/dth/offers/$namehref_offer' target='_blank'>$name_offer</a>
                                     </td>
                                     <td><a href='./$namehref_offer'>$extn_offer</a></td>
                                     <td>
                                       <a href='../docs/dth/offers/$namehref_offer' target='_blank'>
                                       <button type='mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored'>
                                         <i class='material-icons'>&#xE884;</i>
                                       </button>
                                       </a>
                                     </td>
                                   </tr>");
                                }
                            }
                            ?>
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
                            $myDirectory_whyrealvu=opendir("../docs/dth/whyrealvu");
                            // Gets each entry
                            while($entryName_whyrealvu=readdir($myDirectory_whyrealvu)) {
                                $dirArray_whyrealvu[]=$entryName_whyrealvu;
                            }
                            // Finds extensions of files
                            function findexts_whyrealvu ($filename_whyrealvu) {
                                $filename_whyrealvu=strtolower($filename_whyrealvu);
                                $exts_whyrealvu=split("[/\\.]", $filename_whyrealvu);
                                $n_whyrealvu=count($exts_whyrealvu)-1;
                                $exts_whyrealvu=$exts_whyrealvu[$n_whyrealvu];
                                return $exts_whyrealvu;
                            }
                            // Closes directory
                            closedir($myDirectory_whyrealvu);
                            // Counts elements in array
                            $indexCount_whyrealvu=count($dirArray_whyrealvu);
                            // Sorts files
                            sort($dirArray_whyrealvu);
                            // Loops through the array of files
                            for($index_whyrealvu=0; $index_whyrealvu < $indexCount_whyrealvu; $index_whyrealvu++) {
                                // Allows ./?hidden to show hidden files
                                if($_SERVER['QUERY_STRING']=="hidden")
                                {$hide_whyrealvu="";
                                    $ahref_whyrealvu="./";
                                    $atext_whyrealvu="Hide";}
                                else
                                {$hide_whyrealvu=".";
                                    $ahref_whyrealvu="./?hidden";
                                    $atext_whyrealvu="Show";}
                                if(substr("$dirArray_whyrealvu[$index_whyrealvu]", 0, 1) != $hide_whyrealvu) {
                                    // Gets File Names
                                    $name_whyrealvu=$dirArray_whyrealvu[$index_whyrealvu];
                                    $namehref_whyrealvu=$dirArray_whyrealvu[$index_whyrealvu];
                                    // Gets Extensions
                                    $extn_whyrealvu=findexts($dirArray_whyrealvu[$index_whyrealvu]);

                                    // Prettifies File Types, add more to suit your needs.
                                    switch ($extn_whyrealvu){
                                        case "png": $extn_whyrealvu="PNG Image"; break;
                                        case "jpg": $extn_whyrealvu="JPEG Image"; break;
                                        case "svg": $extn_whyrealvu="SVG Image"; break;
                                        case "gif": $extn_whyrealvu="GIF Image"; break;
                                        case "ico": $extn_whyrealvu="Windows Icon"; break;
                                        case "txt": $extn_whyrealvu="Text File"; break;
                                        case "log": $extn_whyrealvu="Log File"; break;
                                        case "htm": $extn_whyrealvu="HTML File"; break;
                                        case "php": $extn_whyrealvu="PHP Script"; break;
                                        case "js": $extn_whyrealvu="Javascript"; break;
                                        case "css": $extn_whyrealvu="Stylesheet"; break;
                                        case "pdf": $extn_whyrealvu="PDF Document"; break;
                                        case "zip": $extn_whyrealvu="ZIP Archive"; break;
                                        case "bak": $extn_whyrealvu="Backup File"; break;
                                        default: $extn_whyrealvu=strtoupper($extn_whyrealvu)." File"; break;
                                    }
                                    // Separates directories
                                    if(is_dir($dirArray_whyrealvu[$index_whyrealvu])) {
                                        $extn_whyrealvu="&lt;Directory&gt;";
                                        $size_whyrealvu="&lt;Directory&gt;";
                                        $class_whyrealvu="dir";
                                    } else {
                                        $class_whyrealvu="file";
                                    }
                                    // Cleans up . and .. directories
                                    if($name_whyrealvu==".."){$name_whyrealvu=".. (Current Directory)"; $extn_whyrealvu="&lt;System Dir&gt;";}
                                    if($name_whyrealvu=="..."){$name_whyrealvu="... (Parent Directory)"; $extn_whyrealvu="&lt;System Dir&gt;";}
                                    // Print 'em
                                    print("
                                   <tr class='$class_whyrealvu'>
                                     <td>
                                       <a href='../docs/dth/whyrealvu/$namehref_whyrealvu' target='_blank'>$name_whyrealvu</a>
                                     </td>
                                     <td><a href='./$namehref_whyrealvu'>$extn_whyrealvu</a></td>
                                     <td>
                                       <a href='../docs/dth/whyrealvu/$namehref_whyrealvu' target='_blank'>
                                       <button type='mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored'>
                                         <i class='material-icons'>&#xE884;</i>
                                       </button>
                                       </a>
                                     </td>
                                   </tr>");
                                }
                            }
                            ?>
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
