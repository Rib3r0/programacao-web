<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastro de Usuários</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Cadastro de Usuários</h1>

  <form action="inserir.php" method="POST">
    <label>Nome:</label>
    <input type="text" name="nome" required>

    <label>E-mail:</label>
    <input type="email" name="email" required>

    <button type="submit">Cadastrar</button>
  </form>

  <a href="listar.php">Ver Usuários Cadastrados</a>
</body>
</html>