<?php
if(isset($_COOKIE['name'])){
    $nome = $_COOKIE['name'];
    echo '<h2>Bem vindo '.$nome.'</h2> <a href="apagar.php">Sair</a>';
}
