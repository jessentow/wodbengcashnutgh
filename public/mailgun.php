<?php

use Mailgun\Mailgun;

// function usemailgun() {
    require 'vendor/autoload.php';
   include './mailgun./mailgun-php./src./Mailgun./Mailgun.php';
    // C:\xampp74\htdocs\ride_or_die\July\wodbeng-cashew-nut0
    $mail = new Mailgun('76a98041488406a78df518d0c92b2e9c-c485922e-8ec8f4e5');
    try {
    // $mgClient = Mailgun::create('76a98041488406a78df518d0c92b2e9c-c485922e-8ec8f4e5', 'https://codjosoft.tech');
    $domain = "codjosoft.tech";
    $params = array(
    'from'    => 'Excited User <contact@wodbengcashnutgh.com>',
    'to'      => 'kojo53i@live.com',
    'subject' => 'test email',
    'text'    => 'Testing some Mailgun awesomness!'
    );

    $mail->sendMessage($domain, $params);
    // ad92b1a8200ea34f0e288f0660ccc266-c485922e-cca9e587

   # Make the call to the client.
    // $mgClient->messages()->send($domain, $params);

    if (!$mail) {
            throw new Exception("<br>" . "failed to send email through mailgun...2");
        }
    echo "<br> <h1>email sent successful...</h1>";
    } catch (Exception $e) {
        echo $e->getMessage();
        exit();
    }
// }
    
