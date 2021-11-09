<?php
/*******************************************
 *  
 * important that the From header is a valid email address on the domain you're sending the email from
 *send mail to admin
*
 ********************************************/

function with_phpmailer() {

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
// C:\xampp74\htdocs\ride_or_die\July\wodbeng-cashew-nut\
include './phpmailer\phpmailer/src/PHPMailer/src/Exception.php';
include './phpmailer/phpmailer/src/PHPMailer.php';
include './phpmailer/phpmailer/PHPMailer/src/SMTP.php';
// public\phpmailer\phpmailer\src\PHPMailer.php



$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mailgun.org';                     // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'postmaster@sandboxfc840eb4f3ae434f832307f7d2952af7.mailgun.org';   // SMTP username
$mail->Password = 'ad92b1a8200ea34f0e288f0660ccc266-c485922e-cca9e587';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, only 'tls' is accepted

$mail->From = 'contact@wodbengcashnutgh.com';
$mail->FromName = 'Mailer';
$mail->addAddress('kojo53i@live.com');                 // Add a recipient

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters

$mail->Subject = 'Hello';
$mail->Body    = 'Testing some Mailgun awesomness';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
}


 function send_mail(){
    $to = 'contact@wodbengcashnutgh.com';
//define the subject of the email
$subject = 'Test email';
//define the message to be sent. 
$message = "Hello World!\r\nThis is my mail.";
//define the headers we want passed. 
$header = "From: contact@wodbengcashnutgh.com"; // must be a genuine address
//send the email
$mail_sent = mail($to, $subject, $message, $header);
//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed" 

echo $mail_sent ? "Mail sent". " <br>" : "Mail failed ...0". "<br>";
}

function sendMail(){

    // $to = "yeboah.determined.isaac@gmail.com";
    $to = "kojo53i@live.com";
    $from = "contact@wodbengcashnutgh.com";
    $body = "email sent from website url: ". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $subject = "Test email";
    $headers = "From: $from";
	// $headers = "From: " . $from . "\r\n";
	// $headers .= "Reply-To: ". $from . "\r\n";
	// $headers .= "MIME-Version: 1.0\r\n";
	// $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    try {
    $send = mail($to, $subject, $body, $headers);

    if (!$send) {
        throw new Exception("<br>" . "failed to send email...1");
    }
    }catch(Exception $e){
        echo $e->getMessage();
    }
}
   send_mail();

   sendMail();

    with_phpmailer();