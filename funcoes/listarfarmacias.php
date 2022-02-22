<?php
include('connection/conecta.php');

$query = "select * from farmacias;";
$con = $conexao->query($query) or die($conexao->error);
?>