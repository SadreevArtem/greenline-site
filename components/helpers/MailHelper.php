<?php

namespace app\components\helpers;

use PHPMailer\PHPMailer\PHPMailer;
use Yii;

class MailHelper
{
    public static function sendRequest($message, $subject)
    {
        $mail = new PHPMailer(TRUE);
        $params = Yii::$app->params;
        $smtp = $params['smtp'];

        try {
            $mail->setFrom($params['senderEmail'], $params['senderName']);

            foreach ($params['adminEmails'] as $email) {
                $mail->addAddress($email);
            }

            $mail->Subject = $subject;
            $mail->CharSet = 'UTF-8';
            $mail->Body = $message;

            $mail->isSMTP();
            $mail->Host = $smtp['host'];
            $mail->SMTPAuth = TRUE;
            $mail->SMTPSecure = $smtp['encryption'] ?? PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Username = $smtp['username'];
            $mail->Password = $smtp['password'];
            $mail->Port = $smtp['port'];
            $mail->send();

            return true;
        } catch (\Exception $e) {
            Yii::error([
                'message' => $e->getMessage(),
                'host' => $smtp['host'],
                'port' => $smtp['port'],
                'username' => $smtp['username'],
                'recipients' => $params['adminEmails'],
            ], 'mail');
            return false;
        }
    }
}
