<?php
include("conecta.php");

$id = $_GET["id"];
$nome = $_POST["nome"];
$senha = $_POST["senha"];

try {
  
  $sql = "UPDATE usuarios SET nome='$nome', senha='$senha' WHERE id=$id";

  // Prepare statement
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  echo $stmt->rowCount() . "Registro atualizado com sucesso<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
<a href="listar.php">Ver usuários cadastrados</a>