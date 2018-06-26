<?php 
		$nome = $_GET['nome'];
		$cidade2 = $_GET['cidade'];
		
		
		setcookie("nome",$nome);
		setcookie("cidade2",$cidade2);

	Header("Location:mensagem.php");

		?>