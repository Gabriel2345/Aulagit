<?php
?>
<html>
	<head>
		<title>Recebe dados do link</title>
	</head>
	<body>
		<?php
			$mat = $_GET['matricula'];
			$nome = $_GET['nome'];
			echo "<table border='1'>";
			echo "<tr><th>matricula</th><th>nome</th></tr>";
			echo "<tr><td>$mat</td><td>$nome</td></tr>";
			echo "</table>";
		?>
		<a href="linkenvio.html">Voltar</a>
	</body>
</html>