<?php

function reData($data){
    $newData = date('w',strtotime($data));

    switch($newData){
        case 0: echo'Domingo';
        break;
        case 1: echo'Segunda-Feira';
        break;
        case 2 : echo'Terça-Feira';
        break;
        case 3 : echo'Quarta-Feira';
        break;
        case 4 : echo'Quinta-Feira';
        break;
        case 5: echo'Sexta-Feira';
        break;
        case 6: echo'Sábado';
        break;
        default: echo'Não existe data específica';
    }
}


reData('2021-01-22');