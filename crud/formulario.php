<?php
if(isset($_GET["id"])){
  $id = $_GET["id"];
  $nome = $_GET["nome"];
  $senha = $_GET["senha"];
  $action = "editar.php";
}
else{
  $id = "";
  $nome = "";
  $senha = "";
  $action = "inserir.php";
}

?>
<!DOCTYPE html> 
<html lang="pt-br"> 
  <head> 
    <title>Importado</title> 
    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/meu_css.css" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
  </head> 
  <body> 
    <div class="container-fluid"> 
      <header class="row">
        <nav class="col-12 col-sm-12">
        </nav>
      </header>
      <main class="row">
        <div class="col-12 col-sm-12">
          <h1>Formulário</h1>
          <form action="<?php echo $action ?>?id=<?php echo $id ?>"  method="post">
            <label>
              Nome:<input type="text" name="nome" value="<?php echo $nome ?>">
            </label><br>
            <label>
              Senha:<input type="text" name="senha" value="<?php echo $senha ?>">
            </label><br>
            <input type="submit">
          </form>
        </div>
      </main>
      <footer class="row">
        <div class="col-12 col-sm-12">
          Rodapé
        </div>
      </footer>
    </div>
    <!-- Conteúdo da Página --> 
    <script src="bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body> 
</html>