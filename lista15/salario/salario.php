
        <?php 
		$salario = $_GET['salario'];
		$vendas = $_GET['vendas'];
		
		$comissao = $vendas * 0.04;
		$salariofinal = $salario + $comissao;
		
		echo " Sua comisao é: R$ ".$comissao. "<br>";
		
		echo "Seu salario final é: R$ ".$salariofinal. "<br>";
			
		?>
           