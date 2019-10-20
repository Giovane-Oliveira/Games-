<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="Login.css">
<script src="Validar.js" charset="utf-8"></script>
  </head>
  <?php session_start(); ?>
  <body class="img-fluid" background="../Imagens/background.png">
    <div class="container-fluid">
  <div class="row no-gutter">

  <!--COMEÇA AQUI-->
  
    <div class="border-0 bg-transparent card w-50 container mt-5">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
			
				<div class="p-3 mb-2 bg-light text-dark">
			
			
              <img src="../Imagens/Logo.png" class="rounded mx-auto d-block" alt="Logo não encontrado" width="140" >
              <form action="login.php" method="post">
                <div class="form-label-group">
                  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus >  <!-- required autofocus -->
                  <label for="inputEmail">Email</label>
                </div>
                <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="senha" required >  <!-- required -->
                  <label for="inputPassword">Senha</label>
                </div>

                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="customCheck1" name="lembrar">
                  
                
                  <?php if($_SESSION['logado'] == "" && $_SESSION['count'] == 1){
                    
                    $_SESSION['count'] = 0;
                    
                    ?>

            <div class="alert alert-danger">
            <strong>Erro!</strong> Email ou senha inválida!
                  </div>
    
               <?php   }else{   $_SESSION['count'] = 0;?>
                <div class="alert alert-danger hidden">
            <strong>Erro!</strong> Email ou senha inválida!
                  </div>

           <?php    } ?>
                
                  <label class="custom-control-label" for="customCheck1">Lembrar Senha</label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Entrar</button>
                <div class="text-center">
              </form>              
              <button onclick="window.location.href='../Cadastros/cadastroUsuario.php';" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="button">
					Cadastrar
			  </button>
              <a class="small" href="#">Esqueceu a Senha?</a></div>
				
				</div>
			
			</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  </body>
</html>
