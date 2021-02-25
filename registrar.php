  
<?php
    header('Content-Type: application/json');

    require('conexao.php');

    $nome = $_POST['var_usuario'];
    $telefone = $_POST['var_telefone'];
    $endereco = $_POST['var_endereco'];

    $query = $conexaoPDO->prepare('INSERT INTO tb_usuario (nome_usuario, telefone, endereco) VALUES (:n, :t, :e)');
    $query->bindValue(':n', $nome);
    $query->bindValue(':t', $telefone);
    $query->bindValue(':e', $endereco);
    $query->execute();

    if ($query->rowCount() >= 1) {
        echo json_encode('Salvo com Sucesso');
    } else {
        echo json_encode('Falha ao salvar');
    }