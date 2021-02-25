<?php
    require('conexao.php');
// INSERT
    $query = $conexaoPDO->prepare("INSERT INTO tb_pessoa(nome_pessoa, telefone, email) VALUES (n:, t:, e: )"); 
 
    $query->bindValue(":n", "Diana");
    $query->bindValue(":t", "91 9999-9999");
    $query->bindValue(":e", "diana@gmail.com");

    $query->execute();

    $conexaoPDO->query("INSERT INTO tb_pessoa(nome_pessoa, telefone, email) VALUES('João', '61 9999-9999', 'estevao@gmail.com')");

// SELECT por id

    $query = $conexaoPDO->prepare("SELECT * FROM tb_pessoa WHERE id_pessoa = :id");
    $query->bindValue(":id", 2);
	    
    $query->execute();
    $resultado = $query->fetch(PDO::FETCH_ASSOC);//converte em array uma única linha da query

    echo "<pre>";
    print_r($resultado);
    echo "</pre>";

// SELECT todos

    $query = $conexaoPDO->prepare("SELECT * FROM tb_pessoa");
    
    $query->execute();
    $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($resultado as $key => $value)
    {
	// echo $key.": <br>".$value;
    }
    
?>