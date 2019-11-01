<?php

include_once('../conexao.php');

$email = $_POST['email'];
$senha1 = $_POST['senha1'];
$senha2 = $_POST['senha2'];

$consulta = "SELECT * FROM usuario WHERE email = '{$_POST['email']}';";

// Recupera os dados dos campos
$email   = $_POST['email'];


$result = mysqli_query($conecta, $consulta);

$resultado = mysqli_fetch_array($result);


//Verificar email
if(mysqli_num_rows($result) > 0 ){

    if( $senha1 != $senha2){

        echo '<script>
        alert("As senhas não coincidem!")
        window.location.assign("http://127.0.0.1/Games-/Login/red_senha1.html") </script>';
        
        }else{
    
            $sql = "UPDATE usuario SET senha = '{$_POST['senha1']}' where email = '{$_POST['email']}';";
    
              mysqli_query($conecta, $sql);
    
             $consulta = "SELECT * FROM usuario WHERE senha = '{$_POST['senha1']}';";
    
            $result = mysqli_query($conecta, $consulta);
    
            if(mysqli_num_rows($result) > 0 ){
            
            
        echo '<script>
        alert("A senha foi alterada com sucesso!")
        window.location.assign("http://127.0.0.1/Games-/Login/index.php") </script>';
            
            }else{
    
    
                echo '<script>
                alert("Falha ao alterar a senha!")
                window.location.assign("http://127.0.0.1/Games-/Login/red_senha1.html") </script>';
    
            }
    
    
    
        }

}else{

    echo '<script>
    alert("E-mail incorreto!")
    window.location.assign("http://127.0.0.1/Games-/Login/red_senha1.html") </script>';

}



?>