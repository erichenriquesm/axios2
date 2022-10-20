<?php
include 'banco.php';
$dados = 'SELECT * FROM clientes';
$puxar_dados = mysqli_query($database, $dados);

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="estilos/lista/bootstrap.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Lista</title>
</head>

<body>

  <nav class="navbar navbar-dark bg-dark p-2">
    <h1 class="text-white p-2">Lista de Cadastro</h1>

    <button type="button" class="btn"><a href="index.php">Home</a></button>
  </nav>

  <div class="container mt-2 overflow-auto">
    <table class="table">
      <thead class="table-dark">
        <tr>
          <th>#</th>
          <th>Email</th>
          <th>Nome</th>
          <th>Telefone</th>
          <th>Editar</th>
          <th>Remover</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($get = mysqli_fetch_array($puxar_dados)) {
          $id = $get['id'];
          $nome = $get['nome'];
          $email = $get['email'];
          $telefone = $get['telefone'];
        ?>
          <!-- Mostrar dados -->
          <tr id="dados">
            <td><?php echo $id ?></td>
            <td><?php echo $email ?></td>
            <td><?php echo $nome ?></td>
            <td><?php echo $telefone ?></td>
            <td class="crud">
              <button onclick="editar()" type="button" class="btn btn-primary">Editar<i class="fa-regular fa-pen-to-square"></i></a></button>
            </td>

            <td>
            <form action="excluir.php" method="post">
                <button type="submit" class="btn btn-danger">Excluir <i class="fa-solid fa-trash"></i></button>
                <input type="hidden" name="id" value="<?php echo $id ?>">
            </form>
            </td>
          </tr>
          <!-- Editar -->

          <tr>
              <form action="edicao.php" method="post">
                <td><?php echo $id ?></td>
                <td><input type="email" name="email" id="email" value="<?php echo $email ?>"></td>
                <td><input type="text " name="nome" value="<?php echo $nome ?>"></td>
                <td><input type="text" name="telefone" value="<?php echo $telefone ?>"</td>
                <td class="crud">
                  <button type="submit" class="btn btn-primary">Editar<i class="fa-regular fa-pen-to-square"></i></button>
                </td>
              </form>

              <td>
                <form action="excluir.php" method="post">
                  <button type="submit" class="btn btn-danger">Excluir <i class="fa-solid fa-trash"></i></button>
                  <input type="hidden" name="id" value="<?php echo $id ?>">
                </form>
              </td>

          </tr>

        <?php } ?>
      </tbody>
    </table>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="editar.js"></script>
</body>

</html>