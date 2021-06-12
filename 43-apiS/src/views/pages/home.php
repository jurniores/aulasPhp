<?php $render('header'); ?>

<a href="<?= $base?>/novo">Adicionar</a>
<table border="1" width="100%">
    <tr>
        <th>ID:</th>
        <th>Nome:</th>
        <th>E-MAIL</th>
        <th>AÇÕES</th>

    </tr>
    <?php foreach ($usuarios as $usuario) : ?>
        <tr>
            <td><?=$usuario['id'];?></td>
            <td><?=$usuario['nome'];?></td>
            <td><?=$usuario['email'];?></td>
            <td>
            <a href="<?=$base?>/usuario/<?=$usuario['id']?>/edit">[ EDITAR ]</a>
            <a href="<?=$base?>/usuario/<?=$usuario['id']?>/excluir" onclick="return confirm('Tem certeza que deseja excluir?')">[ EXCLUIR ]</a>
            </td>
        </tr>
    <?php endforeach ?>
</table>

<?php $render('footer'); ?>