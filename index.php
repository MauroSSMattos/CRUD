<?php

require_once 'config.php';

//->query é uma solicitação de pesquisa.

$select = "SELECT * FROM teste.usuario u";
$sql = $pdo->query($select);

echo "Total de cadastros: ".$sql->rowCount();


$dados = [];

echo '<pre>';

$dados = $sql->fetchALL(PDO::FETCH_ASSOC);


?>

