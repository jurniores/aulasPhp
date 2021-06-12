<?php
$senha = "12345";


$hash = password_hash($senha, PASSWORD_DEFAULT);


echo "SENHA ORIGINAL: $senha <br>";
echo "HASH $hash";