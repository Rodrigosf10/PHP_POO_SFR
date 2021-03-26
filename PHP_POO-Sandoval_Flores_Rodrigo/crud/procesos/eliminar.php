<?php 
	require_once "../conexion.php";
	require_once "../metodosCrud.php";

	$id=$_GET['id'];

	$objeto = new metodos();
	if($objeto->eliminarDatosNombre($id)==1){
		header("location:../index.php");
	}else{
		echo "Fallo al eliminar";
	}
?>