<?php
require_once 'models/Usuario.php';


class UsuarioDaoMysql implements UsuarioDAO{
    private $pdo;

    public function __construct(PDO $engine)
    {
        $this->pdo = $engine;
    }


    public function create(Usuario $user){
        $sql = $this->pdo->prepare('INSERT INTO usuarios (nome,email) VALUES (:nome,:email)');
        $sql->bindValue(':nome',$user->getNome());
        $sql->bindValue(':email',$user->getEmail());
        $sql->execute();

        $user->setId($this->pdo->lastInsertId());
        return $user;
    }
    public function findAll(){
        $array =[];

        $sql = $this->pdo->query("SELECT * FROM usuarios");
        if($sql->rowCount()>0){
            $data = $sql->fetchAll();

            foreach($data as $item){
                $user = new Usuario();
                $user->setId($item['id']);
                $user->setNome($item['nome']);
                $user->setEmail($item['email']);

                $array[] = $user;

            }
        }
        return $array;
    }
    public function findById($id){
        $sql =  $this->pdo->prepare('SELECT * FROM usuarios WHERE id = :id');
        $sql->bindValue(':id', $id);
        $sql->execute();
 
        if($sql->rowCount()>0){
         $data = $sql->fetch();
         $user = new Usuario();
         $user->setId($data['id']);
         $user->setNome($data['nome']);
         $user->setEmail($data['email']);
 
         return $user;
 
        }else{
            return false;
        }
 
    }
    public function findByEmil($email){
       $sql =  $this->pdo->prepare('SELECT * FROM usuarios WHERE email = :email');
       $sql->bindValue(':email', $email);
       $sql->execute();

       if($sql->rowCount()>0){
        $data = $sql->fetch();
        $user = new Usuario();
        $user->setId($data['id']);
        $user->setNome($data['nome']);
        $user->setEmail($data['email']);

        return $user;

       }else{
           return false;
       }

    }

    public function update(Usuario $usuario){
        $sql = $this->pdo->prepare("UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id");
        $sql->bindValue(":nome", $usuario->getNome());
        $sql->bindValue(":email", $usuario->getEmail());
        $sql->bindValue(":id", $usuario->getId());
        $sql->execute();
        return true;

    }
    public function delete($id){
        $sql = $this->pdo->prepare("DELETE FROM usuarios WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();

        return true;
    
    }
}