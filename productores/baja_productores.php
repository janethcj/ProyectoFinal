<?php
	include 'conexion.php';
	$productor_id = $_GET['productor_id'];
	$query = "select * from productores where productor_id='$productor_id';";
	$ejecucion = pg_query($con, $query);
	$resultado = pg_fetch_assoc($ejecucion);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset=UTF-8">
	</head>
	<body>
	<p>¿Estás seguro de que quieres eliminar este registro?</p>
	<table>
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Fecha Nacimiento</th>
	</tr>
	<tr>
	<td><?php echo $resultado['productor_id'];?></td>
	<td><?php echo $resultado['nombre'];?></td>
	<td><?php echo $resultado['apellido'];?></td>
	<td><?php echo $resultado['fecha_nacimiento'];?></td>

	</tr>
		</table>
	<form name="delete" action="eliminar_productores.php" method="post">
		<input type="hidden" name="id" value="<?php echo $productor_id;?>">
		<input type="submit" value="Eliminar">
		<a href="catalogo_productores.php"><input type="button" value="Cancelar"></a>
	</form>
	</body>

</html>
