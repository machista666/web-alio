<?php
require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.ionos.mx';
        $mail->SMTPAuth = true;
        $mail->Username = 'alio@alio.mx';
        $mail->Password = 'Alio2953$'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587; 

        $mail->setFrom('alio@alio.mx', 'Alio');
        $mail->addAddress('alio@alio.mx', 'Alio');
        $mail->Subject = $subject;
        $mail->Body    = "<strong>Nombre:</strong> " . $name . "<br>" .
                         "<strong>Correo:</strong> " . $email . "<br>" .
                         "<strong>Motivo:</strong> " . $subject . "<br>" .
                         "<strong>Mensaje:</strong> <br>" . nl2br($message);

        $mail->isHTML(true);

        $mail->send();
        echo 'El mensaje ha sido enviado correctamente.';
    } catch (Exception $e) {
        echo "Error al enviar el correo: {$mail->ErrorInfo}";
    }
}
?>
