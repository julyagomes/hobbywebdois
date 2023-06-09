<?php
require 'init.php';
$id = isset ($_GET['id']) ? (int) $_GET['id'] : null;

if (empty($id))
{
    echo "ID para alteração não definido";
    exit;
}

$PDO = db_connect();
$sql = "SELECT descricao, desdequando, avaliacao FROM users WHERE id = :id";
$stmt = $PDO->prepare($sql);
$stmt->bindParam('id', $id, PDO::PARAM_INT);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!is_array($user))
{
    echo "Nenhum Hobby encontrado";
    exit;
}
?>
<!doctype html>
<html>
    <head>
        <meta charset ="utf-8">
        <title>Edição de Hobby</title>
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
        <h1>Sistema de cadastro</h1>
        <h2>Edição de Hobby</h2>
        <form action="edit.php" method ="post">
        <div class="form-group">
            <label for="descricao">Descrição: </label>
            <input type="text" class="form-control col-sm" name="descricao" id="descricao" style="width:25%;"
                    value="<?php echo $user['descricao']?>">
        </div>
        <div class="form-group">
            <label for="desdequando">Desde quando: </label>
            <input type="text" class="form-control col-sm" name="desdequando" id="desdequando" style="width:25%;"
                    value="<?php echo $user['desdequando']?>">
        </div>
        <div class="form-group">
            <label for="avaliacao">Avaliação: </label>
            <input type="text" class="form-control col-sm" name="avaliacao" id="avaliacao" style="width:25%;"
                    value="<?php echo $user['avaliacao']?>">
        </div>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <button type="submit" class="btn-primary">Alterar</button>
        </form>
        </html>
    </div>
    </body>
</html