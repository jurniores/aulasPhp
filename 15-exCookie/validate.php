<?php
$name = filter_input(INPUT_POST,'name');

if($name){
    
    $datatime = time() +(86400*30);
    setcookie('name',$name,$datetime);
    header('Location: user.php');
    exit;
 }