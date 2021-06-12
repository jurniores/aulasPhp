<?php




class Post{
    public int $id;
    private int $likes;
    public array $comments= [];
    private $author;

    public function __construct($likes){
     $this->likes = $likes;

    }
    public function somar(){
        echo 'teste' ;  

        $this->likes++;
    }
    public function setAuthor($autor){

        if(strlen($autor)>=3){
            return $this->author=$autor;
        }

        
    }
    public function getAuthor(){
        return $this->author;
    }
    
}

$posts->setAuthor('Antonio'); 
echo $posts->getAuthor(); 

