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
        <title>Andressa&Julya</title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

        <script src ="bootstrap/js/popper.min.js"></script>
        <script src ="bootstrap/js/bootstrap.js"></script>
        <script src ="bootstrap/js/jquery.min.js"></script>
        <script type ="text/javascript">
          $(document).ready(function() {
          $(function(){
          $("#menu").load("navbar.html");
          });
          });
 </script>
        <style type="text/css">
            .container{
                margin-top: 100px;
                margin-left: 250px;
            }
        </style>
        </head>
        <body>
                <div id ="menu"></div>
            <div class="container  jumbotron mt-50  ">
                <p class="h1 text-center">Sistema de Cadastro de Hobby</p>  
                <picture>
                    <img src="./img/hobby.png" alt="hobby" />
                </picture>
                </body>
            </html>

            



    