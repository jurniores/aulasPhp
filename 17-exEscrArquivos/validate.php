<?php
session_start();

$texto = file_get_contents('texto.txt');
$nomes = filter_input(INPUT_POST,'name');
$texto.='<li>'.$nomes.'</li>';

if($nomes){
    file_put_contents('texto.txt',$texto);
    header('Location: index.php');
    exit;

}else{
    $_SESSION['err']='Insira um nome';
    header('Location: index.php');
    exit;
}
