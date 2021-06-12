<?php
require('../config.php');
// O php recebe o método com a constante nativa do PHP
$method = strtolower($_SERVER['REQUEST_METHOD']);

// Verifica se realmente é uma requisição GET
if ($method === 'get') {
    
    $id = filter_input(INPUT_GET, 'id');

    if($id){
        $sql = $pdo->prepare("SELECT * FROm notes WHERE id = :id");
        $sql -> bindValue(":id",$id);
        $sql ->execute();

        if($sql->rowCount()>0){

            $data = $sql->fetch(PDO::FETCH_ASSOC);

            $array['result'] = [
                'id'=>$data['id'],
                'title'=>$data['title'],
                'body'=>$data['body']
            ];
        }else{
            $array['error'] ='ID não exite';
        }
    }else{
        $array['error']='ID não foi enviado';
    }

} else {
    $array['error'] = 'Método não permitido (Apenas GET)';
}

require('../return.php');
