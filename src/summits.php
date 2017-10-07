<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="summits">
<div id="summit-top"></div>
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
    <a href="#one"><img src="images/white-arrow-down.png" alt="arrow down"></a>
  </div>
</div>


<!-- ----------------------------------
Portfolio with include files

--------------------------------------- -->

<!-- ---------------------------------
SUMMIT ONE
-------------------------------------- -->
<div id="one"></div>

<section class="summit-section odd-container">
  <div class="arrow arrow-up">
    <a href="#summit-top"><img src="images/odd-arrow-up.png" alt="arrow up"></a>
  </div>

    <?php include_once "partical/odd.inc.php"; ?>

  <div class="arrow arrow-down">
    <a href="#two"><img src="images/odd-arrow-down.png" alt="arrow down"></a>
  </div>
</section>

<!-- ---------------------------------
SUMMIT TWO
-------------------------------------- -->
<div id="two"></div>

<section class="summit-section even-container">
  <div class="arrow arrow-up">
    <a href="#one"><img src="images/white-arrow-up.png" alt="arrow up"></a>
  </div>

    <?php //include_once "partical/2.inc.php"; ?>

  <div class="arrow arrow-down">
    <a href="#three"><img src="images/white-arrow-down.png" alt="arrow down"></a>
  </div>
</section>

<!-- ---------------------------------
SUMMIT THREE
-------------------------------------- -->
<div id="three"></div>

<section class="summit-section odd-container">
  <div class="arrow arrow-up">
    <a href="#two"><img src="images/odd-arrow-up.png" alt="arrow up"></a>
  </div>

    <?php //include_once "partical/3.inc.php"; ?>

  <div class="arrow arrow-down">
    <a href="#four"><img src="images/odd-arrow-down.png" alt="arrow down"></a>
  </div>
</section>

<!-- ---------------------------------
SUMMIT THREE
-------------------------------------- -->
<div id="four"></div>

<section class="summit-section even-container">
  <div class="arrow arrow-up">
    <a href="#three"><img src="images/white-arrow-up.png" alt="arrow up"></a>
  </div>

    <?php //include_once "partical/4.inc.php"; ?>

  <div class="arrow arrow-down">
<!--    <a href="#five"><img src="images/with-arrow-down.png" alt="arrow down"></a>-->
  </div>


</body>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="js/menu.js"></script>
<script src="js/smooth-scroll.js"></script>
</html>