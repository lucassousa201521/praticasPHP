<?php

$contador = 1;

while ($contador <= 10):
	echo "contador é $contador";
	echo "<br>";
	$contador = $contador + 1;
endwhile;

echo "<hr>";

$contador = 1;
do {
	echo "contador é $contador <br>";
	$contador = $contador +1;
} while ($contador <= 10);