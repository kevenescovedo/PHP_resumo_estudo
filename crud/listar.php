<?php
include("conecta.php");

try {
  $stmt = $conn->prepare("SELECT id, nome, senha FROM usuarios"); 
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
  foreach($stmt->fetchAll() as $k=>$v) { 
    echo "Nome: ".$v["nome"]." - Senha: ".$v["senha"]." - <a href='formulario.php?id=".$v["id"]."&nome=".$v["nome"]."&senha=".$v["senha"]."'>Editar</a> <a href='excluir.php?id=".$v["id"]."'>Excluir</a><br>";
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>
<p><a href="formulario.php">Incluir novo usuário</a></p>