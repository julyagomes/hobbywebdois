<?php
require_once 'init.php';
$PDO = db_connect();
$sql_count = "SELECT COUNT(*) AS total FROM users ORDER BY descricao ASC";
$sql = "SELECT id, descricao, desdequando, avaliacao FROM users ORDER BY descricao ASC";
$stmt_count = $PDO->prepare($sql_count);
$stmt_count ->execute();
$total = $stmt_count ->fetchColumn();
$stmt = $PDO ->prepare($sql);
$stmt ->execute();
?>
<!doctype html>
<html>
    <head>
   
        <meta charset="utf-8">
        <title>Sistema de Cadastro de Hobbys</title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <script src="bootstrap/js/b0otstrap.js"></script>
        <style type="text/css">
            .container{
                margin-top: 100px;
                margin-left: 250px;
            }
        </style>
        </head>
        <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <picture>
        <img src="./img/logo.png " alt="logo" />
      </picture>
  <a class="nav-link px-2 text-white" href="#">SISTEMA DE CADASTRO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar" aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="textoNavbar">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a href="#" class="nav-link px-2 text-white">Início</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link px-2 text-white">Pricing</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link px-2 text-white">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link px-2 text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
        </ul>
    <span class="nav-link px-2 text-white">
      Texto navbar com um elemento inline
    </span>
</nav>
            <div class="container jumbotron mt-10  ">
                <h1>Sistema de Cadastro de Hobby</h1>  
                <p class="lead">Cadastre seu Hobby:</p>
                <a class="w-10 btn btn-primary btn-lg" href="form-add.php" role="button">Inserir &raquo;</a> 
                <br>
                <p class="lead">Para exibir hobbies cadastrados:</p>
                <a class="w-10 btn btn-primary btn-lg" href="exibir.php" role="button">Listagem &raquo;</a>
                </body>
            </html>

            



    