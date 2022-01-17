<?php

for ($contador = 0; $contador <= 10; $contador ++):
	echo "O contador é $contador <br>";
endfor;

echo "<hr>";

$cores = array("verde", "vermelho", "azul");

foreach($cores as $valor):
	echo $valor."<br>";

endforeach;