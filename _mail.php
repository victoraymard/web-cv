<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'lib/PHPMailer/src/Exception.php';
require 'lib/PHPMailer/src/PHPMailer.php';
require 'lib/PHPMailer/src/SMTP.php';


// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
   // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output - our voir les logs
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'in-v3.mailjet.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = '2423def9caeb967083ac0089d90ffcaf';                     // SMTP username
    $mail->Password   = '47e244ed9285db75ae5d4398423f9fe5';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('victor.aymard@edu.ece.fr', 'Mon site web');
    $mail->addAddress('victor.aymard@edu.ece.fr', 'User');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Objet du mail : '.$_POST['subject'];
    $mail->Body    = 'Hello Victor, un nouveau message a été laissé sur ton site :<br>'.$_POST['message'].'<br> par : '.$_POST['name'].' dont le mail est : '.$_POST['mail']; //concaténation se fait avec un point
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients'; //format texte

    $mail->send();
    echo "Votre message m'a bien été envoyé. Merci Beaucoup !";
} catch (Exception $e) {
    echo "Ousp! un petit problème fait que votre message n'a pas pu m'être transmis... Voilà le coupable: {$mail->ErrorInfo}";
}







?>




