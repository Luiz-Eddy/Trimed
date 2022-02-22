<?php
session_start();
require_once("../connection/conecta.php");

if(empty($_POST['user']) || empty($_POST['senha'])) {
	header('Location: ../login.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['user']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
 
$query = "select * from usuarios where email = '{$usuario}' and senha = md5('{$senha}');";
 
$result = mysqli_query($conexao, $query);
 
$row = mysqli_num_rows($result);
 
if($row == 1) {
	$_SESSION['user'] = $usuario;
	header('Location: ../index.php');
	exit();
} else {
	unset($_SESSION['user']);
	echo "<script type=\"text/javascript\">alert('Usuário ou Senha Inválidos');</script>";
	header("Refresh: 0;url=../login.php"); 
	exit();
}
?>