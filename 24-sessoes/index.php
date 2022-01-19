<?php
session_start();

$_SESSION['cor'] = "Verde";
$_SESSION['carro'] = "Gol";

echo $_SESSION['cor']."<br>";
echo $_SESSION['carro']."<br>";

?>