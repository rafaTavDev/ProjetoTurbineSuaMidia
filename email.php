<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';


if(isset($_POST["enviar"])){
  $mail = new PHPMailer(true);

  try {
      //Server settings
      $mail->isSMTP();
      $mail->Host       = 'mail.turbinesuamidia.com.br';
      $mail->SMTPAuth   = true;
      $mail->Username   = 'contato@turbinesuamidia.com.br';
      $mail->Password   = 'qNp39la05L';
      $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
      $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

      //Recipients
      $mail->setFrom('contato@turbinesuamidia.com.br', 'Turbine Sua Midia');
      $mail->addAddress('turbinesuamidia.site@gmail.com');     //Add a recipient
      $mail->addReplyTo($_POST["email"], 'Information');


      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'Mensagem Cliente via Site';
      $mail->Body    = "Nome: " .$_POST["nome"]. "<br/>Telefone: " .$_POST["telefone"]. "<br/>Email: " .$_POST["email"]. "<br/>Segmento: " .$_POST["segmento"]. "<br/>Perfil Comercial: " .$_POST["perfil"]. "<br/>Quantidade de funcionários: " .$_POST["quantFunc"];
      $mail->AltBody = 'Nome: 
      Telefone: 
      Email: 
      Mensagem: ';

      $mail->send();
  } catch (Exception $e) {
      echo "Ocorreu o seguinte erro: {$mail->ErrorInfo}";
  }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/styleObrigado.css">
  <link rel="icon" href="./assets/imagens/logo.png">
  <title>Página de Obrigado</title>
</head>
<body>
  <div class="containerObrigado">
    <div class="textoObrigado">
        Sua mensagem foi enviada com sucesso! Reponderemos em breve!
    </div>
    <a href="./index.html">
        <div class="botao">Voltar para o site</div>
    </a>
  </div>
</body>
</html>




