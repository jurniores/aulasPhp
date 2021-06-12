<?php
$db_name = 'test';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';



// função nativa do PHP para conectar ao banco de dados é o PDO
$pdo = new PDO("mysql:dbname=$db_name;hots=$db_host",$db_user, $db_pass);

// inserindo uma querydentro do banco
//$sql = $pdo->query('SELECT * FROM usuarios');

// echo 'TOTAL: '.$sql->rowCount();
// echo '<pre>';
// //fecthAll fala para o retorno que quer pegar todos os campos, PDO::FETCH_ASSOC é uma constante da classe PDO que 
// //retira a duplicidade de array com nome e com número
// print_r($sql->fetchAll(PDO::FETCH_ASSOC)) ;

