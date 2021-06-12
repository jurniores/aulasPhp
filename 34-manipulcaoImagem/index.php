<?php
//criando uma imagem, não funciona neste servidor
// $imagem = imagecreatetruecolor(300, 300);


// //gerando cor rgb para pintar a imagem
// $cor = imagecolorallocate($image, 255, 0, 0);

// imagefill($imagem, 0, 0, $cor);


// header("Content-Type: image/jpeg");
// imagejpeg($imagem, 'nova_imagem.jpg', 100);


//Redimencionando imagens

$arquivo = "imagem.png";
$maxWidth = 200;
$maxHeight = 200;


list($originalWidth, $originalHeight)= getimagesize($arquivo);


$ratio = $originalWidth/$originalHeight;
$finalHeight = 0;
$finalWidth = 0;


$ratioDest = $maxWidth / $maxHeight;


if($ratioDest>$ratio){
    $finalWidth = $maxHeight * $ratio;
    $finalHeight = $maxHeight;
}else{
    $finalHeight = $maxWidth / $ratio;
    $finalWidth = $maxWidth;
}
//Aulas imcompleta por o servidor não possuir essa lib

imagecreatetruecolor($finalWidth, $finalHeight);


