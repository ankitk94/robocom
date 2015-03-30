<?php
session_start();
ob_start();
require 'mail/class.phpmailer.php';
include_once('mail/mailPass.php');
include_once('config.php');
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = 'smtp';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com'; 
$mail->Port = 587;
$mail->SMTPSecure = 'tls';


$mail->Username = "ankitk3000@gmail.com";
$mail->Password = $pass;
 
$mail->IsHTML(true); 
$mail->SingleTo = true;
 
$mail->From = "ankitk3000@gmail.com";
$mail->FromName = "Research Bros";

$email = $_SESSION['emailID'];
$name = $_SESSION['name'];

$mail->addAddress($email,$name); 
$mail->Subject = "Research Bros Signup";
$mail->Body = "Auto generated email";
$mail->Send();
header('Location:ListlabSubmit.php');

    ?>
	