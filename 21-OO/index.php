<?php

class Post {
    public $likes = 0;
    public $comments= [];
    public $author;


    public function somar(){
        $this->likes++;
    }   
    
}


$posts = new Post();

$posts->somar();
$posts->somar();
$posts->somar();
echo $posts->likes;

