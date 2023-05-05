<?php
require_once 'init.php';

$descricao = isset($_POST['descricao']) ? $_POST['descricao'] : null;
$desdequando = isset($_POST['desdequando']) ? $_POST['desdequando']: null;
$avaliacao = isset($_POST['avaliacao']) ? $_POST['avaliacao']: null;

if (empty($descricao) || empty($desdequando) || empty($avaliacao) )
{
    echo"Volte e preencha todos os campos";
    exit;
}

$PDO = db_connect();
$sql = "INSERT INTO users (descricao, desdequando, avaliacao) VALUES (:descricao, :desdequando, :avaliacao)";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':descricao', $descricao);
$stmt->bindParam(':desdequando', $desdequando);
$stmt->bindParam(':avaliacao', $avaliacao);
if ($stmt->execute())
{
    header('Location: index.php');
}
else
{  
    echo "Erro ao cadastrar";
    print_r($stmt->errorInfo());
}
if ($stmt->execute())
    {
        header('Location: sucesso.html');
    }
    else
    {
        header('Location: erro.html');
    }
?>