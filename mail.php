<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\MEcloud\PHPMailer-PHPMailer-2128d99\src\Exception.php';
require 'C:\xampp\htdocs\MEcloud\PHPMailer-PHPMailer-2128d99\src\PHPMailer.php';
require 'C:\xampp\htdocs\MEcloud\PHPMailer-PHPMailer-2128d99\src\SMTP.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp-mail.outlook.com';
$mail->SMTPAuth = true;
$mail->Username = 'kh.chong@microengine.net';
$mail->Password = '11385422Abc*';
$mail->Port = 587;

$mail->setFrom('kh.chong@microengine.net','KH CHONG');

$mail->addAddress('kennylky-wm22@student.tarc.edu.my');
$mail->addAddress('kenny.loh@microengine.net');



$mail->isHTML(true);

$mail->Subject ='You Are The BEST FRIEND';

$bodyContent = '<h1>You Are SO NAISEEE, THE BESTTTT NO 1<h1>';

$mail->Body = $bodyContent;

if($mail->send()){
    echo 'Message sent';
}else{
    'Message failed' .$mail->ErrorInfo;
}
?>