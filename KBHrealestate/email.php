<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/PHPMailer.php';
require 'src/Exception.php';
require 'src/SMTP.php';


$mail = new PHPMailer(true);

    
    try {
        //Server settings
        $mail->SMTPDebug = 2;                                       // Enable verbose debug output
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'kbhrealestatekea@gmail.com';                     // SMTP username
        $mail->Password   = '&realestate';                               // SMTP password
        $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to
    
       
        $mail->setFrom('kbhrealestatekea@gmail.com', 'KBH Real Estate');
        
        $mail->addAddress('kbhrealestatekea@gmail.com');    
        
        $body = '<p>This is our welcoming email</p>';
        
        $mail->isHTML(true);
       
     
        $mail->Subject = 'Welcome to Kobenhavns Real Estate';
        $mail->Body    =  $body;
        $mail->AltBody = strip_tags($body);
    
        $mail->send(); 
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: '. $mail->ErrorInfo;
    }
