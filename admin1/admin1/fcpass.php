<?php
require_once("../PHPMailer-master/PHPMailerAutoload.php");
$ename=$_SESSION['ename'];
$year=$_SESSION['eyear'];
$pwd=$_SESSION['pwd'];
$fname=$_SESSION['fid'];
$mail = new PHPMailer;
//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'nholkar33@gmail.com';                 // SMTP username
$mail->Password = 'wavemotion';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
$mail->setFrom('nholkar33@gmail.com', 'Neil');
$mail->addAddress('nholkar32@gmail.com');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('nholkar33@gmail.com', 'Neil');
$mail->addCC('nholkar33@gmail.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'Assigned as Faculty Co-ordinator';
$mail->Body    = 'You have been assigned as faculty Co-ordinator for the event '.$ename.' for year '.$year.'<br/>Now you can login to manage your event.<br/>AdminId : '.$fid.'<br/>Password : '.$pwd.'<br/><a href="http://localhost/cfm2/cfm2/admin1/adminlogin1.php">Login</a>' ;
$mail->AltBody =  'You have been assigned as faculty Co-ordinator for the event '.$ename.'<br/>Now you can login to manage your event.<br/>AdminId : '.$fid.'<br/>Password : '.$pwd ;
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
