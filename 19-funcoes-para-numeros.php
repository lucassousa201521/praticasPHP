<?php
$db = 1234.56;
$preco = number_format($db, 2, ",", ".");
echo "O valor do produto é R$ $preco reais";

echo "<hr>";

echo round(3.6); //arredonda o valor para +