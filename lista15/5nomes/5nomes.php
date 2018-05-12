<?php 
		$nome1 = $_GET['nome1'];
		$nome2 = $_GET['nome2'];
		$nome3 = $_GET['nome3'];
		$nome4 = $_GET['nome4'];
		$nome5 = $_GET['nome5'];
		
		$fp = fopen ("arquivo2.txt", "a");

		$nome01 = fwrite($fp, $nome1."\r\n");
		$nome02 = fwrite($fp, $nome2."\r\n");
		$nome03 = fwrite($fp, $nome3."\r\n");
		$nome04 = fwrite($fp, $nome4."\r\n");
		$nome05 = fwrite($fp, $nome5."\r\n");
		fclose($fp);

		echo readfile("arquivo2.txt");

		?>