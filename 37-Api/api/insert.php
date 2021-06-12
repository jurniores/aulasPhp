<?php
require('../config.php');
// O php recebe o método com a constante nativa do PHP
$method = strtolower($_SERVER['REQUEST_METHOD']);

// Verifica se realmente é uma requisição GET
if ($method === 'post') {
    
    $getPost = file_get_contents('php://input');
    $body = json_decode($getPost, 1);

    $array['result'] = ['title'=>$body['title'],'body'=>$body['body']];

    if($body){
        $sql = $pdo->prepare('INSERT INTO notes (title, body) VALUES (:title, :body)');
        $sql->bindValue(':title',$body['title']);
        $sql->bindValue(':body', $body['body']);
        $sql->execute();


        $id = $pdo->lastInsertId();


        $array['result']=[
            'id'=>$id,
            'title'=>$body['title'],
            'body'=>$body['body']
        ];
    }else{
        $array['error'] = 'campos não enviados';
    }
    
} else {
    $array['error'] = 'Método não permitido (Apenas POST)';
}

require('../return.php');
