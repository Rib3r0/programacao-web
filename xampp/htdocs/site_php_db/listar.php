<?php
include("conexao.php");
$resultado = $conexao->query("SELECT * FROM usuarios");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Lista de Usuários</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Usuários Cadastrados</h1>
  <table>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>E-mail</th>
      <th>Data de Cadastro</th>
    </tr>
    <?php while($row = $resultado->fetch_assoc()): ?>
    <tr>
      <td><?= $row['id'] ?></td>
      <td><?= $row['nome'] ?></td>
      <td><?= $row['email'] ?></td>
      <td><?= $row['data_cadastro'] ?></td>
    </tr>
    <?php endwhile; ?>
  </table>
  <a href="index.php">Novo Cadastro</a>
</body>
</html>