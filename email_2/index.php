<?php
//Chamar os namespaces da biblioteca PHPmailer:
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require_once("vendor/autoload.php");

//Criar uma nova instância do PHPMailer:
$mail = new PHPMailer();

//Criar um smtp:
$mail->isSMTP();

//Criar um debug:
$mail->SMTPDebug = 2;

//Atruibuir o nome do servidor:
$mail->Host = 'smtp.gmail.com';

//Atruibuir a porta SMTP:
$mail->Port = 587;

//Atribuir a segurança da porta SMTP:
$mail->SMTPSecure = 'tls';

//Autenticação do SMTP:
$mail->SMTPAuth = true;

//Username para a autenticação do SMTP:
$mail->Username = '';

//Senha para autenticação do SMTP:
$mail->Password = '';

//Destinatário:
$mail->setFrom('', 'E-mail Teste');

//Definir para quem a mensagem deve ser enviada:
$mail->addAddress('','Suporte Hcode');

//Assunto do email:
$mail->Subject = 'Testando a classe PHPMailer';

//Mensagem HTML:
$mail->msgHTML(file_get_contents('contents.html'), __DIR__);

//Substitua o corpo do texto simples por um criado manualmente:
$mail->AltBody = 'This is a plain-text message body';

//Enviando a mensagem , checando erros:
if(!$mail->send()){
	echo 'Mailer Error' . $mail->ErrorInfo;
}else{
	echo 'Message send !!!';
}



?>