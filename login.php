<?php
include_once 'resource/session.php';
include_once 'resource/utilities.php';
include_once 'resource/Database.php';


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
           $level = $row['level'];
           $hashed_password = $row['password'];
           $username = $row['username'];
           $activated = $row['activated'];
           if ($activated === "0") {
             echo "Please activate your account";
           }
           else
           {if(password_verify($password, $hashed_password)){
               $_SESSION['id'] = $id;
               $_SESSION['username'] = $username;
               if ($level === "1"){
               header("location: manageuser.php");}
               else{
                 header("location: xprofile.php");
               }
           }else{
               $result = "<p style='padding: 20px; color: red; border: 1px solid gray;'> Invalid username or password</p>";
           }
       }}

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
  <title>Login to Team1</title>
  <style>
  [class*="fontawesome-"]:before {
    font-family: 'FontAwesome', sans-serif;
  }

  body {
    background: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuMCIgeTE9IjAuNSIgeDI9IjEuMCIgeTI9IjAuNSI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzI3MjgzOCIvPjxzdG9wIG9mZnNldD0iMzMuMzMzMzMlIiBzdG9wLWNvbG9yPSIjMmIyZDQxIi8+PHN0b3Agb2Zmc2V0PSI2Ni42NjY2NyUiIHN0b3AtY29sb3I9IiMzOTM1NDkiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiM0MzM1NDUiLz48L2xpbmVhckdyYWRpZW50PjwvZGVmcz48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJ1cmwoI2dyYWQpIiAvPjwvc3ZnPiA=');
    background: -webkit-gradient(linear, 0% 50%, 100% 50%, color-stop(0%, #272838), color-stop(33.33333%, #2b2d41), color-stop(66.66667%, #393549), color-stop(100%, #433545));
    background: -moz-linear-gradient(left, #272838, #2b2d41, #393549, #433545);
    background: -webkit-linear-gradient(left, #272838, #2b2d41, #393549, #433545);
    background: linear-gradient(to right, #272838, #2b2d41, #393549, #433545);
    font-family: 'Raleway', sans-serif;
  }

  form#login-form {
    background: #fff;
    width: 35em;
    margin: 2em auto;
    overflow: hidden;
    position: relative;
    -moz-border-radius: 0.3em;
    -webkit-border-radius: 0.3em;
    border-radius: 0.3em;
    -moz-box-shadow: 0 0 0.2em #000;
    -webkit-box-shadow: 0 0 0.2em #000;
    box-shadow: 0 0 0.2em #000;
  }
  form#login-form div.heading {
    background: #f85f64;
    color: #fff;
    text-align: center;
    text-transform: uppercase;
    font-weight: bold;
    padding: 1.5em;
  }
  form#login-form div.left {
    width: 50%;
    float: left;
    padding: 1.7em 1.5em 2.5em 1.5em;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
  }
  form#login-form div.right {
    width: 50%;
    float: right;
    padding: 1.7em 1.5em 2.5em 1.5em;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
  }
  form#login-form:before {
    content: 'or';
    color: gray;
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    margin: auto;
    height: 0.5em;
    width: 0.5em;
    left: -1.5em;
    top: 1.2em;
    z-index: 900;
  }
  form#login-form:after {
    content: '';
    position: absolute;
    background: rgba(128, 128, 128, 0.3);
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    margin: auto;
    height: 7.25em;
    width: 0.1em;
    left: -0.85em;
    top: -6.8em;
    -moz-box-shadow: 0 8.8em 0 0 rgba(128, 128, 128, 0.3);
    -webkit-box-shadow: 0 8.8em 0 0 rgba(128, 128, 128, 0.3);
    box-shadow: 0 8.8em 0 0 rgba(128, 128, 128, 0.3);
  }

  div.left label {
    display: inline-block;
    color: gray;
    font-size: 1.1em;
    margin-top: 0.6em;
  }
  div.left input[type="email"], div.left input[type="password"] {
    border: 0.1em solid #dfdfdf;
    padding: 1em;
    margin: 0.6em 0;
    -moz-border-radius: 0.2em;
    -webkit-border-radius: 0.2em;
    border-radius: 0.2em;
    -moz-box-shadow: 0 0 0.2em rgba(223, 223, 223, 0.2);
    -webkit-box-shadow: 0 0 0.2em rgba(223, 223, 223, 0.2);
    box-shadow: 0 0 0.2em rgba(223, 223, 223, 0.2);
    -moz-transition: all 0.15s ease-in-out;
    -o-transition: all 0.15s ease-in-out;
    -webkit-transition: all 0.15s ease-in-out;
    transition: all 0.15s ease-in-out;
  }
  div.left input[type="email"]:focus, div.left input[type="password"]:focus {
    outline: none;
    border: 0.1em solid #bdbdbd;
  }
  div.left input[type="submit"] {
    background: #f85f64;
    color: #fff;
    outline: none;
    text-transform: uppercase;
    padding: 1.2em;
    overflow: hidden;
    border: none;
    letter-spacing: 0.1em;
    margin: 0.5em 0;
    font-weight: bold;
    -moz-border-radius: 0.4em;
    -webkit-border-radius: 0.4em;
    border-radius: 0.4em;
    -moz-transition: all 0.15s ease-in-out;
    -o-transition: all 0.15s ease-in-out;
    -webkit-transition: all 0.15s ease-in-out;
    transition: all 0.15s ease-in-out;
  }
  div.left input[type="submit"]:hover {
    background: rgba(248, 95, 100, 0.8);
  }

  div.right div.connect {
    color: gray;
    font-size: 1.1em;
    text-align: center;
  }
  div.right a {
    display: inline-block;
    font-size: 1.5em;
    text-decoration: none;
    color: white;
    width: 9em;
    padding: 0.55em 0.3em;
    clear: both;
    text-align: center;
    margin: 0.5em 0.1em;
    -moz-border-radius: 0.3em;
    -webkit-border-radius: 0.3em;
    border-radius: 0.3em;
  }
  div.right a.facebook {
    background: #3a589a;
    margin-top: 0.8em;
    -moz-transition: all 0.15s ease-in-out;
    -o-transition: all 0.15s ease-in-out;
    -webkit-transition: all 0.15s ease-in-out;
    transition: all 0.15s ease-in-out;
  }
  div.right a.facebook:hover {
    background: rgba(58, 88, 154, 0.8);
  }
  div.right a.twitter {
    background: #4099ff;
    -moz-transition: all 0.15s ease-in-out;
    -o-transition: all 0.15s ease-in-out;
    -webkit-transition: all 0.15s ease-in-out;
    transition: all 0.15s ease-in-out;
  }
  div.right a.twitter:hover {
    background: rgba(64, 153, 255, 0.8);
  }
  div.right a.google-plus {
    background: #e9544f;
    -moz-transition: all 0.15s ease-in-out;
    -o-transition: all 0.15s ease-in-out;
    -webkit-transition: all 0.15s ease-in-out;
    transition: all 0.15s ease-in-out;
  }
  div.right a.google-plus:hover {
    background: rgba(233, 84, 79, 0.8);
  }

  </style>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Raleway'>
<link rel='stylesheet prefetch' href='http://weloveiconfonts.com/api/?family=fontawesome'>

      <link rel="stylesheet" href="css/style.css">


</head>

<body>
  <?php if(isset($result)) echo $result; ?>
  <?php if(!empty($form_errors)) echo show_errors($form_errors); ?>
  <form action="" id="login-form" method="post">
  <div class="heading">Login to team1</div>
  <div class="left">
    <label for="email">Username</label> <br />
    <input type="text" name="username" id="email" value=""/> <br />
    <label for="password">Password</label> <br />
    <input type="password" name="password" id="pass" value="" /> <br />
    <input type="submit" value="Signin" name="loginBtn" />
  </div>
  <div class="right">
    <div class="connect">Connect with</div>
    <a href="" class="facebook">
      <span class="fontawesome-facebook"></span>
    </a> <br />
    <a href="" class="twitter">
      <span class="fontawesome-twitter"></span>
    </a> <br />
    <a href="" class="google-plus">
      <span class="fontawesome-google-plus"></span>
    </a>
  </div>
</form>

    <script src="js/index.js"></script>

</body>
</html>




<!-- <form method="post" action="">
    <table>
        <tr><td>Username:</td> <td><input type="text" value="" name="username"></td></tr>
        <tr><td>Password:</td> <td><input type="password" value="" name="password"></td></tr>
        <tr><td><a href="forgot_password.php">Forgot Password?</a></td><td><input style="float: right;" type="submit" name="loginBtn" value="Signin"></td></tr>
    </table>
</form>  -->
