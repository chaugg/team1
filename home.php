<?php
include_once 'resource/session.php';

?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Learn Nihongo</title>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic|Roboto+Slab:700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/ionicons.min.css"> <!-- Prevent lost connection -->
<link rel="stylesheet" href="css/normalize.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!--
────────────────────────────────────────────────────────────────────────────────
─██████████████─██████████████─██████████████─██████──────────██████─████████───
─██░░░░░░░░░░██─██░░░░░░░░░░██─██░░░░░░░░░░██─██░░██████████████░░██─██░░░░██───
─██████░░██████─██░░██████████─██░░██████░░██─██░░░░░░░░░░░░░░░░░░██─████░░██───
─────██░░██─────██░░██─────────██░░██──██░░██─██░░██████░░██████░░██───██░░██───
─────██░░██─────██░░██████████─██░░██████░░██─██░░██──██░░██──██░░██───██░░██───
─────██░░██─────██░░░░░░░░░░██─██░░░░░░░░░░██─██░░██──██░░██──██░░██───██░░██───
─────██░░██─────██░░██████████─██░░██████░░██─██░░██──██████──██░░██───██░░██───
─────██░░██─────██░░██─────────██░░██──██░░██─██░░██──────────██░░██───██░░██───
─────██░░██─────██░░██████████─██░░██──██░░██─██░░██──────────██░░██─████░░████─
─────██░░██─────██░░░░░░░░░░██─██░░██──██░░██─██░░██──────────██░░██─██░░░░░░██─
─────██████─────██████████████─██████──██████─██████──────────██████─██████████─
────────────────────────────────────────────────────────────────────────────────
 -->


</head>
<div class="userbar">
  <?php if(!isset($_SESSION['username'])): ?>
    <P class="userbar">You are currently not signin <a href="login.php">Login</a> Not yet a member? <a href="signup.php">Signup</a> </P>
  <?php else: ?>
    <p class="userbar">Welcome back<?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?> <a href="logout.php">Logout</a>
    <a href="note/ax.php"> Message</a> </p>
  <?php endif ?>

</div>

<body>
  <header class="site-header" role="banner">


    <div class="header-image">
        <div class="header-image-text">
            <h2 class="header-title">Learn with Us</h2>
            <p class="header-description">Learn Nihongo in your luch</p>
            <a class="button button-yellow" href="../main/index.php">Started</a><a class="button button-blue" href="goal.php">View statics</a>
        </div>
    </div>

</header>

<main role="main" class="site-main">

    <section class="fixed-width highlighted-bg">
        <h2>Pick a lesson</h2>

        <div class="col fourth">
            <h3>Marugoto</h3>
            <img src="img/1.svg" alt="" class="landing-icon">

        </div>

        <div class="col fourth">
            <h3>Minna</h3>
            <img src="img/2.svg" alt="" class="landing-icon">

        </div>

        <div class="col fourth">
            <h3>Live class</h3>
            <img src="img/3.svg" alt="" class="landing-icon">

        </div>

        <div class="col fourth">
            <h3>For beginer</h3>
            <img src="img/4.svg" alt="" class="landing-icon">

        </div>
    </section>

    <section class="fixed-width">


    </section>

    <section class="fixed-width">

    </section>

    <section class="fixed-width">
        <h2>Our partner</h2>
        <img src="img/as-seen-on.png" alt="" class="featured-in-image">
    </section>


</main>


<footer class="site-footer" role="contentinfo">
    <ul class="inline-list">
        <li><a href="" class="icon ion-speakerphone">Blog</a></li>
        <li><a href="" class="icon ion-social-github">Github</a></li>
        <li><a href="" class="icon ion-social-twitch">Twitch</a></li>
        <li><a href="" class="icon ion-social-linkedin">LinkedIn</a></li>
        <li><a href="" class="icon ion-social-facebook">Facebook</a></li>
        <li><a href="" class="icon ion-social-twitter">Twitter</a></li>
        <li><a href="" class="icon ion-locked">Privacy</a></li>
    </ul>
</footer>

<!-- Login -->


    <script src="js/index.js"></script>

</body>
</html>
