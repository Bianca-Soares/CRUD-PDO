<?php
    require('config.php');
// INSERT
    $res = $pdo->prepare("SELECT INTO tb_pessoa(nome_pessoa, telefone, email) VALUES (n:, t:, e: )"); 
 
    $res->bindValue(":n", "Diana");
    $res->bindValue(":t", "91 9999-9999");
    $res->bindValue(":e", "diana@gmail.com");

    $res->execute();

//    $pdo->query("SELECT INTO tb_pessoa(nome_pessoa, telefone, email) VALUES('Estevão', '61 9999-9999', 'estevao@gmail.com')");

// SELECT

    

?>