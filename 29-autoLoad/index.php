<?php
//spl_autoload_register carrega as classes, o parametro op spl pega da classe qeu existe no arquivo
require 'autoload.php';
//ou usa dessa forma 
use \matematica\Basica as Basica;
$mat = new Basica();


// ou usa dessa forma
$file = new foto\Upload();


echo $mat->somar(15,5);




