<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Listar todos os alunos</title>
</head>
<body>
	<h1>Listar todos os alunos</h1>
	<?php
	$arquivo = file("alunos.txt");
	echo "<table>";
	echo "<tr><th>Matrícula</th><th>Nome</th><th>Nota</th></tr>";
	foreach ($arquivo as $linha) {
		$dados = explode(";", $linha);
		echo "<tr>";
		echo "<td>" . $dados[0] . "</td>";
		echo "<td>" . $dados[1] . "</td>";
		echo "<td>" . $dados[2] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	?>
</body>
</html>
