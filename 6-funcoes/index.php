<?php

function subsequente(){
    for($i=0;$i<10;$i++){
        echo $i."<br/>";
    }
    echo '<hr/>';
}

function somar(float $n1, int $n2, int $n3=0){
    $total = $n1 + $n2 + $n3; 
    return $total;
}

$y = somar(3,3);
$x = somar(1,3);
echo $x;
echo $y;



// passando parâmetro por referência
$total;
function somar2($n1,$n2,&$total){
    $total = $n1+ $n2;
}

somar2(2,3,$total);

echo $total;

//funções anonimas

$funcao = function(){
echo 'Ola mundo';
};

echo $funcao();

//Arrow Function

$valor =  fn($n)=> $n*0.3;

echo $valor(3);

$valor  = fn()=>'ola mundo';
echo $valor();


// funcao recursiva

function dividir($n){
    $metade = $n/2;
    echo $metade."<br/>";

    if(round($metade)>0){
        dividir($metade);
    }
}
dividir(100);