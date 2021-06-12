<?php
//salvando uma sessão na página
session_start();
//pegando os dados enviado do post
$nome = filter_input(INPUT_POST, 'nome');
$senha = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);


if($nome && $email){
    echo 'nome:'.$nome.'<br/>';
    echo 'email:'.$email.'<br/>';
    echo 'Senha: '.($senha?$senha:'Nao existe');
}else{    
    //echo 'Dados nao enviados';
    //dessa maneira que redireciona para outra pagina no Php
    $_SESSION = ['aviso'=>'Preencha os itens corretamente!'];
    header('Location: index.php');
    exit;

}

