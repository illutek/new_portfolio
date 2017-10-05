<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="summits">
<div class="container">
  <header>

    <div class="firm-name-wrap">
      <div class="firm-name">
        <a href="index.php">illutek</a></div>
    </div>

    <div class="menu-wrap">
      <div class="menu-show-btn">
        MENU
      </div>
      <?php include_once "partical/menu.inc.php"; ?>
    </div>
  </header>
  <section class="main-title">
    <h1>SUMMITS</h1>
    <h2>{Limited selection}</h2>
  </section>
  <div class="arrow arrow-down">
    <img src="images/white-arrow-down.png" alt="arrow down">
  </div>
</div>


<!-- ----------------------------------
Portfolio with include files

--------------------------------------- -->

<?php include_once "partical/odd.inc.php"; ?>

<?php //include_once "partical/2.inc.php"; ?>

<?php //include_once "partical/3.inc.php"; ?>

<?php //include_once "partical/4.inc.php"; ?>

</body>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="js/menu.js"></script>
</html>