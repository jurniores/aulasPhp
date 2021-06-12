<?php

$date = new DateTime('2020-01-01 15:35:00');
// adicionando hora ou dia ou segundos na hora setada
// add adiciona tempo sub retira tempo, é um método da classe DateTime;
$date->add(DateInterval::createFromDateString('7 years 2 days 5 minutes 17 seconds'));


$date->setTimezone(new DateTimeZone('America/Sao_Paulo'));

echo $date->format('d/m/Y H:i:s').'<br/>';

$date1 = new DateTime('2020-01-01');
$date2 = new DateTime('2020-02-15');



echo $date1>$date2?"Date 1 é maior":"date 2 é maior";


$diff = $date1->diff($date2);
//formato de um diff é %a, significa a quantidade de dias de uma data para outra
echo '<br/>'.$diff->format('%a').' dias de diferença de uma para outra';


$today = new DateTime();
$end = new DateTime('2021-12-31');

$diff = $today->diff($end);
//%a conta os dias %m conta os meses %y conta os anos %d dias do mes %h horas que compara %s segundos
echo '<br/>'.$diff->format('%y anos %m meses %d dias %h horas %s segundos %a total de dias ');



