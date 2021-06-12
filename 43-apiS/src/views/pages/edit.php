<?php $render('header'); ?>

<h2>Adicionar Novo Usuário</h2>

<form action="<?=$base?>/usuario/<?=$usuario['id']?>" method="post">
    <input type="hidden" name="id"  value="">

    <label>
    Nome:
    <input type="text" name="name" value="<?=$usuario['nome']?>">

    </label>
    <label for="">email: <input type="text" name="email"  value="<?=$usuario['email']?>"></label>
    <input type="submit" value="Editar">
</form>
<?php $render('footer');?>