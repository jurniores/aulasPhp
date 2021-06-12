<?php
require('../config.php');
// O php recebe o método com a constante nativa do PHP
$method = strtolower($_SERVER['REQUEST_METHOD']);

// Verifica se realmente é uma requisição GET
if ($method === 'get') {
    //Buscando os dados no banco de dados
    $sql = $pdo->query('SELECT * FROM notes');

    if ($sql->rowCount() > 0) {
        $data = $sql->fetchAll(PDO::FETCH_ASSOC);
        //Inserindo os dados dentro de um array
        foreach ($data as $item) {
            $array['result'][] = [
                'id' => $item['id'],
                'title' => $item['title'],
                'body'=> $item['body']
            ];
        }
    }
} else {
    $array['error'] = 'Método não permitido (Apenas GET)';
}

require('../return.php');
