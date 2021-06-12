<?php
//Lendo arquivo

$texto = file_get_contents('texto.txt');
$texto.="\nAntonio Normal";
//escrevendo em arquivos com php;

file_put_contents('texto.txt',$texto);

echo $texto;