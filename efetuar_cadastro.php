<?php
include 'banco.php';
$data = json_decode(file_get_contents('php://input'), true);
$nome = $data['nome'];
$email = $data['email'];
$telefone = $data['telefone'];
$dados = "INSERT INTO clientes VALUES(null, '$nome', '$email', '$telefone')";
$query = mysqli_query($database,$dados);
?>
