<?php $render('header'); ?>

<h2>Adicionar Novo Usuário</h2>

<form action="<?=$base?>/novo" method="post">
    <label>
    Nome:
    <input type="text" name="name">

    </label>
    <label for="">email: <input type="text" name="email"></label>
    <input type="submit" value="cadastrar">
</form>
<?php $render('footer');?>