<?php 
require_once("connection/conecta.php");

if(empty($_POST['pesquisa'])) {
	echo "<script type=\"text/javascript\">alert('Nenhum dado recebido');</script>";
	header("Refresh: 0;url=../index.php"); 
	exit();
}

$pesquisa = mysqli_real_escape_string($conexao, $_POST['pesquisa']);

$query = "select * from medicamentos where medicamento LIKE '%{$pesquisa}%';";
$query1 = "select * from farmacias where (bairro LIKE '%{$pesquisa}%') OR (municipio LIKE '%{$pesquisa}%') OR (razao_social LIKE '%{$pesquisa}%') OR (estado LIKE '%{$pesquisa}%') OR (endereco LIKE '%{$pesquisa}%');";

$result = mysqli_query($conexao, $query);
$result1 = mysqli_query($conexao, $query1);
 
$row = mysqli_num_rows($result);
$row1 = mysqli_num_rows($result1);

if($row >= 1) {
	$con = $conexao->query($query) or die($conexao->error);
} 
if($row1 >= 1){
	$con1 = $conexao->query($query1) or die($conexao->error);
}
?>