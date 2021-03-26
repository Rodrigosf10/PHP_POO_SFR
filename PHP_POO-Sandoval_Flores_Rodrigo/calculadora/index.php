<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="procesar.php" method="post">
		<label>Valor 1</label>
		<p></p>
		<input type="text" name="valor1">
		<p></p>
		<label>Valor 2</label>
		<p></p>
		<input type="text" name="valor2">
		<p></p>
		<select name="opcion">
			<option value="suma">Suma</option>
			<option value="resta">Resta</option>
			<option value="multiplicacion">Multiplicacion</option>
			<option value="division">Division</option>
		</select>
		<button>Calcular</button>
	</form>
</body>
</html>