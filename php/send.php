<?php 
require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$text = $_POST['text'];

$mail->isSMTP();                                      
$mail->Host = 'smtp.mail.ru';  																							
$mail->SMTPAuth = true;                              
$mail->Username = 'dedikov-v@list.ru'; 
$mail->Password = 'School852'; 
$mail->SMTPSecure = 'ssl';                          
$mail->Port = 465;

$mail->setFrom('dedikov-v@list.ru'); 
$mail->addAddress('dedikov.vladislav@yandex.ru'); 
$mail->isHTML(true);   

$mail->Subject = 'Заявка с сайта строительной компании — Строй дом';
$mail->Body    = 'Имя: '.$name . '<br> Телефон: ' .$tel. '<br>Сообщение пользователя: ' .$text. '<br> Email: '.$email;
$mail->AltBody = '';

if(!$mail->send()) {
    header('location: danger.html');
} else {
    header('location: thank-you.html');
}
?>
