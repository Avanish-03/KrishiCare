<?php 
require "PHPMailer-master/src/PHPMailer.php";
require "PHPMailer-master/src/Exception.php";
require "PHPMailer-master/src/SMTP.php";
require "Reports/FPDF-master/fpdf.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendMail($send_to, $subject, $body)
{
    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "tls";
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->Username = "collageucc@gmail.com";
        $mail->Password = "dtglgypehnapiiqr";

        $mail->setFrom("collageucc@gmail.com", "Dwivedi Jyoti");

        $mail->addAddress($send_to);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->send();
        return true; // Email sent successfully
    } catch (Exception $e) {
        echo $e;
        return false; // Failed to send email
    }
}