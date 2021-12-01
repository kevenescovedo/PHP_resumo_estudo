<?php
include("conecta.php");

$nome = $_POST["nome"];
$senha = $_POST["senha"];

try {
  $sql = "INSERT INTO usuarios (id, nome, senha) VALUES (NULL, '$nome', '$senha')";

  $stmt = $conn->prepare($sql); 
  $stmt->execute();

  echo "Novo Registro Inserido com sucesso!<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
<a href="listar.php">Ver usuários cadastrados</a>
