<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Summits</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="summits">
<div id="summit-top"></div>
<div class="container">
    <?php include_once "partical/header.inc.php"; ?>
  <section class="main-title">
    <h1>SUMMITS</h1>
    <h2 class="curly">Limited selection</h2>
  </section>

  <a href="#one">
    <div class="arrow arrow-down"></div>
  </a>
</div>


<!-- ----------------------------------
Portfolio with include files

--------------------------------------- -->

<!-- ---------------------------------
SUMMIT ONE
-------------------------------------- -->
<div id="one"></div>

<section class="summit-section odd-container">
  <a href="#summit-top">
    <div class="arrow arrow-up"></div>
  </a>

    <?php include_once "partical/1.inc.php"; ?>

  <a href="#two">
    <div class="arrow arrow-down"></div>
  </a>

</section>

<!-- ---------------------------------
SUMMIT TWO
-------------------------------------- -->
<div id="two"></div>

<section class="summit-section even-container">
  <a href="#one">
    <div class="arrow arrow-up"></div>
  </a>

    <?php include_once "partical/even.inc.php"; ?>

  <a href="#three">
    <div class="arrow arrow-down"></div>
  </a>
</section>

<!-- ---------------------------------
SUMMIT THREE
-------------------------------------- -->
<div id="three"></div>

<section class="summit-section odd-container">
  <a href="#two">
    <div class="arrow arrow-up"></div>
  </a>

    <?php //include_once "partical/3.inc.php"; ?>

  <a href="#four">
    <div class="arrow-down"></div>
  </a>
</section>

<!-- ---------------------------------
SUMMIT THREE
-------------------------------------- -->
<div id="four"></div>

<section class="summit-section even-container">
  <a href="#three">
    <div class="arrow arrow-up"></div>
  </a>

    <?php //include_once "partical/4.inc.php"; ?>

  <!--  <a href="#five"><div class="arrow-down"></div></a>-->
</section>


</body>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="js/menu.js"></script>
<script src="js/smooth-scroll.js"></script>
</html>