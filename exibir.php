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
        <title>Hobbies</title>

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
        <div class="container">
            <h1>Listagem dos Hobbies</h1>
            <h2>Lista de Hobby</h2>
            <p>Total de Hobbies: <?php echo $total ?></p>
            <?php if ($total > 0): ?>
            <table class="table table-striped" width="50%" border="1">
                <thead>
                    <tr>
                        <th>Descrição</th>
                        <th>Desde Quando</th>
                        <th>Avaliação</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                            <?php while ($user = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                               
                            <tr>
                                <td><?php echo $user['descricao'] ?></td>
                                <td><?php echo $user['desdequando'] ?></td>
                                <td><?php echo $user['avaliacao'] ?></td>
                             
                                <td>
                                    <a class="btn btn-outline-primary" href="delete.php?id=<?php echo $user['id'] ?>" onclick="return confirm('Tem certeza que deseja editar?');">Editar</a>
                                    <a class="btn btn-outline-danger" href="delete.php?id=<?php echo $user['id'] ?>" onclick="return confirm('Tem certeza que deseja remover?');">Remover</a>

                                </td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                    <?php else: ?>
                    <p>Nenhum hobby registrado</p>
                    <?php endif; ?>
                    </div>
                </body>
    </html>

                

