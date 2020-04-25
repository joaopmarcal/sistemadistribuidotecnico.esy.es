<?php

session_start();

if (!isset($_SESSION['nome'])){
  header('Location: index.php');
}


?>

<!doctype html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/main.css">
  <title>Criação de chamado</title>


</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg">
    <img src="./img/logo_pequena.PNG" alt="" class="rounded-circle img-fluid" id="perfil-foto">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="lista_chamado.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a href="abrirChamado.php" class="nav-link">Novo Chamado</a>
            </li>
            <li class="nav-item">
                <a href="lista_chamado.php" class="nav-link">Visualizar chamados</a>
            </li>
            <li class="nav-item">
                <a href="logout.php" class="nav-link">Sair</a>
            </li>
        </ul>
    </div>
</nav>
