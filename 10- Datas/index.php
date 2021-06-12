<?php
//setando hora 
echo date('d/m/y H:i:s').'<br/>';
echo date('H:i:s').'<br/>';

//padrão internacional


echo date('Y-m-d').'<br/>';

//formatando datas
//strtotime transforma uma string em um milesimos de segundos de data
$time = strtotime('2020-03-07');
echo $time.'<br/>';

echo date('d/m/y',$time);