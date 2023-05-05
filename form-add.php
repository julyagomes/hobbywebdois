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
            <div class="col-sm-3">
            <label for="avaliacao" class="form-label">Avaliação</label>
                <select type="number" class="form-control" name="avaliacao" id="avaliacao" placeholder="De 0 a 10" value="" required>
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select> 
              <div class="invalid-feedback">
              </div>
            </div>
            <br>
        <input type="hidden" name="id" value="<?php echo $id ?>"> 
        <button class="w-25 btn btn-primary btn-lg" type="submit">ENVIAR</button>
        </div>
        </form>
    </div>
    </body>
</html>
