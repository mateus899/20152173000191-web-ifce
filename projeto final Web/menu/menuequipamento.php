<?php
session_start();
ob_start();

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Inscreva-se no canal YouTube.com/RicardoSanches -->
    <title>menu teste</title>
      
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
                        <a class="nav-link" href="index.php">Listar equipamentos</a>
                    </li>
                  <li class="nav-item">
                        <a class="nav-link" href="cad_usuario.php">Cadastrar equipamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../sistema/gerenciamento.php">pagina de Gerenciamento</a>
                    </li>

                </ul>
 <ul class="navbar-nav ml-auto">
                
                    <li class="nav-item dropdown">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="../sistema/sair.php">Sair</a>
                    </li>

                    </li>
                
                </ul>
            </div>
            
        </div>
      
      </nav>
      
      
      
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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