<?php
session_start();
ob_start();
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
if($btnCadUsuario){
    include_once 'conexao.php';
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    $dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
    
    $result_usuario = "INSERT INTO usuarios (nome, email, usuario, senha) VALUES (
                    '" .$dados['nome']. "',
                    '" .$dados['email']. "',
                    '" .$dados['usuario']. "',
                    '" .$dados['senha']. "'
                    )";
    $resultado_usario = mysqli_query($conn, $result_usuario);
    if(mysqli_insert_id($conn)){
        $_SESSION['msgcad'] = "Usuário cadastrado com sucesso";
        header("Location: logar.php");
    }else{
        $_SESSION['msg'] = "Erro ao cadastrar o usuário";
    }
}
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <title>menu teste</title>
      
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pagina para realizar login">
    <meta name="author" content="Mateus">
    <link rel="icon" href="imagem/favicon.ico">

    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="style/css/style.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
   <link href="css/signin.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>
  <body>
                                
      
      <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-primary">
        <div class="container">
            <a class="navbar-brand h1 mb-0" href="#">SCORE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSite">

                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="../INICIAL/menu.php">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gerenciamento.php">Gerenciamento</a>
                    </li>

                </ul>
                
                <ul class="navbar-nav ml-auto">
                
                    <li class="nav-item dropdown">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="administrativo.php">Sair</a>
                    </li>
                    </li>
                </ul>
            </div>
            
        </div>
      
      </nav>
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
      
    <script>
        
        $(function () {
        
            $('[data-toggle="popover"]').popover()
        
        })
      
    </script>

  </body>
</html>