<?php
include_once 'resource/Database.php';
include_once 'resource/utilities.php';
include_once 'resource/send-email.php';

if(isset($_POST['signupBtn'])){
    $form_errors = array();
    $required_fields = array('email', 'username', 'password');

    $form_errors = array_merge($form_errors, check_empty_fields($required_fields));
    $fields_to_check_length = array('username' => 4, 'password' => 6);
    $form_errors = array_merge($form_errors, check_min_length($fields_to_check_length));
    $form_errors = array_merge($form_errors, check_email($_POST));
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    if(checkDuplicateUsername($username, $db)){
      echo "Username taken!";
    }
    if(checkDuplicateEmail($email, $db)){
      echo "Email taken!";
    }
    else if(empty($form_errors)){

        try{
            $sqlInsert = "INSERT INTO users (username, email, password, join_date, level)
              VALUES (:username, :email, :password, now(), 0)";
            $statement = $db->prepare($sqlInsert);
            $statement->execute(array(':username' => $username, ':email' => $email, ':password' => $hashed_password));
            if($statement->rowCount() == 1){

                $result = "<p style='padding:20px; border: 1px solid gray; color: green;'> Registration Successful</p>";
                $user_id = $db->lastInsertID();
                $encode_id = base64_encode("encodeuserid$user_id");
                $mail_body = '<html>
                <body style="body{
	background-color:#E6E6E6;
	font-family:Helvetica,Arial,sans-serif
}
h2.success{
	font-size:22px;
	color:#8F9945;
	padding:0px;
	margin-bottom:5px
	margin-top:15px;
	font-weight:lighter;
}
h2.error{
	font-size:22px;
	color:#DD332E;
	padding:0px;
	margin-bottom:5px;
	margin-top:15px;
	font-weight:lighter;
}
p{
	font-size:14px;
	color:#666;
	padding:0px;
	margin:0px;line-height:16px;
}
.clear{clear:both;}
.container{
	width:629px;
	margin-left:auto;
	margin-right:auto;
	margin-top:10%;
}
.message-box{
	background:#fff url(uploads/mail-header-bg.png) no-repeat top left;
	padding-top:40px;
	padding-bottom:20px;
	padding-left:20px;
	padding-right:20px;
	border-bottom-left-radius:7px;
	border-bottom-right-radius:7px;
	-moz-border-radius-bottomleft:7px;
	-moz-border-radius-bottomright:7px;
}
.message-shadow{
	background:transparent url(uploads/mail-footer-bg.png) no-repeat center top;
	height:24px;
	clear:both;
}
.message-icon{
	float:left;
	width:80px;
	display:inline;
	margin-right:25px;
}
.message-content{
	float:left;
	display:inline;
	width:484px;
}
.logo{
	width:131px;margin-left:auto;
	margin-right:auto;
	padding-bottom:35px;
}">
<div class="container">
<div class="logo"> Team1 </div>
<div class="message-box">
<div class="message-icon">

</div>
<div class="message-content">
<h2 class="success">Please activate your account!</h2>
</div>
<div class="clear"></div>
</div>
<div class="message-shadow"></div>
</div>
                <p>Dear '.$username.'<br><br>Thank you for registering, please click on the link below to
                	confirm your email address</p>
                <p><a href="http://localhost/team1/activate.php?id='.$encode_id.'"> Confirm Email</a></p>
                <p><strong>&copy;2017 Team1</strong></p>
                </body>
                </html>';
                $mail->addAddress($email, $username);
                $mail->Subject = "Message sent!";
                $mail->Body = $mail_body;

                if (!$mail->Send()) {
                  echo "Sent email failed!";
                }
                else{
                  echo "Sent email success";
                }
            }
        }catch (PDOException $ex){
          // $result = "<p style='padding:20px; border: 1px solid gray; color: green;'> .$ex->getMessage()</p>";
           $result = "<p style='padding:20px; border: 1px solid gray; color: red;'> An error occurred: ".$ex->getMessage()."</p>";
            // $result = flashMessage("error, please try again!" .$ex->getMessage());
        }
    }
    else{
        if(count($form_errors) == 1){
            $result = "<p style='color: red;'> There was 1 error in the form<br>";
        }else{
            $result = "<p style='color: red;'> There were " .count($form_errors). " errors in the form <br>";
        }
    }

}
//activate

else if(isset($_GET['id'])) {
$encoded_id = $_GET['id'];
$decode_id = base64_decode($encoded_id);
$user_id_array = explode("encodeuserid", $decode_id);
$id = $user_id_array[1];

$sql = "UPDATE users SET activated =:activated WHERE id=:id AND activated='0'";

$statement = $db->prepare($sql);
$statement->execute(array(':activated' => "1", ':id' => $id));

if ($statement->rowCount() == 1) {
$result = '<h2>Email Confirmed </h2>
<p>Your email address has been verified, you can now <a href="index.php">login</a> with your email and password.</p>';
} else {
$result = "<p class='lead'>No changes made please contact site admin,
    if you have not confirmed your email before</p>";
}
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Register Page</title>
</head>
<body>
<h2>User Registration </h2><hr>

<h3>Registration Form</h3>

<?php if(isset($result)) echo $result; ?>
<?php if(!empty($form_errors)) echo show_errors($form_errors); ?>
<form method="post" action="">
    <table>
        <tr><td>Email:</td> <td><input type="text" value="" name="email"></td></tr>
        <tr><td>Username:</td> <td><input type="text" value="" name="username"></td></tr>
        <tr><td>Password:</td> <td><input type="password" value="" name="password"></td></tr>
        <tr><td></td><td><input style="float: right;" type="submit" name="signupBtn" value="Signup"></td></tr>
    </table>
</form>
<p><a href="index.php">Back</a> </p>
</body>
</html>
