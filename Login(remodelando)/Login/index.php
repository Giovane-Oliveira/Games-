<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: site.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$nome = $senha = $nivel = "";
$nome_err = $senha_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if nome is empty
    if(empty(trim($_POST["nome"]))){
        $nome_err = "Porfavor entre seu usuario.";
    } else{
        $nome = trim($_POST["nome"]);
    }
    
    // Check if senha is empty
    if(empty(trim($_POST["senha"]))){
        $senha_err = "Porfavor entre sua senha.";
    } else{
        $senha = trim($_POST["senha"]);
    }
    
    // Validate credentials
    if(empty($nome_err) && empty($senha_err)){
        // Prepare a select statement
        $sql = "SELECT id, nome, senha, nivel FROM usuario WHERE nome = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_nome);
            
            // Set parameters
            $param_nome = $nome;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if nome exists, if yes then verify senha
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $nome, $hashed_senha, $nivel);
                    if(mysqli_stmt_fetch($stmt)){
                        if(senha_verify($senha, $hashed_senha)){
                            // senha is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["nome"] = $nome;
							$_SESSION["nivel"] = $nivel;
                            $_SESSION['signed_in'] = true;
                            
                            // Redirect user to welcome page
                            header("location: home.php");
                        } else{
                            // Display an error message if senha is not valid
                            $senha_err = "A senha nao e valida.";
                        }
                    }
                } else{
                    // Display an error message if nome doesn't exist
                    $nome_err = "Usuario nao encontrado.";
                }
            } else{
                echo "Oops! Algo deu errado. Porfavor tentar novamente mais tarde.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="Login.css">
<script src="Validar.js" charset="utf-8"></script>
<link href="/login.css" rel="stylesheet">
  </head>
	<body class="img-fluid" background="img.png">


    <!-- Page Layout here -->
	
       <div class=" card w-75 container mt-5">
        <img src="rs.png" class="rounded mx-auto d-block" alt="logo n�o encontrado" width=80 height=60>
	    <div class="card-body">
		  <form class="col s12" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			<div class="card-body">
			  <div class="input-field col s6 form-group <?php echo (!empty($nome_err)) ? 'has-error' : ''; ?>">
				<label for="input_text">Nome/Email</label>
				<input type="text" name="nome" class="form-control" value="<?php echo $nome; ?>" data-length="10">
				<span class="help-block"><?php echo $nome_err; ?></span>
			  </div>
			</div>
			<div class="card-body">
			  <div class="input-field col s6 form-group <?php echo (!empty($senha_err)) ? 'has-error' : ''; ?>">
				
				<label>Senha</label>
				<input type="senha" name="senha" class="form-control">
				 <span class="help-block"><?php echo $senha_err; ?></span>
				 <div class="text-center mt-4">
					<input type="submit" class="btn btn-secondary" value="Entrar">
				 </div>
			  </div>
			</div>
		  </form>
		</div>
			<div class="container text-center mb-3">
			<a class="btn btn-secondary " href="cadastro.php" >Cadastrar</a>
			<a class="btn btn-secondary" href="senha.php">Esqueci minha senha</a>
			
			</div>
      </div>
	  
	  

	</body>
</html>