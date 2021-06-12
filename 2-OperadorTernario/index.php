<?php
$nome = 'Antonio';

$sobrenome;
echo $nome == 'Antonio'?'Acertou':'Errou';

//verifica se a variável existe
echo isset($sobrenome)?$sobrenome:' Nao existe variavel sobrenome ';
//faz a mesma coisa do código simples, porém de modo simplificado
echo $sobrenome??' Visitante';

