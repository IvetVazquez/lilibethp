<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * This uses traditional id & password authentication - look at the gmail_xoauth.phps
 * example to see how to use XOAUTH2.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */

include('./PHPMailer.php');
include('./SMTP.php');
include('./Exception.php');

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Script Runtime Validation
$precondition = isset($_GET['secret_hash']) && $_GET['secret_hash'] === "efhn10ddsh12h8x10n8e23";
$condition = $_SERVER['SERVER_ADDR'] === $_SERVER['REMOTE_ADDR'];
if ( $precondition == FALSE || $condition == FALSE ) {
  exit(1);
}

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Set the hostname of the mail server
$mail->Host = 'smtp.live.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "hernandez.brian@outlook.com";

//Password to use for SMTP authentication
$mail->Password = "lG0W9]vH4qBdjgp";

//Set who the message is to be sent from
$mail->setFrom('hernandez.brian@outlook.com', 'YOLO');

//Set an alternative reply-to address
$mail->addReplyTo('hernandez.brian@outlook.com', 'YOLO');

//Set who the message is to be sent to
$mail->addAddress('anaivetvazquez@gmail.com', 'Vaz Danz');

//Set the subject line
$mail->Subject = 'Nuevo Lead - LilibethPinto.com';

//Read an HTML message body from an external file, convert referenced images to embedded,
$body = file_get_contents('./contentsutf8.html');

//Replaces $healthy with $yummy in $body
$healthy = array("__THE_NAME__", "__THE_EMAIL__", "__THE_WHATSAPP__", "__THE_FINDME__", "__THE_MESSAGE__");
$yummy   = array($_GET['name'], $_GET['email'], $_GET['whatsapp'], $_GET['findme'], $_GET['message']);
$newBody = str_replace($healthy, $yummy, $body);

$mail->msgHTML($newBody, __DIR__);

//Replace the plain text body with one created manually
$mail->AltBody = 'Contacta cuanto antes a tu nuevo prospecto';

//Attach an image file
//$mail->addAttachment('./images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}