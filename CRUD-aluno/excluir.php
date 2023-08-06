<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Excluir aluno</title>
</head>
<body>
	<h1>Excluir aluno</h1>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$matricula = $_POST["matricula"];
		$arquivo = file("alunos.txt");
		$encontrou = false;
		for ($i = 0; $i < count($arquivo); $i++) {
			$linha = explode(";", $arquivo[$i]);
			if ($linha[0] == $matricula) {
				unset($arquivo[$i]);
				$encontrou = true;
				break;
			}
		}
		if ($encontrou) {
			file_put_contents("alunos.txt", implode("", $arquivo));
			echo "Aluno excluído com sucesso.";
		} else {
			echo "Aluno não encontrado.";
		}
	}
	?>
	<form method="post">
		Matrícula: <input type="text" name="matricula"><br>
		<input type="submit" value="Excluir">
	</form>
</body>
</html>