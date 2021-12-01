<?php
include("conecta.php");

$id = $_GET["id"];

try {
  $stmt = $conn->prepare("DELETE FROM usuarios WHERE id=$id"); 
  $stmt->execute();
  echo "Registro excluído com sucesso!<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>
<a href="listar.php">Ver usuários cadastrados</a>