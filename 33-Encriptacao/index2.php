<?php

$hash = '$2y$10$yeKqqbkUza4dC7IWzyiIjun.ljQ0m8TNJbLF0YHUeZdgFG/bn23TW';
$senha = '12345';


if(password_verify($senha, $hash)){
    echo 'Senha correta!';
}else{
    echo 'Senha errada';
}


