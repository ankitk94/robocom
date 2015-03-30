<?php
require 'mail/class.phpmailer.php';
include_once('config.php');
include_once('mail/mailPass.php');
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = 'smtp';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com'; // "ssl://smtp.gmail.com" didn't worked
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
// or try these settings (worked on XAMPP and WAMP):
 $mail->Port = 587;
 $mail->SMTPSecure = 'tls';


$mail->Username = "ankitk3000@gmail.com";
$mail->Password = $pass;
 
$mail->IsHTML(true); // if you are going to send HTML formatted emails
$mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.
 
$mail->From = "ankitk3000@gmail.com";
$mail->FromName = "Your Name";

$connect = mysqli_connect($servername,$username,$password,$dbname);
$query = "SELECT * FROM subscribed;";
$result = mysqli_query($connect,$query);

while($res = mysqli_fetch_array($result))
{
	$mail->addAddress($res['emailID'],$res['name']); 
	echo $res['emailID'];
	$mail->Subject = "Research Bros Subscription";
	$mail->Body = "Auto generated email";
}

if(!$mail->Send())
    echo "Message was not sent <br />PHPMailer Error: " . $mail->ErrorInfo;
else
    echo "Message has been sent";
	
    ?>
	