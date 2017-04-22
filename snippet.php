include_once 'resource/send-mail.php';

$user_id = $db->lastInsertId();
$encode_id = base64_encode("encodeuserid{$$user_id}");

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
	background:#fff url('uploads/mail-header-bg.png') no-repeat top left;
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
	background:transparent url('uploads/mail-footer-bg.png') no-repeat center top;
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
	<div class="logo"><img src="uploads/ghost.png" alt=""></div>
	<div class="message-box">
		<div class="message-icon">

		</div>
	<div class="message-content">
		<h2 class="success">Team1</h2>
		<p>Please activate your acc.</p>
	</div>
	<div class="clear"></div>
	</div>
	<div class="message-shadow"></div>
</div>
<p><a href="http://localhost/team1/activate.php?id='.$encode_id.'"> Confirm Email</a></p>
<p><strong>&copy;2017 Team1</strong></p>
</body>
</html>';

$mail->addAddress($email, $username);
$mail->Subject = " Message from Team1 ";
$mail->Body = $mail_body;

//Error Handling for PHPMailer
if(!$mail->Send()){
$result = "<script type=\"text/javascript\">
                    swal(\"Error\",\" Email sending failed: $mail->ErrorInfo \",\"error\");</script>";
}
else{
$result = "<script type=\"text/javascript\">
                            swal({
                            title: \"Congratulations $username!\",
                            text: \"Registration Completed Successfully. Please check your email for confirmation link\",
                            type: 'success',
                            confirmButtonText: \"Thank You!\" });
                        </script>";
}


//activation
if(isset($_GET['id'])) {
$encoded_id = $_GET['id'];
$decode_id = base64_decode($encoded_id);
$user_id_array = explode("encodeuserid", $decode_id);
$id = $user_id_array[1];

$sql = "UPDATE users SET activated =:activated WHERE id=:id AND activated='0'";

$statement = $db->prepare($sql);
$statement->execute(array(':activated' => "1", ':id' => $id));

if ($statement->rowCount() == 1) {
$result = '<h2>Email Confirmed </h2>
<p>Your email address has been verified, you can now <a href="login.php">login</a> with your email and password.</p>';
} else {
$result = "<p class='lead'>No changes made please contact site admin,
    if you have not confirmed your email before</p>";
}
}
