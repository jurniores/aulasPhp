<?php
echo '<pre>';
print_r($_FILES['arquivo']);

//movendo o arquivo 

$arrayPermitidos = array('image/jpeg','image/jpg','image/png');
$tipoArq = $_FILES['arquivo']['type'];
//in_array é uma função como o indexof, verifica se há o valor dentro do array
//coloca primeiro o que quer achar e no segundo o array para de pesquisa
if(in_array($tipoArq, $arrayPermitidos)){
    $nomes = $_FILES['arquivo']['name'];
    $types = explode('.',$nomes);

    
    $nome = md5(time()).rand(0,1000).'.'.$types[sizeof($types)-1];
    
    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/'.$nome);   
    echo 'Arquivo salvo com sucesso!';
}else{
    echo 'Arquivo não permitido';
}





