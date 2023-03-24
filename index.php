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
            <div class="container jumbotron mt-10  ">
                <h1>Sistema de Cadastro de Hobby</h1>  
                <p class="lead">Cadastre seu Hobby:</p>
                <a class="w-10 btn btn-primary btn-lg" href="form-add.php" role="button">Inserir &raquo;</a> 
                <br>
                <p class="lead">Para exibir hobbies cadastrados:</p>
                <a class="w-10 btn btn-primary btn-lg" href="exibir.php" role="button">Listagem &raquo;</a>
                </body>
            </html>

            



    