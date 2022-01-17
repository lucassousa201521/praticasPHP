<?php
// Arrays
$carros = array("BMW","CHEVROLET","FIAT");
echo $carros[1];

echo "<br>";
echo "<hr>";

$motos = array();
$motos[] = "Yamarra";
$motos[] = "Honda";
$motos[10] = "Suzuki";
print_r($motos);

echo "<br>";
echo "<hr>";

$clientes = ["Lucas", "Claudia", "Leia"];
print_r ($clientes);

echo "<br>";
echo "<hr>";

// Count

echo count($clientes);

echo "<br>";
echo "<hr>";

// atribuir a quantidade a uma variavel

$totalClientes = count ($clientes);

echo $totalClientes;

echo "<br>";
echo "<hr>";

// Foreach

foreach($clientes as $valor) {
	echo $valor."<br>";
}

echo "<hr>";
// Arrays associativos

$pessoa = array("nome"=> "Lucas", "idade"=> 28, "altura"=> 1.70);
echo $pessoa["altura"];

foreach($pessoa as $indice => $valor) {
	echo $indice.":".$valor."<br>";
}

echo "<hr>";
// Arrays multidimensionais

$times = array(
	"cariocas"=> array("vasco", "flamengo", "botafogo"), 
	"paulistas"=> array("santos", "sao paulo", "palmeiras"));

echo $times ["cariocas"] [0];
echo "<br>";

foreach($times["cariocas"] as $indice => $valor){
	echo $indice.";".$vallor."<br>";
}