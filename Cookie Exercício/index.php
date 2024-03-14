<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/style.css">
  <title>Cadastro</title>
</head>
<body>

  <h1>Cadastrar Nomes</h1>

  <form action="validar.php" method="POST">
    <label for="n1">Nome: </label>
    <input type="string" name="nome" id="txtnome"> 

    <input type="submit" value="Cadastrar">

  <?php

    $erro = false;
    $msg = filter_input(INPUT_GET, "msg", FILTER_SANITIZE_SPECIAL_CHARS);

    if ($msg != "") {
      $erro = true;
    }
    
    if ($erro == true) {
      echo "<span>Inválido</span>";
    }

  ?>

  </form> <br><br>
    
</body>
</html>
