<?php
require 'classes/matematica/basico.php';
require './classe1.php';
require './classe2.php';
// transformando uma classe em um único nome
use classes\matematica\Basico as Basico;
$basico2 = new Basico();
//posso usar o mesmo nome de classes em diferentes arquivos
$basico = new classes\matematica\Basico();


$classe1 = new classe2\MinhaClasse();
$classe2 = new classe1\MinhaClasse();
echo $classe1->testar();
echo $classe2->testar();


