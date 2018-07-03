<?php
include("menu.php");

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>Curso de Bootstrap 4</title>

  </head>
  <body>
       <div class="container">
      <form class="form-signin" method="POST"  action="">
      <br>
        <h2 class="form-signin-heading text-center">Cadastrar Administrador</h2>
        
       <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>

        <label  class="sr-only">Nome</label>
        <input type="text" name="nome" class="form-control" placeholder="Digitar nome" required autofocus><br>

        <label  class="sr-only">email</label>
        <input type="text" name="email" class="form-control" placeholder="Digitar o EMAIL" required autofocus><br>

        <label  class="sr-only">usuario</label>
        <input type="text" name="usuario" class="form-control" placeholder="Digitar o usuario" required autofocus><br>

        <label  class="sr-only">Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Digite a senha" required>
       
        
         <input type="submit" class="btn btn-lg btn-primary btn-block" name="btnCadUsuario" value="Cadastrar"><br><br>
      </form>

    </div> 
  </body>
      </html>