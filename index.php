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
            <!--
<div class="container">
  <header class="p-3 text-bg-dark">
  
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2 text-dark">Features</a></li>
          <li><a href="#" class="nav-link px-2 text-dark">Pricing</a></li>
          <li><a href="#" class="nav-link px-2 text-dark">FAQs</a></li>
          <li><a href="#" class="nav-link px-2 text-dark">About</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Login</button>
          <button type="button" class="btn btn-warning">Sign-up</button>
        </div>
      </div>
        </div>
  </header>
        -->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="nav-link px-2 text-white" href="#">SISTEMA DE CADASTRO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar" aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="textoNavbar">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a href="#" class="nav-link px-2 text-white">Pricing</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link px-2 text-white">Pricing</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link px-2 text-white">Pricing</a>
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

            



    