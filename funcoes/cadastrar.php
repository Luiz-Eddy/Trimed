<?php
session_start();
require_once("../connection/conecta.php");

if(empty($_POST['nome']) || empty($_POST['sobrenome']) || empty($_POST['email']) || empty($_POST['telefone']) || empty($_POST['senha']) || empty($_POST['r-senha'])) {
	echo "<script type=\"text/javascript\">alert('Verifique se todos os campos foram preenchidos');</script>";
	header("Refresh: 0;url=../cadastro.php"); 
	exit();
}else if($_POST['r-senha'] != $_POST['senha']){
	echo "<script type=\"text/javascript\">alert('As senhas sigitadas não coincidem');</script>";
	header("Refresh: 0;url=../cadastro.php"); 
	exit();
}

$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$sobrenome = mysqli_real_escape_string($conexao, $_POST['sobrenome']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$telefone = mysqli_real_escape_string($conexao, $_POST['telefone']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "insert into usuarios (nome, sobrenome, email, telefone, senha, tipo_usuario) VALUES ('{$nome}', '{$sobrenome}', '{$email}', '{$telefone}', md5('{$senha}'), '2');";

if (mysqli_query($conexao, $query)) {
    echo "<script type=\"text/javascript\">alert('Cadastro realizado com sucesso!');</script>";
	header("Refresh: 0;url=../login.php"); 
} else {
    echo "Erro: " . $query . "<br>" . mysqli_error($conexao);
}

mysqli_close($conexao);

?>