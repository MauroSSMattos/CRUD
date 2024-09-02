
<?php

try{

    $pdo = new PDO ("mysql:dbname=teste; host=localhost","root","");

} catch(PDOException $e){
    echo 'ERRO: FALHA NA CONEXÃO - ' .$e->getMessage();
}






?>