<?php


$eve = file_get_contents("eventos.txt");
$mod = file_get_contents("modalidades.txt");
$cat = file_get_contents("categorias.txt");


echo "<pre>";



print_r(json_decode($eve, true));
print_r(json_decode($mod, true));
print_r(json_decode($cat, true));

?>