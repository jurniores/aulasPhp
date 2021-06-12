<?php
//criando array
$ingredientes = [
    "açucar", "farinha de trigo", 'ovo'
];

//php também dá pra usar o spread operator igual javascript
$bolo = [
    ...$ingredientes, 'corante'
];

print_r($bolo);
/*echo $bolo[3].'</br>';
echo $ingredientes[0].'</br>';

echo 'Versão do php '.phpversion();*/
