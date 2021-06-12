<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';


$usuarioDao = new UsuarioDaoMysql($pdo);

$usuario = false;

$id = filter_input(INPUT_GET, 'id');

if ($id) {

    $usuario = $usuarioDao->findById($id);
} 
if($usuario === false){
    header('Location:index.php');
    exit;
}

?>

<h1>Editar usuário</h1>
<form method="POST" action="editar_action.php">
<input type="hidden" name="id" value="<?=$usuario->getId()?>">
    <label for="">Nome: </label>
    <input type="text" name="name" value="<?=$usuario->getNome()?>">
    <label for="">Email: </label>

    <input type="text" name="email" value="<?=$usuario->getEmail()?>">
    <input type="submit" value="Salvar">
</form>