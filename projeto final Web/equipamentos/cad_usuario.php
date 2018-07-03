<?php
include_once("../menu/menuequipamento.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Cadastrar</title>		
	</head>
	<body>

		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
			 <div class="container">
<form class="form-signin" method="POST" action="proc_cad_usuario.php">

        <h2 class="form-signin-heading text-center">Cadastrar equipamentos</h2>
        
        <label for="inputEmail" class="sr-only">sala</label>
        <input type="text" name="sala" class="form-control" placeholder="Digite a Sala" required autofocus><br>

        <label for="inputPassword" class="sr-only">equipamento</label>
        <input type="text" name="equipamento" class="form-control" placeholder="Digite o Equipamento" required>
       <br>
        <input type="submit" class="btn btn-lg btn-primary btn-block" name="btnLogin" value="Cadastrar"><br><br>

      </form>

    </div> 
	</body>
</html>