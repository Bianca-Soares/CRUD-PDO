  
<?php
    header('Content-Type: application/json');

    require('conexao.php');
 
    $query = $conexaoPDO->prepare('SELECT * FROM tb_usuario');
    $query->execute();


    if ($query->rowCount() >= 1) {

        echo json_encode($query->fetchAll(PDO::FETCH_ASSOC));

        echo json_encode('Sem dados');
    } else {
        echo json_encode('Nenhum comentário encontrado');
    }


    