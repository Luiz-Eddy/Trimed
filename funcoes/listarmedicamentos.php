<?php
include('connection/conecta.php');

$query = "select * from medicamentos;";
$con = $conexao->query($query) or die($conexao->error);
?>