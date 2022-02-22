<?php
include('connection/conecta.php');
	if($_GET['id'] == null || $_GET['id'] == ""){
		echo "<script type=\"text/javascript\">alert('Nenhuma farmácia selecionada');</script>";
		header("Refresh: 0;url=farmacias.php"); 
	}
	$id = $_GET['id'];

	$query = "select * from farmacias where id = '{$id}';";
	$con = $conexao->query($query) or die($conexao->error);
?>