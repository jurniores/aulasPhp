<?php
session_start();
require('header.php');

if($_SESSION['aviso']){
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] ='';
}

?>
<a href="apagar.php">Apagar</a>
<form method="POST" action="recebedor.php">
<label for="">Nome:
<input type="text" name="nome">
</label><br/><br/>
<label for="">Email:
<input type="text" name="email">
</label><br/><br/>
<label for="">Senha:
<input type="password" name="senha">
</label><br/><br/>
<input type="submit" value="Enviar">
</form>