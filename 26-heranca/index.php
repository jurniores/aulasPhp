<?php
class post {
    private int $id;
    private int $likes = 0;


    public function setId($i){
        $this->id = $i;

    }
    public function getId(){
        return $this->id;

    }
    public function setLikes($likes){
        return $this->likes=$likes;

    }
    public function getLikes(){
        return $this->likes;

    }
}

class Foto extends post {
    private $url;

    public function __construct($id)
    {
        $this->setId($id);
    }
    public function setUrl($url){
        $this->url = $url;
    }
    public function getUrl(){
        return $this->url;
    }
}


$foto = new Foto(23);
$foto->setUrl('ab');
$foto->setLikes(12);

echo 'FOTO: # '.$foto->getId().' '.$foto->getLikes().'URL:'.$foto->getUrl();