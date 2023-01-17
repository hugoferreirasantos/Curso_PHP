<?php

/*Processo de criação de diretórios virtuais do apache: */

//phpinfo();


/*

//Adicionar no https-vhosts.conf
<VirtualHost *:80>
    ServerAdmin webmaster@dummy-host2.example.com
    DocumentRoot "C:/xampp/htdocs/website"
    ServerName local.cursophp7.com.br
    ErrorLog "logs/dummy-host2.example.com-error.log"
    CustomLog "logs/dummy-host2.example.com-access.log" common
    <Directory "C:/xampp/htdocs/website">
        Order allow,deny
        Allow from all
        Require all granted
    </Directory>
</VirtualHost>

//Adicionar no hosts
127.0.0.1   local.cursophp7.com.br

*/

/*Processo: Aprendendo a utilizar o slim framework(rotas na web): */

require_once("vendor/autoload.php");
require_once("config.php");

//Utilizando o namespace do TPL:
use Rain\Tpl;

//Utilizando o namespace do PHPMailer:
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$app = new \Slim\Slim();

//Rota de caminho Web Pagina Pricipal:
$app->get('/:name,:sobrenome', function($name, $sobrenome){


    $config = array(
        "tpl_dir" => "tpl/",
        "cache_dir" => "cache/"
    );

    Tpl::configure($config);

    //Criando um objeto do tipo TPL:
    $tpl = new Tpl();

    //Acessando atraves de variáveis:
    $tpl->assign("name", $name );
    $tpl->assign("date", date("d/m/Y"));
    $tpl->assign("sobrenome", $sobrenome);



    //Carregamento do index:
    $tpl->draw("index");


    


});


//Rota de envio de Email:
$app->get('/sendEmail/:name,:sobrenome,:destinatario', function($name,$sobrenome,$destinatario){

    /*Aplicando o uso de TPL para melhorar a aparência do Email: */

     $config = array(
        "tpl_dir" => "tpl/",
        "cache_dir" => "cache/"
    );

    Tpl::configure($config);

    //Criando um objeto do tipo TPL:
    $tpl = new Tpl();

    //Acessando atraves de variáveis:
    $tpl->assign("name", $name );
    $tpl->assign("date", date("d/m/Y"));
    $tpl->assign("sobrenome", $sobrenome);



    //Carregamento do index:
    $html = $tpl->draw("index",true);

    /*Configuração de Email: */

    //Criar uma novo objeto PHPMailer:
    $mail = new PHPMailer();

    //Criar um SMTP:
    $mail->isSMTP();

    //Criar um Debug para mostrar na tela:
    $mail->SMTPDebug = 2;

    //Atribuir nome ao tipo de servidor de email:
    $mail->Host = 'smtp.gmail.com';

    //Atribuir a porta SMTP:
    $mail->Port = 587;

    //Atribuir o tipo de segurança da porta SMTP:
    $mail->SMTPSecure = 'tls';

    //Autenticação do SMTP:
    $mail->SMTPAuth = true;

    //Username para a autenticação do SMTP:
    $mail->Username = '';

    //Senha para autenticação do SMTP:
    $mail->Password = '';

    //Destinatário:
    $mail->setFrom($destinatario, 'E-mail Teste');

    //Definir para quem a mensagem deve ser enviada:
    $mail->addAddress('hugosantosadm125@gmail.com','Suporte Hcode');

    //Assunto do Email:
    $mail->Subject = 'Testando a classe PHPMailer com Slim Framework';

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

});


//Rota de Consulta do banco de dados:
$app->get('/consultaBanco', function(){

    $list = Usuario::getList();
    echo json_encode($list);

    
});



//Rota de caminho Web:
$app->get('/hello/:name', function($name){
    echo 'Hello, ' . $name;
});

$app->run();




?>