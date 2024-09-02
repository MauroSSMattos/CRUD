<?php
//conexão com o banco de dados
require 'config.php';

$name = ucwords(strtolower(filter_input(INPUT_POST, 'name',FILTER_SANITIZE_SPECIAL_CHARS)));
$email = strtolower(filter_input(INPUT_POST, 'email',FILTER_VALIDATE_EMAIL));
//echo $name.' - '.$email;
//exit;
if($name && $email){
    $sql = "SELECT * FROM teste.usuario WHERE email = '$email'";
    $sql = $pdo->query($sql);
    if($sql->rowCount() > 0){
        header("Location: adicionar.php");
        exit;
    } else {
        $pdo->query("INSERT INTO teste.usuario (nome, email) VALUES ('$name','$email')");
        header("Location: formulario.php");
        exit;
    }

   
} else {
    header("Location: adicionar.php");
    exit;
}