<?php


$data = file_get_contents("dados.txt");
$objeto = json_decode($data, true);

echo "<pre>";


print_r(json_decode($data, true));

$array = json_encode($objeto, JSON_PRETTY_PRINT);

print_r($array);






