<?php
$lista = ['nome1','nome2','nome3','nome4'];


//contando o total de indices do array
echo "TOTAL: ".count($lista);

//retirando os itens da primeira lista com o da segunda lista

$lista2 = ['nome1','nome2'];

$lista3 = array_diff($lista,$lista2);

print_r($lista3);

//filtrando numeros no array

$numero = [10,30,40,50,20];

$filtrados = array_filter($numero, fn($item)=>$item>30);

print_r($filtrados);

// usando o map no array

$dobrados = array_map(function($item){
    return $item*2;
},$numero);

print_r($dobrados);

//excluir o ultimo indice do array deve-se usar o array_pop()

array_pop($numero);
print_r($numero);
//procurar o que tem dentro do array

if(in_array(10,$numero)){
    echo 'Existe';
    echo in_array(40,$numero);
}else{
    echo 'não existe';
}


//array_search retorna a posição do item específico

$pos = array_search(90,$numero);
echo $pos;

//ordenamento do array ordem crescente

sort($numero);
print_r($numero);
//ordenamento decrescente 
rsort($numero);
print_r($numero);

//ordenamento mantendo o indice do valor

asort($numero);
print_r($numero);


echo sizeof($numero);

// transformando array em string igual o join

$nomes =  ['antonio','jose','da','silva','junior'];

$nome = implode(' ',$nomes);


