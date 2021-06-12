<?php
//valor absoluto de um número(deixa posítivo) abs()

$num = - 8.4;

echo abs($num).' absolute </br>';

// pi() Normal

echo pi().' pi </br>';

// arredondando para baixo com o floor

echo floor($num).' floor </br>';

// arredondando para cima com ceil

echo ceil($num).' ceil </br>';

// arredondando normalmente com round, apartir de 6 arredonda para cima 4 para baixo

echo round($num).' round </br>';

echo round(pi(),2).' round </br>';

//gerando número aleatório 
echo rand(3,1000).' rand </br>';

$array = [1,2,3,11,15];
// achando o maior número de um array com php
echo max($array).' max array</br>';;
