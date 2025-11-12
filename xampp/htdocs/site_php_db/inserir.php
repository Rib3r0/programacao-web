<?php
include("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";
if ($conexao->query($sql) === TRUE) {
  echo "<p>Usuário cadastrado com sucesso!</p>";
} else {
  echo "Erro: " . $sql . "<br>" . $conexao->error;
}

echo '<a href="index.php">Voltar</a>';
?>