<?php

namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class UsuariosController extends Controller
{
    public function index()
    {
        $this->render('add');
    }
    public function create()
    {
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

        if ($name && $email) {
            $data = Usuario::select()->where('email', $email)->execute();

            if (count($data) === 0) {
                //insere
                Usuario::insert([
                    'nome' => $name,
                    'email' => $email
                ])->execute();

                $this->redirect('/');
                exit;
            }
        }

        $this->redirect('/novo');
        exit;
    }

    public function edit($args)
    {
        //$usuario = Usuario::select()->find($args['id']);

        $usuario = Usuario::select()->where('id', $args['id'])->one();
        $this->render('edit', ['usuario'=>$usuario]);
    }
    public function del($args)
    {
        Usuario::delete()->where('id',$args['id'])->execute();
        $this->redirect('/');
    }

    public function editAction($args){
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        if($name && $email){
            Usuario::update()
            ->set('nome', $name)
            ->set('email', $email)
            ->where('id', $args['id'])
            ->execute();
            $this->redirect('/');
        }
        $this->redirect('\\usuario\\'.$args['id'].'/editar');
        echo 'Editado com sucesso!';
    }
}
