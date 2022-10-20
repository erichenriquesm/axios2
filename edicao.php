<?php
include 'banco.php';
$id = $_POST['id'];
$email = $_POST['email'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$table = 'SELECT * FROM clientes';
$table_request = mysqli_query($database, $table);
while($obter = mysqli_fetch_array($table_request)){
    if(strlen($email) == 0 || strlen($nome) == 0 || strlen($telefone) == 0){
        echo "<script>
        alert('Algum dado está vazio!')
        window.location.href='edicao.php'
        </script>";
    }else{
        $dados = "UPDATE clientes SET email = '$email', nome = '$nome', telefone = '$telefone' WHERE id = '$id'";
        $atualizar = mysqli_query($database, $dados);
        echo "<script>
        alert('Edição feita!')
        window.location.href='lista.php'
        </script>";
    }
}

?>