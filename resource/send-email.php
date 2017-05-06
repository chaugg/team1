<?php
require 'class.phpmailer.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = 'smtp';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->Host = "smtp.mailgun.org";
$mail->IsHTML(true);


$mail->SMTPAuth = true;
$mail->Username = "postmaster@mieal.com";
$mail->Password = "63c656183fca1fe1cb5e1bc62f4f4845";

$mail->IsHTML(true);
$mail->SingleTo = true;

$mail->From = "admin@team1.com";
$mail->FromName = "Admin";
