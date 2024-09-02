<?php
require 'config.php';

$dados = [];
$sql =  "SELECT * FROM teste.usuario";
$sql = $pdo->query($sql);
if ($sql ->rowCount() > 0){
    $dados = $sql ->fetchALL (PDO::FETCH_ASSOC);

}else {

echo "Nenhum usuario cadastrado";

}


?>
<div>
<html>
<head>
<meta charset="UTF-8">
</head>

<link rel="stylesheet" href="formulario.css">

<table border='1' width='100%'>
<tr>
<th>ID</th>
<th>NOME</th>
<th>EMAIL</th>
<th>AÇÕES</th>
</tr>

<?php foreach ($dados as $usuario): ?>
    <tr>
        <td> <?= $usuario ['id']; ?> </td>
        <td> <?= $usuario ['nome']; ?> </td>
        <td> <?= $usuario ['email']; ?> </td>
        <td> </a>
             <a href="Editar.php?id=<?=$usuario['id']; ?> ">[Editar] </a> 

             <a href="Excluir.php?id=<?=$usuario['id']; ?> " onclick="return confirm('Tem certeza que deseja EXCLUIR o usuário?')">[Excluir] </a> </td>

    </tr>    
       
    <?php endforeach; ?>

    



</table>
</div>
<div class="center-button">
    <a href="adicionar.php">[Adicionar Usuários]</a>
</div>
</html>