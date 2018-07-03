<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'sala', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'equipamento', FILTER_SANITIZE_EMAIL);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "INSERT INTO dispositivo (sala, equipamento, created) VALUES ('$nome', '$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Equipamento cadastrado com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Equipamento não foi cadastrado com sucesso</p>";
	header("Location: cad_usuario.php");
}
