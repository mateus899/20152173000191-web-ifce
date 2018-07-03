<?php
session_start();
ob_start();
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
if($btnCadUsuario){
    include_once 'conexao.php';
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    //var_dump($dados);
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
    <!-- Inscreva-se no canal YouTube.com/RicardoSanches -->
    <title>Curso de Bootstrap 4</title>
      
    <!-- Required meta tags -->
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pagina para realizar login">
    <meta name="author" content="Mateus">
    <link rel="icon" href="imagem/favicon.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
      
    <link rel="stylesheet" href="style/css/style.css">
      
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">

<!--
        <link href="css/bootstrap.min.css" rel="stylesheet">
-->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
 
   <link href="css/signin.css" rel="stylesheet">

    <script src="js/ie-emulation-modes-warning.js"></script>

  </head>
  <body>
      
      
      <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-primary">
          
        <div class="container">
      
            <a class="navbar-brand h1 mb-0" href="#">Curso</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSite">

                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="#">Início</a>
                    </li>
                    

                </ul>
                
                <ul class="navbar-nav ml-auto">
                
                    <li class="nav-item dropdown">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="administrativo.php">Sair</a>
                    </li>


                   <!--     <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
                            Social
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Facebook</a>
                            <a class="dropdown-item" href="#">Twitter</a>
                            <a class="dropdown-item" href="#">Instagram</a>
                        </div>-->
                    
                    </li>
                
                </ul>
                <!--
                <form class="form-inline">
                    <input class="form-control ml-4 mr-2" type="search" placeholder="Buscar...">
                    <button class="btn btn-dark" type="Submit">Ok</button>
                </form>-->

            </div>
            
        </div>
      
      </nav>
      </body>
      </html>