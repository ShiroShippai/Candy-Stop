<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Pagina Principal</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <meta charset="utf-8">
  </head>
  <body>
      <fieldtest>
<?php
      session_start();
      echo "<h2>Seja bem-vindo!!</h2>
    <h3>Nome: ".$_SESSION['nome']."    <br>
    Usuário:  ".$_SESSION['usuario']." <br>
    Email:    ".$_SESSION['email']."  <br>
    </h3>";
?>
      </fieldtest>
      
    <h3><a href="editar.php">Editar Dados</a></h3>
    <h3><a href="logoff.php">Logoff</a></h3>

  </body>
</html>
<?php

