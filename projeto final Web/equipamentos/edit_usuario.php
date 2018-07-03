<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM dispositivo WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Editar</title>		
	</head>
	<body>
		<a href="cad_usuario.php">Cadastrar</a><br>
		<a href="index.php">Listar</a><br>
		<h1>Editar Usuário</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_edit_usuario.php">
			<input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">
			
			<label>Sala: </label>
			<input type="text" name="sala" placeholder="Digite o nome completo" value="<?php echo $row_usuario['sala']; ?>"><br><br>
			
			<label>Equipamento: </label>
			<input type="text" name="equipamento" placeholder="Digite o seu melhor e-mail" value="<?php echo $row_usuario['equipamento']; ?>"><br><br>
			
			<input type="submit" value="Editar">
		</form>
	</body>
</html>