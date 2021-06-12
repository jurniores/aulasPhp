<?php
header('Access-Control-Allow-Origin: http://ava.graduacao.ead.cnec.br/my/');
header('Content-Type: application/json');

header('Access-Control-Allow-Methods: GET, post, PUT, DELTE, OPTIONS');
echo json_encode($array);
exit;