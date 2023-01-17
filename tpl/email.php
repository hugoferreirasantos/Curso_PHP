<?php

//Chamar os namespaces da biblioteca PHPmailer:
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


//Chamada das classes Necessárias:
require_once("vendor/autoload.php");


// namespace
use Rain\Tpl;

// config
$config = array(
    "tpl_dir"       => "tpl/",
    "cache_dir"     => "cache/",
    //"debug"         => true, // set to false to improve the speed
);

Tpl::configure( $config );


// Add PathReplace plugin (necessary to load the CSS with path replace)
//Tpl::registerPlugin( new Tpl\Plugin\PathReplace() );


// create the Tpl object
$tpl = new Tpl;

// assign a variable
$tpl->assign( "name", "Hcode" );
$tpl->assign("version", PHP_VERSION);

// assign an array
//$tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );

// draw the template
$html =  $tpl->draw( "index" , true); //Passar o nome do arquivo se for HTML não precisa colocar a extenção:





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
$mail->setFrom('hugosantosadm125@gmail.com', 'E-mail Teste');

//Definir para quem a mensagem deve ser enviada:
$mail->addAddress('hugosantosadm125@gmail.com','Suporte Hcode');

//Assunto do email:
$mail->Subject = 'Testando a classe PHPMailer';

//Mensagem HTML:
$mail->msgHTML($html);

//Substitua o corpo do texto simples por um criado manualmente:
$mail->AltBody = 'This is a plain-text message body';

//Enviando a mensagem , checando erros:
if(!$mail->send()){
	echo 'Mailer Error' . $mail->ErrorInfo;
}else{
	echo 'Message send !!!';
}


?>