<?php


$eve = file_get_contents("eventos.txt");
$mod = file_get_contents("modalidades.txt");
$cat = file_get_contents("categorias.txt");


echo "<pre>";



#print_r(json_decode($eve, true));
print_r(json_decode($mod, true));
#print_r(json_decode($cat, true));


$array1=array(
				"categorias" => array("11111" => array("id_categoria"=>11111, "ds_categoria"=>"categoria1", "tags"=>array("esports"=>"esports","games"=>"games","cultura"=>"cultura")), 
			 						"22222" => array("id_categoria"=>22222, "ds_categoria"=>"categoria2", "tags"=>array("esports","games","cultura"))
			 						)
			);

print_r(json_encode($array1));

$obj=json_encode($array1);

echo "<br>";


print_r(json_decode($obj, true));

?>