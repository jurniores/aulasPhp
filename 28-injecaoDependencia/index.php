<?php
interface MatBasica{
    public function somar($x,$y);
}

//tipando as classes para segurança.
class Basico1 implements MatBasica{
    public function somar($x, $y){
        return $x +$y;
    }
}
class Basico2 implements MatBasica{
    public function somar($x, $y){
        $res =$x;
        for($q=0;$q<$y;$q++){
            $res++;
        }
        return $res;
    }
}


class Matematica{
    private $basico;
    //aqui só séra injetada classes que tem uma implementação de MatBasica, igual o java
    public function __construct(MatBasica $basico){
        $this->basico =$basico;
    }

    public function somar($x,$y){
        return $this->basico->somar($x,$y);
    }
}



$mat = new Matematica(new Basico1());

echo $mat->somar(10,15);
//manipulação de banco de dados com injeção de dependência;

interface DatabaseInterface{
    public function listar();
}
class Database{
    private $engine;


    public function __construct(DatabaseInterface $eng)
    {
        $this->engine = $eng;
        
    }

    public function ListarTudo(){
        return $this->engine->listar();
    }
}


class MysqlEngine implements DatabaseInterface {
    public function listar(){

    }
}

$db = new Database(new MysqlEngine());

$db->ListarTudo();