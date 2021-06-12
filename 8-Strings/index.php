<?php

$nome = '      Antonio     ';

echo $nome;
//igual o trim do javascript
$nomeLimpo = strlen(trim($nome));
//strlen é igual o length do javascript
echo strlen($nome);
echo $nomeLimpo;

//deixando tudo minusculo

echo strtolower($nome);

//deixando tudo maiúsculo

echo strtoupper($nome);


//alterando o nome com replace parecido com js

echo str_replace('A','B', $nome);

//substring igual do js 

echo substr($nome, 1,10);

//igual indexof do javascript é o strpos

echo strpos($nome, 'ton');

//primeiro letra maiúscula
$nome2 = 'antonio jose da silva junior';
echo ucwords($nome2);
//transformando em um array com explode

$nomesArray = explode(' ',$nome2);
print_r($nomesArray);
//split
$nomesArray2 = str_split($nome2,3);
print_r($nomesArray2);
//formantando numero para string

echo number_format(123123,1,',','.');

