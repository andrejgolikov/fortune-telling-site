<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;

// Load Composer's autoloader
require '../../vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer();

//Recipients
//$mail->setFrom('andrejgolickov@yandex.ru', 'Mailer');
//Set who the message is to be sent to
$mail->addAddress('andrejgolickov@yandex.ru', 'John Doe');
//Set the subject line
$mail->Subject = 'mira-gadaniya.ru: Отправлена форма "Нужна помощь"';
//Replace the plain text body with one created manually
$mail->AltBody = 'Поля:\nТелефон: ' . $_POST['phone'] . '\nEmail: ' . $_POST['email'] . '\nСообщение: ' . $_POST['message'];

//send the message, check for errors
if (!$mail->send()) {
    $responseData = [
        'error' => $mail->ErrorInfo,
    ];
} else {
    $responseData = [];
}

echo json_encode($responseData);
