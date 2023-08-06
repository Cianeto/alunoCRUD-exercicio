<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Listar aluno por matrícula</title>
</head>
<body>
	<h1>Listar aluno por matrícula</h1>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$matricula = $_POST["matricula"];
		$arquivo = file("alunos.txt");
		$encontrou = false;
		foreach ($arquivo as $linha) {
			$dados = explode(";", $linha);
			if ($dados[0] == $matricula) {
				echo "<p>Matrícula: " . $dados[0] . "</p>";
				echo "<p>Nome: " . $dados[1] . "</p>";
				echo "<p>Nota: " . $dados[2] . "</p>";
				$encontrou = true;
				break;
			}
		}
		if (!$encontrou) {
			echo "Aluno não encontrado.";
		}
	}
	?>
	<form method="post">
		Matrícula: <input type="text" name="matricula"><br>
		<input type="submit" value="Buscar">
	</form>
</body>
</html>