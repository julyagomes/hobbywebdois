<?php
require_once 'init.php';
$descricao = isset($_POST['descricao']) ? $_POST['name'] : null;
$desdequando = isset($_POST['desdequando']) ? $_POST['desdequando'] : null;
$avaliacao = isset($_POST['avaliacao']) ? $_POST['avaliacao'] : null;
$id = isset($_POST['id']) ? $_POST['id'] : null;

if (empty($descricao) || empty($desdequando) || empty($avaliacao))
{
    echo "Volte e preencha todos os campos";
    exit;
}

$isoDate = dateConvert($birthdate);
$PDO = db_connect();
$sql = "UPDATE users SET descricao = :name, desdequando = :desdequando, avaliacao = :avaliacao, birthdate = :birthadte WHERE id = :id";
$stmt = $PDO -> prepare($sql);
$stmt -> bindParam(':descricao', $descricao);
$stmt -> bindParam(':desdequando', $desdequando);
$stmt -> bindParam(':descricao', $avaliacao);
$stmt -> bindParam(':birthdate', $isoDate);
$stmt -> bindParam(':id', $id, PDO::PARAM_INT);
if ($stmt ->execute())
{
    header('Location: index.php');
}else{
    echo "Erro ao alterar";
    print_r($stmt->errorInfo());
}
?>