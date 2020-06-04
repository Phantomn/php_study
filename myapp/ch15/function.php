<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';
function mailer($fname, $fmail, $to, $subject, $content){
    $mail = new PHPMailer();
    $mail->IsSMTP();

    $mail->SMTPSecure = "ssl";
    $mail->SMTPAuth = true;

    $mail->Host = "smtp.naver.com";
    $mail->Port = 465;
    $mail->Username = "tmdvyr123@naver.com";
    $mail->Password = "Tmd\$vyr!23";

    $mail->CharSet ='UTF-8';
    $mail->From = $fmail;
    $mail->FromName = $fname;
    $mail->Subject = $subject;
    $mail->msgHTML($content);
    $mail->addAddress($to);

    return $mail->send();
}
?>