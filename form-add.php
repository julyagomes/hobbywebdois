<?php

require 'init.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro de Hobby</title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <script src="bootstrap/js/b0otstrap.js"></script>
    </head>
    <body>
    <div class="container">
        <h1>Sistema de Cadastro</h1>
        <h2>Cadastro de Hobby</h2>

        <form action="add.php" method="post">
        <div class="form-group">
            <label for="descricao">Descrição:  </label>
            <input type="text" class="form-control col-sim" name="descricao" id="descricao" style="width:25%;" placeholder="Informe o Hobby">
        </div>
        <div class="form-group">
            <label for="desdequando">Desde quando?:  </label>
            <input type="text" class="form-control col-sim" name="desdequando" id="desdequando" style="width:25%;" placeholder="Desde quando:">
        </div>
        <div class="form-group">
            <label for="avaliação">Avaliação:  </label>
            <input type="text" class="form-control col-sim" name="avaliacao" id="avaliacao" style="width:25%;" placeholder="Informe a avaliação">
        </div>
        </form>
    </div>
    </body>
</html>
