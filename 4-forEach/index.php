<?php
$ingredientes = [
    'açucar',
    'farinha',
    'ovo',
    'leite',
    'fermento em pó'
];

foreach($ingredientes as $chave =>$valor){
    echo 'Item '.($chave+1).' '.$valor.'<br/>';
}


