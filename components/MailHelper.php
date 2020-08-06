<?php


namespace app\components;


use PHPMailer\PHPMailer\PHPMailer;

class MailHelper
{
    public static function sendRequest($message, $subject)
    {
        $mail = new PHPMailer(TRUE);

        try {
//            $mail->SMTPDebug = 4;
            $mail->setFrom('notify@greenlinerussia.com', 'Greenline NOTIFY');
            $mail->addAddress('kiyonxxx@gmail.com');
//            $mail->addAddress('manager@greenlinerussia.com');
            $mail->Subject = $subject;
            $mail->CharSet = 'UTF-8';
            $mail->Body = $message;

            $mail->isSMTP();
            $mail->Host = 'smtp.jino.ru';
            $mail->SMTPAuth = TRUE;
            $mail->SMTPSecure = 'tls';
            $mail->Username = 'notify@greenlinerussia.com';
            $mail->Password = 'cB59Rr!ib5dTDFR';
            $mail->Port = 587;
            $mail->send();

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}