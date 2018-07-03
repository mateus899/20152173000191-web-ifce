<?php
include("menu.php");
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>Curso de Bootstrap 4</title>
      
  </head>
  <body>
      
        <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            if(isset($_SESSION['msgcad'])){
                echo $_SESSION['msgcad'];
                unset($_SESSION['msgcad']);
            }
        ?>

       <div class="container">
      <form class="form-signin" method="POST" action="valida.php">

        <h2 class="form-signin-heading text-center">Area para Administrador Cadastrado</h2>
        
        <label for="inputEmail" class="sr-only">Usuario</label>
        <input type="text" name="usuario" class="form-control" placeholder="Digitar o usuario" required autofocus><br>

        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Digite a senha" required>
       
        <input type="submit" class="btn btn-lg btn-primary btn-block" name="btnLogin" value="Acessar"><br><br>
      </form>

    </div> 
        
    <script src="js/ie10-viewport-bug-workaround.js"></script>
      </body>
      </html>