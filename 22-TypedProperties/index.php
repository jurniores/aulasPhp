<?php

class Post {
    public int $likes;
    public array $comments= [];
    public $author;


    public function somar(){
        $this->likes++;
    }   
    
}


$posts = new Post();

$post2 = new Post();


$posts->comments = ['a'];
print_r($posts->comments); 

