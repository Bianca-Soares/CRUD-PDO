<?php
    require('config.php');
//PHP com conexão PDO orientado a objetos para conectar em um banco de dados
    try{
        $conexaoPDO = new PDO("mysql:dbname=".DB_DATABASE.";host=".DB_HOST, DB_USERNAME, DB_PASSWORD);
    }catch(PDOException $e){
        echo "Erro com Banco de dados".$e->getMessage();
    }catch(Exception $e){
        
        echo "Erro Genérico".$e->getMessage();
    }
?>