<?php 
	include 'conexion.php';
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$pais = $_POST['pais'];

	$query= "update disqueras set nombre='$nombre', pais='$pais' where disquera_id='$id';";
	$resultado = pg_query($con,$query);

	if($resultado){
		echo "Seactualizo";
		header('Location: catalogo_disqueras.php');
	}else{
		echo "Error";
	}


?>
