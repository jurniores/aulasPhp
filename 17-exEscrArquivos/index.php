<?php
session_start();
if(isset($_SESSION['err'])){
    echo $_SESSION['err'];
    $_SESSION['err']='';
}
$nomes = file_get_contents('texto.txt');
?>
<form action="validate.php" method="post">
<label for="">Novo Nome:
<input type="text" name="name">
<input type="submit" value="Adicionar">
</label>
</form>

<h2>Lista de nomes</h2>
<ul>
<?php
echo $nomes;
?>
</ul>