<!DOCTYPE html>
<html>
<head>
	<title>Simulador de préstamos</title>
</head>
<body>
	<h1>Simulador de préstamos</h1>
	<form method="POST">
		<label for="prestamo">Cantidad a prestar:</label>
		<input type="number" id="prestamo" name="prestamo" required><br><br>
		<input type="submit" value="Calcular">
	</form>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$prestamo = $_POST["prestamo"];

		$dias = 1;
		$pago_diario = 1;
		$total_pagado = 0;

		while ($total_pagado < $prestamo) {
			$total_pagado += $pago_diario;
			$dias++;

			$pago_diario *= 2;
		}

		echo "<p>Para pagar un préstamo de $" . $prestamo . " con este sistema, se necesitan " . $dias . " días.</p>";
	}
	?>
</body>
</html>
