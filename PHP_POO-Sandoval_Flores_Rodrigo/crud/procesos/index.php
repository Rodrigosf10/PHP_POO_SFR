<?php  
	require_once "conexion.php";
	require_once "metodosCrud.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<!--Aqui esta la parte de insertar datos datos a MySQL-->
	<form action="procesos/insertar.php" method="post">
		<label>Nombre</label>
		<p></p>
		<input type="text" name="txtnombre">
		<p></p>
		<label>Apellidos</label>
		<p></p>
		<input type="text" name="txtapellido">
		<p></p>
		<button>Agregar</button>
	</form>
	<br><br>
	<table style="border-collapse: collapse;" border="1">
		<tr>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Actualizar</td>
			<td>Eliminar</td>
		</tr>
<?php  
	$objeto = new metodos();
	$sql="SELECT id,nombre,apellido from t_persona";
	$datos=$objeto->mostrarDatos($sql);
	foreach ($datos as $key) {
?>
		<tr>
			<td><?php echo $key['nombre']; ?></td>
			<td><?php echo $key['apellido']; ?></td>
			<td>
				<a href="editar.php?id=<?php echo $key['id']?>">Editar</a>
			</td>
			<td>
				<a href="procesos/eliminar.php?id=<?php echo $key['id']?>">Eliminar</a>
			</td>
		</tr>
<?php 
	}
?>
	</table>
</body>
</html>