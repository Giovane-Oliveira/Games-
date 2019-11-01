
<?php

include_once('../conexao.php');
 
$consulta = "SELECT * FROM usuario WHERE email = '{$_POST['email']}';";

// Recupera os dados dos campos
$email   = $_POST['email'];


$result = mysqli_query($conecta, $consulta);

$resultado = mysqli_fetch_array($result);


//Verificar email
if(mysqli_num_rows($result) > 0 ){


   require("PHPMailer-master/src/PHPMailer.php");
   require("PHPMailer-master/src/SMTP.php");
 
     $mail = new PHPMailer\PHPMailer\PHPMailer();
     $mail->IsSMTP(); // enable SMTP
 
     //$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
     $mail->SMTPAuth = true; // authentication enabled
     $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
     $mail->Host = "smtp.gmail.com";
     $mail->Port = 465; // or 587
     $mail->IsHTML(true);
     $mail->Username = "giovaneoliveira4@gmail.com";
     $mail->Password = "melinho913855222006";
     $mail->SetFrom($email);
     $mail->Subject = "Link para redefinição da senha do site Alpha Games";
     $mail->Body = "Olá! Segue o link para a redefinição http://127.0.0.1/Games-/Login/red_senha1.html <br><br> Bons Games!";
     $mail->AddAddress('giovaneoliveira4@gmail.com');
 
      if(!$mail->Send()) {
         echo "Mailer Error: " . $mail->ErrorInfo;
      } else {
         $msg = 'E-mail enviado com sucesso! Verifique sua caixa de entrada ou sua lista de spam.';
     echo "<script>alert('$msg');window.location.assign('http://127.0.0.1/Games-/Login/index.php');</script>";
      }
   


}else{

   echo ' <script> alert("Conta do usuário inexistente!")
   window.location.assign("http://127.0.0.1/Games-/Login/red_senha.html");

   </script>';


}

?>




	
