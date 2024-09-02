<?php
//conexão com o banco de dados
require 'config.php';


$id = filter_input(INPUT_GET ,'id');
$nome = ucwords(strtolower(filter_input(INPUT_GET, 'name')));
$email= strtolower(filter_input(INPUT_GET, 'email'));

if($id && $nome && $email){
        $sql = $pdo->prepare("UPDATE teste.usuario SET nome = :nome, email = :email WHERE id = :id");
        $sql->bindvalue(':id',$id);
        $sql->bindvalue(':nome',$nome);
        $sql->bindvalue(':email',$email);
        $sql->execute();
        header("location: formulario.php");
  exit;
}

else{
    header("location: formulario.php");
}


?>