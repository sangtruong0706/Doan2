<?php
require_once "PHPMailer/src/Exception.php";
require_once "PHPMailer/src/PHPMailer.php";
require_once "PHPMailer/src/SMTP.php";
require_once "PHPMailer/src/OAuthTokenProvider.php";
require_once "PHPMailer/src/POP3.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class SendMail
{
    public static function send($title, $content, $email)
    {
        $mail = new PHPMailer(true); 
                           // Passing `true` enables exceptions
        try {
            $mail = new PHPMailer;

            // -----------------------------------------------------------------------------
            $mail->SMTPDebug = 2;                   // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = "smtp.gmail.com";                       // Set the SMTP server to send through
            $mail->SMTPAuth   = true;  
            $mail->SMTPAutoTLS = true;                                 // Enable SMTP authentication
            $mail->Username = "truongvansangem0706@gmail.com";                 // SMTP username
            $mail->Password = "qfjhehgibjjeziff";                            // SMTP password
            $mail->SMTPSecure = "TLS";                                        // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //erxsemqmfucnpmwe
            //Recipients
            $mail->setFrom("truongvansangem0706@gmail.com", "Mailer");
            $mail->addAddress($email);     // Add a recipient

            //Content


            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $title;
            $mail->Body    = $content;
            // $mail->AltBody = '';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }
}
