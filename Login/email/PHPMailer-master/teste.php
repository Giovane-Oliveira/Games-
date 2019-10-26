<?php

  require("PHPMailer.php");
  require("SMTP.php");


  include 'config.php';

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$cnpj = $_POST['cnpj'];
	$cidade = $_POST['cidade'];
	$telefone = $_POST['telefone'];
	$mensagem = $_POST['mensagem'];
	$data_envio = date('d/m/Y');
	$hora_envio = date('H:i:s');

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP

    //$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "easyybeer@gmail.com";
    $mail->Password = "facilcerveja123";
    $mail->SetFrom("easyybeer@gmail.com");
    $mail->Subject = "Contato através do site Easy Beer";
    $mail->Body = "Ola,<br><br>! recebemos a seu contato de interece de uma empresa <br> segue abaixo os dados da emoresa!".
    $nome. 
	$email.
	$cnpj. 
	$cidade.
	$telefone. 
	$mensagem. 
	$data_envio. 
	$hora_envio;
    $mail->AddAddress('easyybeer@gmail.com');

     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
     }
?>