<?php

require 'init.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro de Hobby</title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <script src ="bootstrap/js/popper.min.js"></script>
        <script src ="bootstrap/js/bootstrap.js"></script>
        <script src ="bootstrap/js/jquery.min.js"></script>
        <script type ="text/javascript">
          $(document).ready(function() {
          $(function(){
          $("#menu").load("navbar.html");
          }) ;
          }) ;
 </script>
    </head>
    <body>
    <div id ="menu"></div >
    <div class="container jumbotron mt-3">
        <h1>Sistema de Cadastro</h1>
        <h2>Cadastro de Hobby</h2>

        <form action="add.php" method="post">
        <div class="col-6">
              <label for="descricao" class="form-label">Descrição</label>
              <input type="text" class="form-control" name="descricao" id="descricao" placeholder="Descrição do hobby" required>
              <div class="invalid-feedback">
              </div>
            </div>
            <div class="col-sm-6">
              <label for="desdequando" class="form-label">Desde quando</label>
              <input type="text" class="form-control" name="desdequando" id="desdequando" placeholder="Ano que começou" value="" required>
              <div class="invalid-feedback">
              </div>
            </div>
            <div class="col-sm-6">
              <label for="avaliacao" class="form-label">Avaliação</label>
              <input type="text" class="form-control" name="avaliacao" id="avaliacao" placeholder="De 0 a 10" value="" required>
              <div class="invalid-feedback">
              </div>
            </div>
            <br>
        <input type="hidden" name="id" value="<?php echo $id ?>"> 
        <button class="w-25 btn btn-primary btn-lg" type="submit">ENVIAR</button>
        </form>
    </div>
    </body>
</html>
