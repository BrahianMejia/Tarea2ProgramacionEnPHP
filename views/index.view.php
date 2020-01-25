<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Inicio</title>
	</head>
	<body>
	<center>
	<fieldset style="background-color: lightblue">
		<h1>¡Entradas al cine!</h1>
		<h2>Tarifa actual: 10.000 pesos.</h2>
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
			
		<label for="edad"><h2 style="display: inline-block;">Digite su edad:</h2></label>
		<input type="number" name="edad" id="edad" required autofocus>
		<input type="submit" name="enviar" value="Enviar">
		</form>

		<?php if(!empty($resultado)): ?>
			<?php echo "<i><b><h3>$resultado</h3></b></i>" ?>
		<?php endif; ?>
	</fieldset>
	</center>
	</body>
</html>