<?php
//conexão com o banco de dados
require 'config.php';


$id = filter_input(INPUT_GET ,'id');

if($id){
        $sql = $pdo->prepare("DELETE FROM teste.usuario WHERE id = :id");
        $sql->bindvalue(':id',$id);        
        $sql->execute();
        header("location: formulario.php");
  exit;
}

else{
    header("location: formulario.php");
}


?>