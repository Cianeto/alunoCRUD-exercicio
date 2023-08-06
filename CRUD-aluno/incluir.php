<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Incluir novo aluno</title>
</head>
<body>
	<h1>Incluir novo aluno</h1>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$matricula = $_POST["matricula"];
		$nome = $_POST["nome"];
		$nota = $_POST["nota"];
		$linha = $matricula . ";" . $nome . ";" . $nota . PHP_EOL;
		$arquivo = fopen("alunos.txt", "a");
		fwrite($arquivo, $linha);
		fclose($arquivo);
		echo "Aluno incluído com sucesso.";
	}
	?>
	<form method="post">
		Matrícula: <input type="text" name="matricula"><br>
		Nome: <input type="text" name="nome"><br>
		Nota: <input type="text" name="nota"><br>
		<input type="submit" value="Incluir">
	</form>
</body>
</html>