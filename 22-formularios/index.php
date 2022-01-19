<html>
<body>

<?php

/*VALIDÃÇÕES
if(isset($_POST['enviar-formulario'])):
	$erros = array();
	if(!$idade = filter_input(INPUT_POST, "idade", FILTER_VALIDATE_INT)):
		$erros[] = "Idade precisa ser um inteiro";
	endif;

if(!$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)):
		$erros[] = "E-mail inválido";
	endif;

if(!$peso = filter_input(INPUT_POST, "peso", FILTER_VALIDATE_FLOAT)):
		$erros[] = "Peso precisa ser um float";
	endif;

if(!$ip = filter_input(INPUT_POST, "ip", FILTER_VALIDATE_IP)):
		$erros[] = "IP invalido";
	endif;

if(!$url = filter_input(INPUT_POST, "url", FILTER_VALIDATE_URL)):
		$erros[] = "URL invalida";
	endif;
*/
// Sanitize
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
echo $nome."<br>";
// ele limpa o caracter e mantem o importante ex. preencher com @#$@12 ele mantem só o 12
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_SPECIAL_NUMBER_INT);
echo $idade."<br>";

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_EMAIL);
echo $email."<br>";

$url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_SPECIAL_URL);
echo $url."<br>";

// EXIBINDO MENSAGEM

if(!empty($erros)):
	foreach($erros as $erro):
		echo "<li> $erro </li>";
	endforeach;
else:
	echo "Parabéns, seus dados estão corretos";

endif;

?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	Nome: <input type="text" name="nome"><br><br>
	Idade: <input type="text" name="idade"><br><br>
	E-mail: <input type="email" name="email"><br><br>	
	URL: <input type="url" name="url"><br><br>
	<button type="submit" name="enviar-formulario"> Enviar </button><br>
</form>
</body>