<?php
include_once 'resource/session.php';
include_once 'resource/Database.php';
include_once 'resource/utilities.php';

if(isset($_POST['loginBtn'])){
    $form_errors = array();
    $required_fields = array('username', 'password');
    $form_errors = array_merge($form_errors, check_empty_fields($required_fields));
    if(empty($form_errors)){
        $user = $_POST['username'];
        $password = $_POST['password'];
        $sqlQuery = "SELECT * FROM users WHERE username = :username";
        $statement = $db->prepare($sqlQuery);
        $statement->execute(array(':username' => $user));

       while($row = $statement->fetch()){
           $id = $row['id'];
           $hashed_password = $row['password'];
           $username = $row['username'];

           if(password_verify($password, $hashed_password)){
               $_SESSION['id'] = $id;
               $_SESSION['username'] = $username;

                header("location: home.php");
           }
            else{
               $result = "<p style='padding: 20px; color: red; border: 1px solid gray;'> Invalid username or password</p>";
           }
       }

    }else{
        if(count($form_errors) == 1){
            $result = "<p style='color: red;'>There was one error in the form </p>";
        }else{
            $result = "<p style='color: red;'>There were " .count($form_errors). " error in the form </p>";
        }
    }
}
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
<script src="js/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
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


<body>
  <header class="site-header" role="banner">

    <div class="topbar">
        <h1 class="site-title"><a href="#">

        <!-- Logo  -->


        <!-- Logo  -->

        </a></h1>

        <nav class="top-navigation" role="navigation">
            <ul class="inline-list padded-list">
                    <li><a href="#" class="ion-social-octocat"> Wiki</a></li>

                    <li><a href="signup.php" class="ion-ios-paw"> Register</a></li>

                    <li><a href="../form/login.php" class="icon ion-android-exit button button-red button-login toggle-hide ">Sign In</a></li>
            </ul>
        </nav>
    </div>

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
        <h2>How to use this website</h2>

        <div class="col fourth">
            <h3>Get Connected</h3>
            <img src="img/1.svg" alt="" class="landing-icon">
            <p>Join a class.</p>
        </div>

        <div class="col fourth">
            <h3>Pick a lesson</h3>
            <img src="img/2.svg" alt="" class="landing-icon">
            <p>Work together.</p>
        </div>

        <div class="col fourth">
            <h3>Learn everywhere</h3>
            <img src="img/3.svg" alt="" class="landing-icon">
            <p>Save your time.</p>
        </div>

        <div class="col fourth">
            <h3>Nonprofits</h3>
            <img src="img/4.svg" alt="" class="landing-icon">
            <p>Always free</p>
        </div>
    </section>

    <section class="fixed-width">
        <h2>Features</h2>

        <div class="col fourth highlighted-bg small-box">
            <h3>One</h3>
            <div class="icon icon-large ion-android-wifi"></div>
        </div>

        <div class="col fourth highlighted-bg small-box">
            <h3>Two</h3>
            <div class="icon icon-large ion-android-favorite"></div>
        </div>

        <div class="col fourth highlighted-bg small-box">
            <h3>Three</h3>
            <div class="icon icon-large ion-android-calendar"></div>
        </div>

        <div class="col fourth highlighted-bg small-box">
            <h3>Four</h3>
            <div class="icon icon-large ion-android-star"></div>
        </div>



        <div class="col fourth highlighted-bg small-box">
            <h3>Five</h3>
            <div class="icon icon-large ion-android-boat"></div>
        </div>

        <div class="col fourth highlighted-bg small-box">
            <h3>Six</h3>
            <div class="icon icon-large ion-android-happy"></div>
        </div>

        <div class="col fourth highlighted-bg small-box">
            <h3>Seven</h3>
            <div class="icon icon-large ion-social-snapchat"></div>
        </div>

        <div class="col fourth highlighted-bg small-box">
            <h3>Eight</h3>
            <div class="icon icon-large ion-social-freebsd-devil"></div>
        </div>

    </section>

    <section class="fixed-width highlighted-bg">
        <h2>Our leader</h2>

        <div class="col third">
            <img src="img/1.jpg" alt="" class="landing-icon testimonial-avatar">
            <p>@admin</a></p>
        </div>

        <div class="col third">
            <img src="img/2.jpg" alt="" class="landing-icon testimonial-avatar">
            <p>Boost up your skill!
            - <a href="#">@admin</a></p>
        </div>

        <div class="col third">
            <img src="img/3.jpg" alt="" class="landing-icon testimonial-avatar">
            <p>Welcoming!
                - <a href="https://twitter.com/cynthialanel">@admin</a>
            </p>
        </div>

    </section>

    <section class="fixed-width">
        <h2>Why you should join :</h2>

        <ul class="large-list">
            <li class="ion-lock-combination">Get help real time.</li>
            <li class="ion-lock-combination">Lorem up sum.</li>
            <li class="ion-lock-combination">YLorem up sum.</li>
            <li class="ion-lock-combination">Lorem up sum .</li>
            <li class="ion-lock-combination">Lorem up sum <strong>Nihongo</strong> Lorem up sum.</li>
            <li class="ion-lock-combination">Lorem up sum'll Lorem up sum.</li>
            <li class="ion-lock-combination">Lorem up sum.</li>
            <li class="ion-lock-combination">(it's free)</li>
        </ul>

        <a href="" class="button button-yellow">Started</a>
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
        <h3>Sign in with username</h3>
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

            <input type="checkbox" name="remember" value="yes">
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
