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
    <p class="userbar">Welcome back <?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?> <a href="logout.php">Logout</a> </p>
  <?php endif ?>

</div>

<body>
  <header class="site-header" role="banner">


    <div class="header-image">
        <div class="header-image-text">
            <h2 class="header-title">Learn with Us</h2>
            <p class="header-description">Learn Nihongo in your luch</p>
            <a class="button button-yellow" href="../main/index.php">Started</a><a class="button button-blue" href="#">Get help</a>
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
<div id="modal-bg" class="login-modal-bg toggle-hide"></div>
<div id="login" class="login-container">
    <div class="col half">
        <h3>Sign in with email</h3>
        <?php if(isset($result)) echo $result; ?>
        <?php if(!empty($form_errors)) echo show_errors($form_errors); ?>
        <form method="post" action="">
            <div class="input-group">
                <input id="email" type="text" placeholder="Username" name="username">
                <label class="icon-label" for="email"><i class="icon ion-email"></i></label>
            </div>

            <div class="input-group">
                <input id="password" type="password" placeholder="Password" name="password">
                <label class="icon-label" for="password"><i class="icon ion-key"></i></label>
            </div>

            <input type="submit" value="Sign In" class="button button-red full-width" name="loginBtn">

            <p class="small"><a href="forgot_password.php">Forgot your password?</a>
            <br><a href="signup.php">Sign up using your email address</a></p>
        </form>
    </div>
    <div class="col half highlighted-bg">
        <button class="button full-width button-twitter"><i class="icon ion-social-twitter"></i>Sign in with Twitter</button>
        <button class="button full-width button-github"><i class="icon ion-social-github"></i>Sign in with Github</button>
        <button class="button full-width button-facebook"><i class="icon ion-social-facebook"></i>Sign in with Facebook</button>
        <button class="button full-width button-google"><i class="icon ion-social-google"></i>Sign in with Google</button>
        <button class="button full-width button-linkedin"><i class="icon ion-social-linkedin"></i>Sign in with LinkedIn</button>
    </div>
    <button class="button button-red close-button toggle-hide"><i class="icon ion-close-circled"></i> Close</button>
</div>

    <script src="js/index.js"></script>

</body>
</html>
