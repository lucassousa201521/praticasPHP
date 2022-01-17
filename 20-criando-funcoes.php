<?php

function exibirNome($nome) {
	echo "Meu nome é $nome";
}

exibirNome("Lucas Oliveira");

echo "<hr>";

function calcularMedia ($aluno, $n1, $n2, $n3, $n4){
	$media = ($n1 + $n2 + $n3 + $n4) /4;
	if($media >= 7):
		echo "$aluno foi aprovado com a média $media";
	else:
		echo "$aluno foi reprovado, sfd..";
	endif;
}
calcularMedia("Lucas", 2, 5 ,8 ,10);