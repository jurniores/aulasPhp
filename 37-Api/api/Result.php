<?php   
// O php recebe o método com a constante nativa do PHP
$method = strtolower($_SERVER['REQUEST_METHOD']);

// Verifica se realmente é uma requisição GET
if ($method === 'get') {
    //Buscando os dados no banco de dados
        
            $array['result'][] = [
                'id' => 'id',
                'title' => '$item',
                'body'=> '$item'
            ];

} else {
    $array['error'] = 'Método não permitido (Apenas GET)';
}

require('../return.php');
