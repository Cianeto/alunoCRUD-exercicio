<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Alterar aluno existente</title>
</head>
<body>
	<h1>Alterar aluno existente</h1>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$matricula = $_POST["matricula"];
		$nome = $_POST["nome"];
		$nota = $_POST["nota"];
		$arquivo = file("alunos.txt");
		$encontrou = false;
		for ($i = 0; $i < count($arquivo); $i++) {
			$linha = explode(";", $arquivo[$i]);
			if ($linha[0] == $matricula) {
				$arquivo[$i] = $matricula . ";" . $nome . ";" . $nota . PHP_EOL;
				$encontrou = true;
				break;
			}
		}
		if ($encontrou) {
			file_put_contents("alunos.txt", implode("", $arquivo));
			echo "Aluno alterado com sucesso.";
		} else {
			echo "Aluno não encontrado.";
		}
	}
	?>
	<form method="post">
		Matrícula: <input type="text" name="matricula"><br>
		Nome: <input type="text" name="nome"><br>
		Nota: <input type="text" name="nota"><br>
		<input type="submit" value="Alterar">
	</form>
</body>
</html>