<?php

class Usuario {
    private $id;
    private $nome;
    private $email;

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = trim($id);
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = ucwords(trim($nome)); 
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = strtolower(trim($email)); 
    }

}

interface UsuarioDAO {
    public function create(Usuario $usuario);
    public function findAll();
    public function findByEmil($email);
    public function findById($id);
    public function update(Usuario $usuario);
    public function delete($id);
}