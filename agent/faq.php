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

  <?php
      include '../scripts/db.php';
      ##############################################################################################################
      $query = "SELECT id,answer,question from faq WHERE category='new'";
      $result = $conn->query($query);
      ##############################################################################################################
      $query1 = "SELECT id,answer,question from faq  WHERE category='pack'";
      $result1 = $conn->query($query1);
      #############################################################################################################
      $query2 = "SELECT id,answer,question from faq  WHERE category='recharge'";
      $result2 = $conn->query($query2);
      #############################################################################################################
      $query3 = "SELECT id,answer,question from faq  WHERE category='hardware'";
      $result3 = $conn->query($query3);
      #############################################################################################################
  ?>



<!-- Always shows a header, even in smaller screens. -->
<!-- Simple header with fixed tabs. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header
            mdl-layout--fixed-tabs">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title">FREQUENTLY ASKED QUESTION</span>
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
            <a href="#fixed-tab-1" class="mdl-layout__tab is-active">new real view connection</a>
            <a href="#fixed-tab-2" class="mdl-layout__tab">pack</a>
            <a href="#fixed-tab-3" class="mdl-layout__tab">recharge service</a>
            <a href="#fixed-tab-4" class="mdl-layout__tab">set top box and hardware</a>
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
            <div class="floating_btn">
                <!-- Colored FAB button with ripple -->
                <a href="insert/faq.php">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--raised mdl-js-ripple-effect mdl-button--colored">
                        <i class="material-icons">add</i>
                    </button>
                </a>
            </div>
            <div class="page-content">
                <!-- Your content goes here -->
                <div class="mdl-grid">
                  <div class="mdl-cell mdl-cell--2-col"></div>
                    <div class="mdl-cell mdl-cell--10-col">
                      <?php
                         while($row = $result->fetch_assoc()) {
                             $id = $row['id'];
                             $question = $row['question'];
                             $answer = $row['answer'];
                     ?>
                      <div class="faq">
                          <div class="question">
                              <?php echo $question ?>
                          </div>
                          <div class="answer">
                              <?php echo $answer ?>
                          </div>
                      </div>
                      <?php
                        }
                      ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="mdl-layout__tab-panel" id="fixed-tab-2">
          <div class="floating_btn">
              <!-- Colored FAB button with ripple -->
              <a href="insert/faq.php">
                  <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--raised mdl-js-ripple-effect mdl-button--colored">
                      <i class="material-icons">add</i>
                  </button>
              </a>
          </div>
          <div class="page-content">
              <!-- Your content goes here -->
              <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--2-col"></div>
                  <div class="mdl-cell mdl-cell--10-col">
                    <?php
                       while($row = $result1->fetch_assoc()) {
                           $id = $row['id'];
                           $question = $row['question'];
                           $answer = $row['answer'];
                   ?>
                      <div class="faq">
                          <div class="question">
                              <?php echo $question ?>
                          </div>
                          <div class="answer">
                              <?php echo $answer ?>
                          </div>
                      </div>
                    <?php
                      }
                    ?>
                  </div>
              </div>
          </div>
        </section>
        <section class="mdl-layout__tab-panel" id="fixed-tab-3">
          <div class="floating_btn">
              <!-- Colored FAB button with ripple -->
              <a href="insert/faq.php">
                  <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--raised mdl-js-ripple-effect mdl-button--colored">
                      <i class="material-icons">add</i>
                  </button>
              </a>
          </div>
          <div class="page-content">
              <!-- Your content goes here -->
              <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--2-col"></div>
                  <div class="mdl-cell mdl-cell--10-col">
                    <?php
                       while($row = $result2->fetch_assoc()) {
                           $id = $row['id'];
                           $question = $row['question'];
                           $answer = $row['answer'];
                   ?>
                      <div class="faq">
                          <div class="question">
                              <?php echo $question ?>
                          </div>
                          <div class="answer">
                              <?php echo $answer ?>
                          </div>
                      </div>
                    <?php
                      }
                    ?>
                  </div>
              </div>
          </div>
        </section>
        <section class="mdl-layout__tab-panel" id="fixed-tab-4">
          <div class="floating_btn">
              <!-- Colored FAB button with ripple -->
              <a href="insert/faq.php">
                  <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--raised mdl-js-ripple-effect mdl-button--colored">
                      <i class="material-icons">add</i>
                  </button>
              </a>
          </div>
          <div class="page-content">
              <!-- Your content goes here -->
              <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--2-col"></div>
                  <div class="mdl-cell mdl-cell--10-col">
                    <?php
                       while($row = $result3->fetch_assoc()) {
                           $id = $row['id'];
                           $question = $row['question'];
                           $answer = $row['answer'];
                   ?>
                    <div class="faq">
                        <div class="question">
                            <?php echo $question ?>
                        </div>
                        <div class="answer">
                            <?php echo $answer ?>
                        </div>
                    </div>
                    <?php
                      }
                    ?>
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