<?php
require 'config.php';
$id = filter_input(INPUT_GET,'id');
$sql = "SELECT * FROM teste.usuario WHERE id = $id";
$sql = $pdo->query($sql);
$info = $sql->fetch();
//echo $info['id'];
//echo $info['nome'];
//echo $info['email'];
//exit;

?>


<html>
<head>
<meta charset="UTF-8">
</head>
<link rel="stylesheet" href="styleeditar.css">

<header class="header-editar">
    <a href="formulario.php" class="back-button">&#10094;</a>
</header>
<div>
<div class="form-container">
<strong><u><p>EDITAR CADASTRO</u></p></strong>

<form class="border1" method="GET" action="editar_action.php">

<input type="hidden" name="id" value="<?= $info['id']; ?>"/>    
<label>
<h2>Nome:</h2>
<input type="text" name="name" placeholder="Editar seu nome completo"value="<?= $info['nome']; ?>"/>
</label><br/><br/>
<label>
<h2>E-mail:</h2>
<input type="email" name="email" placeholder="Editar seu email" value="<?= $info['email']; ?>"/>
</label><br/><br/>
<strong><input type="submit" value="Editar" onclick="return confirm('Tem certeza que deseja EDITAR os dados?')"/></strong>
</form>
</div>
</div>
</html>